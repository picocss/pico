import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Legend",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("legend", args);
  },
};

export const Default = {};
