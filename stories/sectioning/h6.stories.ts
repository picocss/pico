import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/H6",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("h6", args);
  },
};

export const Default = {};
