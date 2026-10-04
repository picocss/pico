import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/Colgroup",
  tags: ["autodocs"],
  args: {
    content: "Content",
    span: 1,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("colgroup", args);
  },
};

export const Default = {};
