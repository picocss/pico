import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Var",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("var", args);
  },
};

export const Default = {};
