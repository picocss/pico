import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/Figcaption",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("figcaption", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: () => `<figure>
  <img
    src="/shared-assets/images/examples/elephant.jpg"
    alt="Elephant at sunset" />
  <figcaption>An elephant at sunset</figcaption>
</figure>
`,
};
