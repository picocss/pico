import { createHTMLElement } from "../HTMLElement";

export default {
  title: "DemarcatingEdits/Del",
  tags: ["autodocs"],
  args: {
    content: "Content",
    cite: "https://example.com",
    datetime: "2023-10-01T12:00:00Z",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("del", args);
  },
};

export const Default = {};
