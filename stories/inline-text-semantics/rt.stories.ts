import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Rt",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("rt", args);
  },
};

export const Default = {};
