import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/H1",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("h1", args);
  },
};

export const Default = {};
