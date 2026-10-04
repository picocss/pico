import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/Menu",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("menu", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: () => `<div class="news">
  <a href="#">NASA’s Webb Delivers Deepest Infrared Image of Universe Yet</a>
  <menu>
    <li><button id="save">Save for later</button></li>
    <li><button id="share">Share this news</button></li>
  </menu>
</div>`,
};

export const MozillaExample2 = {
  render: () => `<menu>
  <li><button onclick="copy()">Copy</button></li>
  <li><button onclick="cut()">Cut</button></li>
  <li><button onclick="paste()">Paste</button></li>
</menu>`,
};
