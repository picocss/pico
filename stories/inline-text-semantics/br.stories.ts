import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/BR",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("br", args);
  },
};

export const Default = {};
