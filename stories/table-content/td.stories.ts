import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/TD",
  tags: ["autodocs"],
  args: {
    content: "Content",
    colspan: 1,
    headers: "",
    rowspan: 1,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("td", args);
  },
};

export const Default = {};
