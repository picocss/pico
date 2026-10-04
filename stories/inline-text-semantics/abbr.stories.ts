import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Abbr",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("abbr", args);
  },
};

export const Default = {};
