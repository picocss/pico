import { createHTMLElement } from "../HTMLElement";

export default {
  title: "SvgAndMathML/SVG",
  tags: ["autodocs"],
  args: {
    content: "Content",
    height: 100,
    width: 100,
    preserveAspectRatio: "xMidYMid meet",
    viewBox: "0 0 100 100",
    x: 0,
    y: 0,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("svg", args);
  },
};

export const Default = {};
