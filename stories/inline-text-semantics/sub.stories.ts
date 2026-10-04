import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Sub",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("sub", args);
  },
};

export const Default = {};
