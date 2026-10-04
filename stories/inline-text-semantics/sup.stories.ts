import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Sup",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("sup", args);
  },
};

export const Default = {};
