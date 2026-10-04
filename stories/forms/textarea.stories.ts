import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Textarea",
  tags: ["autodocs"],
  args: {
    content: "Content",
    cols: 20,
    dirname: "dirname",
    disabled: false,
    form: "form",
    maxlength: 100,
    minlength: 0,
    name: "name",
    placeholder: "placeholder",
    readonly: false,
    required: false,
    rows: 2,
    wrap: "soft",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("textarea", args);
  },
};

export const Default = {};
