import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Ruby",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("ruby", args);
  },
};

export const Default = {};
