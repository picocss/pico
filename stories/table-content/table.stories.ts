import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/Table",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("table", args);
  },
};

export const Default = {};
