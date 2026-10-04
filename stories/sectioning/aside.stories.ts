import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/Aside",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return `<aside>Aside content</aside>`;
  },
};

export const Default = {};

export const MozillaExample = {
  render: (args) => `<article>
  <p>
    The Disney movie <cite>The Little Mermaid</cite> was first released to
    theatres in 1989.
  </p>
  <aside>
    <p>The movie earned $87 million during its initial release.</p>
  </aside>
  <p>More info about the movie…</p>
</article>
`,
};
