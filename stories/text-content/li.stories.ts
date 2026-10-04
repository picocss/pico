import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/LI",
  tags: ["autodocs"],
  args: {
    content: "Content",
    value: 1,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("li", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: () => `<ol>
  <li>first item</li>
  <li>second item</li>
  <li>third item</li>
</ol>`,
};
