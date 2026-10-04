import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TableContent/Caption",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("caption", args);
  },
};

export const Default = {};
