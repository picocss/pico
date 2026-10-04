import { createHTMLElement } from "../HTMLElement";

export default {
  title: "TextContent/Figure",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("figure", args);
  },
};

export const Default = {};

export const MozillaExample = {
  render: () => `<figure>
  <img src="https://picsum.photos/200/300" alt="The beautiful MDN logo." /><figcaption>An elephant at sunset</figcaption>
</figure>`,
};

export const MozillaExampleQuotations = {
  render: () => `<figure>
  <figcaption><b>Edsger Dijkstra:</b></figcaption>
  <blockquote>
    If debugging is the process of removing software bugs, then programming must
    be the process of putting them in.
  </blockquote>
</figure>`,
};

export const MozillaExamplePoems = {
  render: () => `<figure>
  <p style="white-space:pre">
    Bid me discourse, I will enchant thine ear, Or like a fairy trip upon the
    green, Or, like a nymph, with long dishevelled hair, Dance on the sands, and
    yet no footing seen: Love is a spirit all compact of fire, Not gross to
    sink, but light, and will aspire.
  </p>
  <figcaption><cite>Venus and Adonis</cite>, by William Shakespeare</figcaption>
</figure>`,
};
