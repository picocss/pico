import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/S",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("s", args);
  },
};

export const Default = {};
