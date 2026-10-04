import { createHTMLElement } from "../HTMLElement";

export default {
  title: "ImageAndMultimedia/Area",
  tags: ["autodocs"],
  args: {
    content: "Content",
    shape: "poly",
    coords: "129,0,260,95,129,138",
    href: "https://developer.mozilla.org/docs/Web/HTTP",
    alt: "Content",
    download: "download",
    ping: "https://developer.mozilla.org/docs/Web/HTTP",
    referrerpolicy: "no-referrer",
    rel: "noopener",
    target: "_blank",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("area", args);
  },
};

export const Default = {};
