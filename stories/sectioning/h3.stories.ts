import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/H3",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("h3", args);
  },
};

export const Default = {};
