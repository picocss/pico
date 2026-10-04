import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/U",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("u", args);
  },
};

export const Default = {};
