import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Strong",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("strong", args);
  },
};

export const Default = {};
