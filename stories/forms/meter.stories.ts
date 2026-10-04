import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Forms/Meter",
  tags: ["autodocs"],
  args: {
    content: "Content",
    value: 0.5,
    min: 0,
    max: 1,
    low: 0.2,
    high: 0.8,
    optimum: 0.5,
    form: "form",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("meter", args);
  },
};

export const Default = {};
