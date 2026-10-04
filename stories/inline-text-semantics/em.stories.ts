import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Em",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("em", args);
  },
};

export const Default = {};
