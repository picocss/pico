import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/Section",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("section", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: (args) => `<section>
  <a href="#">Previous article</a>
  <a href="#">Next article</a>
</section><section>
  <button class="reply">Reply</button>
  <button class="reply-all">Reply to all</button>
  <button class="fwd">Forward</button>
  <button class="del">Delete</button>
</section>
`,
};
