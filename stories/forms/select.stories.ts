import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Select",
  tags: ["autodocs"],
  args: {
    content: "Content",
    autocomplete: "on",
    disabled: false,
    form: "form",
    multiple: false,
    name: "name",
    required: false,
    size: 0,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("select", args);
  },
};

export const Default = {};
