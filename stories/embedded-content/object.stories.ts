import { createHTMLElement } from "../HTMLElement";

export default {
  title: "EmbeddedContent/Object",
  tags: ["autodocs"],
  args: {
    content: "Content",
    data: "https://example.com",
    type: "text/html",
    form: "form",
    width: 300,
    height: 200,
    name: "objectName",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("object", args);
  },
};

export const Default = {};
