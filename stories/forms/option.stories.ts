import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Option",
  tags: ["autodocs"],
  args: {
    content: "Content",
    disabled: false,
    label: "Label",
    selected: false,
    value: "Value",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("option", args);
  },
};

export const Default = {};
