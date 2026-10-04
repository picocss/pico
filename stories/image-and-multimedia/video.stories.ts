import { createHTMLElement } from "../HTMLElement";

export default {
  title: "ImageAndMultimedia/Video",
  tags: ["autodocs"],
  args: {
    src: "https://www.w3schools.com/html/mov_bbb.mp4",
    controls: true,
    autoplay: false,
    controlslist: "nodownload",
    crossorigin: "anonymous",
    disablepictureinpicture: false,
    disableremoteplayback: false,
    height: 240,
    width: 320,
    loop: false,
    muted: false,
    playsinline: false,
    poster: "https://picsum.photos/200/300",
    preload: "auto",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("video", args);
  },
};

export const Default = {};
