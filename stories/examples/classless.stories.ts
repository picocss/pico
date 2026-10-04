import { expect, userEvent, within } from "@storybook/test";

// @ts-ignore
import AllHTML from "./classless.html?raw";

export default {
  title: "Examples/PicoCSSClassless",
  render: (args) => AllHTML,
  parameters: {
    // layout: "fullscreen",
  },
};

export const Default = {};
