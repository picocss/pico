import type { Preview } from '@storybook/html-vite'
import prettier from 'prettier/standalone';
import prettierHtml from 'prettier/plugins/html';
import hljs from 'highlight.js/lib/core';
import json from 'highlight.js/lib/languages/json';
import xml from 'highlight.js/lib/languages/xml';
import 'highlight.js/styles/github.css';

// Register languages
hljs.registerLanguage('json', json);
hljs.registerLanguage('xml', xml);
hljs.registerLanguage('html', xml);

const preview: Preview = {
  parameters: {
    controls: {
      matchers: {
       color: /(background|color)$/i,
       date: /Date$/i,
      },
    },
    docs: {
      layout: 'fullscreen',
    },
    options: {
      // @ts-ignore - Types for storySort parameters
      storySort: (a, b) => {
        /** @desc making sure Documentation shows after all stories, so that Default story opens by default */
        const aIsDocs = a.title.includes('Documentation') || a.type === 'docs';
        const bIsDocs = b.title.includes('Documentation') || b.type === 'docs';

        if (aIsDocs && !bIsDocs) return 1;
        if (!aIsDocs && bIsDocs) return -1;

        return a.id.localeCompare(b.id);
      },
    },
  },
  decorators: [
    (storyFn, context) => {
      const result = storyFn();

      /** @desc Add rendered HTML and JSON code blocks to the documentation */
      if (context.viewMode === 'docs' && result instanceof HTMLElement) {
        // Schedule the DOM injection after the story is rendered
        setTimeout(() => {
          // Find the anchor container
          const anchorContainer = document.querySelector('.sb-anchor');
          const controlsContainer = document.querySelector('.css-14m39zm, .docblock-argstable');

          // If no controls container, find the docs story div as fallback
          const docsStory = document.querySelector('.docs-story');
          const insertionPoint = controlsContainer || (docsStory?.parentElement?.parentElement);

          if (anchorContainer && insertionPoint) {
            // Remove any existing custom sections to avoid duplicates
            const existingArgs = document.getElementById('custom-args-section');
            const existingHTML = document.getElementById('custom-html-section');
            if (existingArgs) existingArgs.remove();
            if (existingHTML) existingHTML.remove();

            // Check if args object is not empty
            const hasArgs = context.args && Object.keys(context.args).length > 0;

            // Create Args JSON section only if args exist
            let argsSection: HTMLDivElement | null = null;
            if (hasArgs) {
              argsSection = document.createElement('div');
              argsSection.id = 'custom-args-section';
              argsSection.style.cssText = 'margin: 2rem 0;';

              const argsTitle = document.createElement('span');
              argsTitle.className = 'custom-subtitle';
              argsTitle.textContent = 'Current Args';
              argsSection.appendChild(argsTitle);

              const argsCodeBlock = document.createElement('div');
              argsCodeBlock.className = 'custom-code-block sb-unstyled theme-atom-one-dark';
              const argsPre = document.createElement('pre');
              argsPre.className = 'sb-unstyled';
              const argsCode = document.createElement('code');
              argsCode.className = 'language-json sb-unstyled';
              argsCode.textContent = JSON.stringify(context.args, null, 2);
              argsPre.appendChild(argsCode);
              argsCodeBlock.appendChild(argsPre);
              argsSection.appendChild(argsCodeBlock);

              // Apply syntax highlighting
              hljs.highlightElement(argsCode);
            }

            // Create HTML Output section
            const htmlSection = document.createElement('div');
            htmlSection.id = 'custom-html-section';
            htmlSection.style.cssText = 'margin: 2rem 0;';

            // Insert sections after the insertion point
            if (controlsContainer) {
              // If controls exist, insert before them
              if (controlsContainer.parentNode) {
                controlsContainer.parentNode.insertBefore(htmlSection, controlsContainer);
                if (argsSection) {
                  controlsContainer.parentNode.insertBefore(argsSection, controlsContainer);
                }
              }
            } else if (insertionPoint) {
              // If no controls, insert after the grandparent of docs-story
              if (argsSection) {
                insertionPoint.insertAdjacentElement('afterend', argsSection);
                argsSection.insertAdjacentElement('afterend', htmlSection);
              } else {
                insertionPoint.insertAdjacentElement('afterend', htmlSection);
              }
            }

            // Format HTML with Prettier
            prettier.format(result.outerHTML, {
              parser: 'html',
              plugins: [prettierHtml],
              printWidth: 80,
              tabWidth: 2,
              useTabs: false,
              singleAttributePerLine: true,
              htmlWhitespaceSensitivity: 'ignore',
            }).then(formatted => {
              const htmlTitle = document.createElement('span');
              htmlTitle.className = 'custom-subtitle';
              htmlTitle.textContent = 'Rendered HTML';
              htmlSection.appendChild(htmlTitle);

              const htmlCodeBlock = document.createElement('div');
              htmlCodeBlock.className = 'custom-code-block sb-unstyled theme-atom-one-dark';
              const htmlPre = document.createElement('pre');
              htmlPre.className = 'sb-unstyled';
              const htmlCode = document.createElement('code');
              htmlCode.className = 'language-html sb-unstyled';
              htmlCode.textContent = formatted;
              htmlPre.appendChild(htmlCode);
              htmlCodeBlock.appendChild(htmlPre);
              htmlSection.appendChild(htmlCodeBlock);

              // Apply syntax highlighting
              hljs.highlightElement(htmlCode);
            }).catch(() => {
              const htmlTitle = document.createElement('span');
              htmlTitle.className = 'custom-subtitle';
              htmlTitle.textContent = 'Rendered HTML';
              htmlSection.appendChild(htmlTitle);

              const htmlCodeBlock = document.createElement('div');
              htmlCodeBlock.className = 'custom-code-block sb-unstyled theme-atom-one-dark';
              const htmlPre = document.createElement('pre');
              htmlPre.className = 'sb-unstyled';
              const htmlCode = document.createElement('code');
              htmlCode.className = 'language-html sb-unstyled';
              htmlCode.textContent = result.outerHTML;
              htmlPre.appendChild(htmlCode);
              htmlCodeBlock.appendChild(htmlPre);
              htmlSection.appendChild(htmlCodeBlock);

              // Apply syntax highlighting
              hljs.highlightElement(htmlCode);
            });
          }
        }, 100);
      }

      return result;
    }
  ],
};

export default preview;
