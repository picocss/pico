import { render } from "sass-embedded";
import { createHTMLElement } from "../HTMLElement";

export default {
  title: "Sectioning/Article",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return `<article>Article Content</article>`;
  },
};

export const Default = {};

export const WithContent = {
  render: (args) => {
    return createHTMLElement("article", {
      content: `<header><h1>Article Title</h1></header>
        <p>This is the first paragraph of the article.</p>
        <p>This is the second paragraph of the article.</p>
        <footer><p>Author: John Doe</p></footer>`,
    });
  },
};

export const MozillaExample = {
  render: (args) => `<article>
  <h2>Jurassic Park</h2>
  <section >
    <h3>Review</h3>
    <p>Dinos were great!</p>
  </section>
  <section>
    <h3>User reviews</h3>
    <article>
      <h4>Too scary!</h4>
      <p>Way too scary for me.</p>
      <footer>
        <p>
          Posted on
          <time datetime="2015-05-16 19:00">May 16</time>
          by Lisa.
        </p>
      </footer>
    </article>
    <article>
      <h4>Love the dinos!</h4>
      <p>I agree, dinos are my favorite.</p>
      <footer>
        <p>
          Posted on
          <time datetime="2015-05-17 19:00">May 17</time>
          by Tom.
        </p>
      </footer>
    </article>
  </section>
  <footer>
    <p>
      Posted on
      <time datetime="2015-05-15 19:00">May 15</time>
      by Staff.
    </p>
  </footer>
</article>
`,
};
