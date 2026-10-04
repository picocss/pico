import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Samp",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("samp", args);
  },
};

export const Default = {};
