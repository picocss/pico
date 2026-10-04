import { ArgTypes } from "@storybook/blocks";
import { createHTMLElement } from "../HTMLElement";
import LI from "./li.stories";

export default {
  title: "TextContent/OL",
  tags: ["autodocs"],
  argTypes: {
    type: {
      control: "select",
      options: ["a", "A", "i", "I", "1"],
      description: "The type of list marker to use.",
    },
  },
  args: {
    content: "Content",
    reversed: false,
    start: 1,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("ol", args);
  },
};

export const Default = {};

export const WithItems = {
  render: (args) => {
    return createHTMLElement("ol", {
      ...args,
      content: [
        createHTMLElement("li", { content: "Item 1" }),
        createHTMLElement("li", { content: "Item 2" }),
        createHTMLElement("li", { content: "Item 3" }),
        createHTMLElement("li", { content: "Item 4" }),
        createHTMLElement("li", { content: "Item 5" }),
      ],
    });
  },
};

export const MozillaExampleNestingLists = {
  render: () => `<ol>
  <li>first item</li>
  <li>
    second item
    <!-- closing </li> tag is not here! -->
    <ol>
      <li>second item first subitem</li>
      <li>second item second subitem</li>
      <li>second item third subitem</li>
    </ol>
  </li>
  <!-- Here's the closing </li> tag -->
  <li>third item</li>
</ol>
`,
};

export const MozillaExampleNestingUnorderedLists = {
  render: () => `<ol>
  <li>first item</li>
  <li>
    second item
    <!-- closing </li> tag is not here! -->
    <ul>
      <li>second item first subitem</li>
      <li>second item second subitem</li>
      <li>second item third subitem</li>
    </ul>
  </li>
  <!-- Here's the closing </li> tag -->
  <li>third item</li>
</ol>`,
};
