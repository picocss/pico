import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Optgroup",
  tags: ["autodocs"],
  args: {
    content: "Content",
    label: "Label",
    disabled: false,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("optgroup", args);
  },
};

export const Default = {};
