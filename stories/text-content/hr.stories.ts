import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/HR",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return `<hr>`;
  },
};

export const Default = {};

export const MozillaExample = {
  render: () => `<p>
  This is the first paragraph of text. This is the first paragraph of text. This
  is the first paragraph of text. This is the first paragraph of text.
</p>

<hr />

<p>
  This is the second paragraph of text. This is the second paragraph of text.
  This is the second paragraph of text. This is the second paragraph of text.
</p>`,
};
