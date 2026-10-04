import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/THead",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("thead", args);
  },
};

export const Default = {};
