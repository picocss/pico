import { createHTMLElement } from "../HTMLElement";

export default {
  title: "InlineTextSemantics/A",
  tags: ["autodocs"],
  args: {
    content: "Content",
    href: "https://example.com",
    target: "_blank",
    download: "file.txt",
    rel: "noopener noreferrer",
    hreflang: "en",
    ping: "https://example.com/ping",
    referrerpolicy: "no-referrer",
    type: "text/html",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("a", args);
  },
};

export const Default = {};
