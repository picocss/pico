import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InteractiveElements/Summary",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("summary", args);
  },
};

export const Default = {};
