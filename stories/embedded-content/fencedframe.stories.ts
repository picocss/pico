import { createHTMLElement } from "../HTMLElement";

export default {
  title: "EmbeddedContent/FencedFrame",
  tags: ["autodocs"],
  args: {
    src: "https://example.com",
    type: "text/html",
    width: 300,
    height: 200,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("fencedframe", args);
  },
};

export const Default = {};
