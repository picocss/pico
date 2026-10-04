import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/Address",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return `<address
    ${Object.entries(args)
      .map(([key, value]) => {
        if (!value) {
          return "";
        }
        return `${key}="${value}"`;
      })
      .join(" ")}
    >${args.content}</address>`;
  },
};

export const Default = {};

export const MozillaExample = {
  render: (args) => `<address>
  You can contact author at
  <a href="http://www.example.com/contact">www.example.com</a>.<br />
  If you see any bugs, please
  <a href="mailto:webmaster@example.com">contact webmaster</a>.<br />
  You may also want to visit us:<br />
  Mozilla Foundation<br />
  331 E Evelyn Ave<br />
  Mountain View, CA 94041<br />
  USA
</address>`,
};
