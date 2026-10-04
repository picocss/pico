import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Span",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("span", args);
  },
};

export const Default = {};
