import { createHTMLElement } from "../HTMLElement";
import { fn } from "@storybook/test";

export default {
  title: "Forms/Button",
  tags: ["autodocs"],
  args: {
    content: "Content",
    disabled: false,
    form: "",
    formaction: "",
    formenctype: "",
    formmethod: "GET",
    formnovalidate: false,
    formtarget: "",
    name: "",
    popovertarget: "",
    popovertargetaction: "toggle",
    type: "button",
    value: "",

    onclick: fn(),
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("button", args);
  },
};

export const Default = {};
