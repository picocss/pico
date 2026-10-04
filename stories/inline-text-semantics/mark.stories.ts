import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Mark",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("mark", args);
  },
};

export const Default = {};
