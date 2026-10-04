import { createHTMLElement } from "../HTMLElement";

export default {
  title: "EmbeddedContent/Embed",
  tags: ["autodocs"],
  args: {
    src: "https://example.com",
    type: "text/html",
    width: 300,
    height: 200,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("embed", args);
  },
};

export const Default = {};
