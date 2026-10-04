import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Scripting/Noscript",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("noscript", args);
  },
};

export const Default = {};
