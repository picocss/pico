import { createHTMLElement } from "../HTMLElement";

export default {
  title: "SvgAndMathML/Math",
  tags: ["autodocs"],
  args: {
    content: "Content",
    display: "block",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("math", args);
  },
};

export const Default = {};
