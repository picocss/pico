import { createHTMLElement } from "../HTMLElement";

export default {
  title: "ImageAndMultimedia/Track",
  tags: ["autodocs"],
  args: {
    src: "https://www.w3schools.com/html/mov_bbb.vtt",
    default: "default",
    kind: "captions",
    label: "English",
    srclang: "en",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("track", args);
  },
};

export const Default = {};
