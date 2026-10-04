import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Fieldset",
  tags: ["autodocs"],
  args: {
    content: "Content",
    disabled: false,
    form: "form",
    name: "name",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("fieldset", args);
  },
};

export const Default = {};
