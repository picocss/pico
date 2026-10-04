import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Datalist",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("datalist", args);
  },
};

export const Default = {};
