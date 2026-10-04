import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Dfn",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("dfn", args);
  },
};

export const Default = {};
