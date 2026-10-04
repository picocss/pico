import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/H5",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("h5", args);
  },
};

export const Default = {};
