import { createHTMLElement } from "../HTMLElement";

export default {
  title: "EmbeddedContent/Source",
  tags: ["autodocs"],
  args: {
    type: "video/mp4",
    src: "https://www.example.com/video.mp4",
    srcset:
      "https://www.example.com/video_720p.mp4 720w, https://www.example.com/video_1080p.mp4 1080w",
    sizes: "100vw",
    media: "(min-width: 600px)",
    height: 240,
    width: 320,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("source", args);
  },
};

export const Default = {};
