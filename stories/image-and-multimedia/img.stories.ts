import { createHTMLElement } from "../HTMLElement";

export default {
  title: "ImageAndMultimedia/Img",
  tags: ["autodocs"],
  args: {
    src: "https://picsum.photos/200/300",
    alt: "Sample Image",
    attributionsrc: "https://example.com/attribution",
    crossorigin: "anonymous",
    decoding: "async",
    elementtiming: "image",
    fetchpriority: "high",
    height: 300,
    width: 200,
    ismap: false,
    loading: "lazy",
    referrerpolicy: "no-referrer",
    sizes: "(max-width: 600px) 100vw, 50vw",
    srcset:
      "https://picsum.photos/200/300 200w, https://picsum.photos/400/600 400w",
    usemap: "#map",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("img", args);
  },
};

export const Default = {};
