import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/Header",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("header", args);
  },
};

export const Default = {};

export const MozillaExamplePageHeader = {
  render: (args) => `<header>
  <h1>Main Page Title</h1>
  <img src="https://picsum.photos/200/300" alt="MDN logo" />
</header>`,
};

export const MozillaExampleArticleHeader = {
  render: (args) => `<article>
  <header>
    <h2>The Planet Earth</h2>
    <p>
      Posted on Wednesday, <time datetime="2017-10-04">4 October 2017</time> by
      Jane Smith
    </p>
  </header>
  <p>
    We live on a planet that's blue and green, with so many things still unseen.
  </p>
  <p><a href="https://example.com/the-planet-earth/">Continue reading…</a></p>
</article>
`,
};
