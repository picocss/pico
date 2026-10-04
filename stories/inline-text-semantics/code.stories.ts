import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Code",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return `<data>${args.content}</code>`;
  },
};

export const Default = {};
