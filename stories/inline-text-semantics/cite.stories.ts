import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Cite",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("cite", args);
  },
};

export const Default = {};
