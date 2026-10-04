import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Wbr",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("wbr", args);
  },
};

export const Default = {};
