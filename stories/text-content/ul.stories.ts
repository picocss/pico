import { create } from "storybook/internal/theming";
import { createHTMLElement } from "../HTMLElement";
import LI from "./li.stories";

export default {
  title: "TextContent/UL",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("ul", args);
  },
};

export const Default = {};

export const WithItems = {
  render: (args) => {
    return createHTMLElement("ul", {
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
  render: () => `<ul>
  <li>first item</li>
  <li>
    second item
    <!-- Look, the closing </li> tag is not placed here! -->
    <ul>
      <li>second item first subitem</li>
      <li>
        second item second subitem
        <!-- Same for the second nested unordered list! -->
        <ul>
          <li>second item second subitem first sub-subitem</li>
          <li>second item second subitem second sub-subitem</li>
          <li>second item second subitem third sub-subitem</li>
        </ul>
      </li>
      <!-- Closing </li> tag for the li that
                  contains the third unordered list -->
      <li>second item third subitem</li>
    </ul>
    <!-- Here is the closing </li> tag -->
  </li>
  <li>third item</li>
</ul>`,
};

export const MozillaExampleNestingOrderedLists = {
  render: () => `<ul>
  <li>first item</li>
  <li>
    second item
    <!-- Look, the closing </li> tag is not placed here! -->
    <ol>
      <li>second item first subitem</li>
      <li>second item second subitem</li>
      <li>second item third subitem</li>
    </ol>
    <!-- Here is the closing </li> tag -->
  </li>
  <li>third item</li>
</ul>`,
};
