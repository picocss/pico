import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Data",
  tags: ["autodocs"],
  args: {
    content: "Content",
    value: "Value",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("data", args);
  },
};

export const Default = {};
