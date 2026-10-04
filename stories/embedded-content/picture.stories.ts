import { createHTMLElement } from "../HTMLElement";

export default {
  title: "EmbeddedContent/Picture",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("picture", args);
  },
};

export const Default = {};
