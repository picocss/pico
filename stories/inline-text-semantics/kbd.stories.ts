import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Kbd",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("kbd", args);
  },
};

export const Default = {};
