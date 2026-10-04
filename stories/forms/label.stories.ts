import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Label",
  tags: ["autodocs"],
  args: {
    content: "Content",
    for: "input-id",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("label", args);
  },
};

export const Default = {};
