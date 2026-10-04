import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/Col",
  tags: ["autodocs"],
  args: {
    content: "Content",
    span: 1,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("col", args);
  },
};

export const Default = {};
