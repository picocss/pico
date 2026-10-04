import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/TFoot",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("tfoot", args);
  },
};

export const Default = {};
