import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/TH",
  tags: ["autodocs"],
  args: {
    content: "Content",
    abbr: "Abbreviation",
    colspan: 2,
    headers: "Header",
    rowspan: 2,
    scope: "col",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("th", args);
  },
};

export const Default = {};
