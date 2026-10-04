import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/TR",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("tr", args);
  },
};

export const Default = {};
