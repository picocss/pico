import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/I",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("i", args);
  },
};

export const Default = {};
