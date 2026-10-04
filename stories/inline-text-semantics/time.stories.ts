import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Time",
  tags: ["autodocs"],
  args: {
    content: "Content",
    datetime: "2023-10-01T12:00:00Z",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("time", args);
  },
};

export const Default = {};
