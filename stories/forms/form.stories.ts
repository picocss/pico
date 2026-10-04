import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Form",
  tags: ["autodocs"],
  args: {
    content: "Content",
    "accept-charset": "UTF-8",
    name: "name",
    rel: "noopener",
    action: "action",
    enctype: "application/x-www-form-urlencoded",
    method: "get",
    novalidate: false,
    target: "_self",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("form", args);
  },
};

export const Default = {};
