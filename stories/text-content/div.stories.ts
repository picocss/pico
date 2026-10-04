import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/Div",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("div", args);
  },
};

export const Default = {};
