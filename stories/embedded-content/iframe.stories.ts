import { createHTMLElement } from "../HTMLElement";

export default {
  title: "EmbeddedContent/Iframe",
  tags: ["autodocs"],
  args: {
    src: "https://example.com",
    type: "text/html",
    width: 300,
    height: 200,
    allow:
      "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture",
    allowfullscreen: false,
    allowpaymentrequest: false,
    browsingtopics: false,
    credentialless: true,
    loading: "lazy",
    name: "iframe-name",
    refererpolicy: "no-referrer",
    sandbox: "allow-same-origin allow-scripts",
    srcdoc: "<p>Your browser does not support iframes.</p>",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("iframe", args);
  },
};

export const Default = {};
