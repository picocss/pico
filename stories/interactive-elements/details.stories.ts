import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InteractiveElements/Details",
  tags: ["autodocs"],
  args: {
    content: "Content",
    name: "details",
    open: false,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("details", args);
  },
};

export const Default = {};

export const Open = {
  args: {
    open: true,
  },
};
