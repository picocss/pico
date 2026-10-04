import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Q",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("q", args);
  },
};

export const Default = {};
