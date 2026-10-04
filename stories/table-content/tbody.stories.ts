import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/TBody",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("tbody", args);
  },
};

export const Default = {};
