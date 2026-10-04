import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/Bdi",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("bdi", args);
  },
};

export const Default = {};
