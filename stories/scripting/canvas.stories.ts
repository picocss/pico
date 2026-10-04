import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Scripting/Canvas",
  tags: ["autodocs"],
  args: {
    content: "Content",
    height: 100,
    width: 100,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("canvas", args);
  },
};

export const Default = {};
