import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/H4",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("h4", args);
  },
};

export const Default = {};
