import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Bdo",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("bdo", args);
  },
};

export const Default = {};
