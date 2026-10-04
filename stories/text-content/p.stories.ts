import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/P",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("p", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: () => `<p>
  This is the first paragraph of text. This is the first paragraph of text. This
  is the first paragraph of text. This is the first paragraph of text.
</p>
<p>
  This is the second paragraph. This is the second paragraph. This is the second
  paragraph. This is the second paragraph.
</p>`,
};
