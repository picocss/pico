import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Rp",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("rp", args);
  },
};

export const Default = {};
