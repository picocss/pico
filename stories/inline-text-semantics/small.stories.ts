import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Small",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("small", args);
  },
};

export const Default = {};
