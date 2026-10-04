import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Progress",
  tags: ["autodocs"],
  args: {
    content: "Content",
    max: 100,
    value: 50,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("progress", args);
  },
};

export const Default = {};
