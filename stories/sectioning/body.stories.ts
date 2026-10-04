import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/Body",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("body", args);
  },
};

export const Default = {};
