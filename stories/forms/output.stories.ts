import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Output",
  tags: ["autodocs"],
  args: {
    content: "Content",
    for: "for",
    form: "form",
    name: "name",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("output", args);
  },
};

export const Default = {};
