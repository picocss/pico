import { createHTMLElement } from "../HTMLElement";

export default {
  title: "ImageAndMultimedia/Audio",
  tags: ["autodocs"],
  args: {
    src: "https://www.w3schools.com/html/horse.mp3",
    controls: true,
    autoplay: false,
    controlslist: "nodownload",
    crossorigin: "anonymous",
    disableremoteplayback: false,
    loop: false,
    muted: false,
    preload: "auto",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("audio", args);
  },
};

export const Default = {};
