import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/HGroup",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("hgroup", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: (args) => `<hgroup id="document-title">
    <h1>HTML: Living Standard</h1>
    <p>Last Updated 12 July 2022</p>
  </hgroup>
  <p>Some intro to the document.</p>
  <h2>Table of contents</h2>
  <ol id="toc">
    …
  </ol>
  <h2>First section</h2>
  <p>Some intro to the first section.</p>
`,
};
