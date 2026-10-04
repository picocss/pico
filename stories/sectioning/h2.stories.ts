import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/H2",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("h2", args);
  },
};

export const Default = {};
