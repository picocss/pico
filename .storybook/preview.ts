import "../scss/pico.scss";

import { withThemeByDataAttribute } from "@storybook/addon-themes";
import { HtmlRenderer, Preview } from "@storybook/html";
import { withActions } from "@storybook/addon-actions/decorator";

const preview: Preview = {
  parameters: {
    controls: {
      matchers: {
        color: /(background|color)$/i,
        date: /datetime$/i,
      },
    },
  },
  decorators: [
    withActions,
    withThemeByDataAttribute<HtmlRenderer>({
      themes: {
        light: "light",
        dark: "dark",
      },
      defaultTheme: "light",
      attributeName: "data-theme",
    }),
  ],
  argTypes: {
    accesskey: {
      control: "text",
      description: "Specifies a shortcut key to activate/focus an element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    anchor: {
      control: "text",
      description: "Defines a named anchor within a document.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    autocapitalize: {
      control: "radio",
      description: "Controls the capitalization of text.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: ["none", "sentences", "words", "characters"],
    },
    autocorrect: {
      control: "radio",
      description: "Controls whether text correction is enabled or not.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: ["on", "off"],
    },
    autofocus: {
      control: "boolean",
      description: "Indicates if the element should receive focus on page load.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    class: {
      control: "text",
      description: "Specifies one or more class names for the element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    contenteditable: {
      control: "radio",
      description: "Indicates if the element is editable.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: [true, false, "plaintext-only"],
    },
    dir: {
      control: "radio",
      description: "Specifies the text direction for the content.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: ["ltr", "rtl", "auto"],
    },
    draggable: {
      control: "boolean",
      description: "Specifies whether an element is draggable.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    enterkeyhint: {
      control: "text",
      description: "Hints what action label to present for the enter key.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    exportparts: {
      control: "text",
      description: "Defines which shadow DOM parts can be exposed for styling.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    hidden: {
      control: "boolean",
      description: "Indicates if the element is not relevant and should be hidden.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    id: {
      control: "text",
      description: "Specifies a unique id for the element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    inert: {
      control: "boolean",
      description: "Indicates if the element is inactive and not focusable.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    inputmode: {
      control: "radio",
      description: "Provides a hint for input type devices.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: ["none", "text", "decimal", "numeric", "tel", "search", "email", "url"],
    },
    is: {
      control: "text",
      description: "Allows extending built-in HTML elements.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    itemid: {
      control: "text",
      description: "Defines a unique identifier for microdata.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    itemprop: {
      control: "text",
      description: "Specifies a property of an item.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    itemref: {
      control: "text",
      description: "Provides a list of IDs for microdata.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    itemscope: {
      control: "boolean",
      description: "Defines the scope of an item for microdata.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    itemtype: {
      control: "text",
      description: "Specifies the type of an item for microdata.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    lang: {
      control: "text",
      description: "Specifies the language of the element’s content.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    nonce: {
      control: "text",
      description: "Cryptographic nonce used by Content Security Policy.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    part: {
      control: "text",
      description: "Defines the parts of an element exposed to CSS.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    popover: {
      control: "radio",
      description: "Specifies the popover attribute for interactive UI.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: ["auto", "hint", "manual"],
    },
    role: {
      control: "text",
      description: "Defines an ARIA role for the element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    slot: {
      control: "text",
      description: "Specifies the slot the element should be assigned to.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    spellcheck: {
      control: "boolean",
      description: "Indicates if spelling and grammar checking is enabled.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    style: {
      control: "text",
      description: "Specifies an inline CSS style for the element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    tabindex: {
      control: "number",
      description: "Defines the tab order of the element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    title: {
      control: "text",
      description: "Provides additional information about an element.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    translate: {
      control: "radio",
      description: "Specifies if the content should be translated or not.",
      table: {
        category: "Gobal HTML Attributes",
      },
      options: ["yes", "no"],
    },
    writingsuggestions: {
      control: "boolean",
      description:
        "An enumerated attribute indicating if browser-provided writing suggestions should be enabled under the scope of the element or not.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },
    "data-test-attribute": {
      control: "text",
      description: "Custom attribute for testing purposes.",
      table: {
        category: "Gobal HTML Attributes",
      },
    },

    // Aria Attributes
    "aria-atomic": {
      control: "boolean",
      description: "Indicates if assistive technologies should present changes atomically.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-busy": {
      control: "boolean",
      description: "Indicates if the element is currently being updated.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-controls": {
      control: "text",
      description: "Identifies the element (or elements) that control the current element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-current": {
      control: "radio",
      description: "Indicates the current item within a container or set.",
      table: {
        category: "Aria Attributes",
      },
      options: ["page", "step", "location", "date", "time"],
    },
    "aria-describedby": {
      control: "text",
      description: "Identifies the element (or elements) that describe the current element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-description": {
      control: "text",
      description: "Provides a description for the current element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-details": {
      control: "text",
      description:
        "Identifies the element (or elements) that provide additional information about the current element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-disabled": {
      control: "boolean",
      description: "Indicates that the element is perceivable but disabled.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-dropeffect": {
      control: "radio",
      description: "Indicates the allowed drag-and-drop operations.",
      table: {
        category: "Aria Attributes",
      },
      options: ["none", "copy", "execute", "link", "move", "popup"],
    },
    "aria-errormessage": {
      control: "text",
      description: "Identifies the element (or elements) that contains the error message.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-flowto": {
      control: "text",
      description: "Identifies the next element in an alternate reading order.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-grabbed": {
      control: "boolean",
      description: "Indicates if the element is currently grabbed.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-haspopup": {
      control: "radio",
      description: "Indicates if the element has a popup context menu.",
      table: {
        category: "Aria Attributes",
      },
      options: ["false", "true", "menu", "listbox", "tree", "grid"],
    },
    "aria-hidden": {
      control: "boolean",
      description: "Indicates if the element is hidden from assistive technologies.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-invalid": {
      control: "boolean",
      description: "Indicates if the element has an invalid value.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-keyshortcuts": {
      control: "text",
      description: "Defines keyboard shortcuts for the element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-label": {
      control: "text",
      description: "Defines a string value that labels the current element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-labelledby": {
      control: "text",
      description: "Identifies the element (or elements) that label the current element.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-live": {
      control: "radio",
      description: "Indicates that an element will be updated and describes the type of update.",
      table: {
        category: "Aria Attributes",
      },
      options: ["off", "assertive", "polite"],
    },
    "aria-owns": {
      control: "text",
      description: "Identifies the element (or elements) that the current element owns.",
      table: {
        category: "Aria Attributes",
      },
    },
    "aria-relevant": {
      control: "radio",
      description: "Indicates what types of changes should be presented to the user.",
      table: {
        category: "Aria Attributes",
      },
      options: ["additions", "removals", "text"],
    },
    "aria-roledescription": {
      control: "text",
      description: "Defines a human-readable description for the role.",
      table: {
        category: "Aria Attributes",
      },
    },
  },
  // args: {
  //   onclick: action("clicked"),
  //   onmouseover: action("mouseover"),
  //   onmouseout: action("mouseout"),
  //   onfocus: action("focused"),
  //   onblur: action("blurred"),
  //   onkeydown: action("key down"),
  //   onkeyup: action("key up"),
  //   onkeypress: action("key pressed"),
  //   oninput: action("input"),
  //   onchange: action("changed"),
  //   onsubmit: action("submitted"),
  //   onreset: action("reset"),
  //   onselect: action("selected"),
  //   ondrag: action("dragged"),
  //   ondragstart: action("drag started"),
  //   ondragend: action("drag ended"),
  //   ondragenter: action("drag entered"),
  //   ondragleave: action("drag left"),
  //   ondragover: action("drag over"),
  //   ondragdrop: action("drag dropped"),
  //   ondragexit: action("drag exited"),
  //   oncopy: action("copied"),
  //   oncut: action("cut"),
  //   onpaste: action("pasted"),
  //   oncontextmenu: action("context menu opened"),
  //   onwheel: action("wheel scrolled"),
  // },
};

export default preview;
