import { create } from 'storybook/theming';

export default create({
  base: "light",
  brandTitle: "PicoCSS",
  brandUrl: "https://picocss.com",
  brandImage: `https://picocss.com/build/_assets/pico-logo-light-OKNA7EES.svg`,
  brandTarget: "_blank",

  // You can control image size with these properties (in pixels)
  // Note: These don't directly control image size, but control the sidebar width
  // To control image size, use a preview-head.html file with custom CSS
});
