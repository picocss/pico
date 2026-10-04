import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/B",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("b", args);
  },
};

export const Default = {};
