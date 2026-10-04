import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Scripting/Script",
  tags: ["autodocs"],
  args: {
    content: "Content",
    async: false,
    attributionsrc: "",
    blocking: false,
    crossorigin: "",
    defer: false,
    fetchpriority: "auto",
    integrity: "",
    nomodule: false,
    referrerpolicy: "no-referrer",
    src: "",
    type: "text/javascript",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("script", args);
  },
};

export const Default = {};
