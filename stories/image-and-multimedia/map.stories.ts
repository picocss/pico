import { createHTMLElement } from "../HTMLElement";

export default {
  title: "ImageAndMultimedia/Map",
  tags: ["autodocs"],
  args: {
    content: "Content",
    name: "name",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("map", args);
  },
};

export const Default = {};
