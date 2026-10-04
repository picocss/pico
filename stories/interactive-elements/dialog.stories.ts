import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InteractiveElements/Dialog",
  tags: ["autodocs"],
  args: {
    content: "Content",
    open: false,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("dialog", args);
  },
};

export const Default = {};
