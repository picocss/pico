import { render } from "sass-embedded";
import { createHTMLElement } from "../HTMLElement";

const inputTypes = [
  "button",
  "checkbox",
  "color",
  "date",
  "datetime-local",
  "email",
  "file",
  "hidden",
  "image",
  "month",
  "number",
  "password",
  "radio",
  "range",
  "reset",
  "search",
  "submit",
  "tel",
  "text",
  "time",
  "url",
  "week",
];

export default {
  title: "Forms/Input",
  tags: ["autodocs"],
  argTypes: {
    type: {
      control: "select",
      options: inputTypes,
    },
  },
  args: {
    content: "Content",
    accept: "text/plain",
    alt: "Alt text",
    capture: "camera",
    checked: true,
    dirname: "input-dir",
    disabled: false,
    form: "form-id",
    formaction: "action-url",
    formenctype: "application/x-www-form-urlencoded",
    formmethod: "GET",
    formnovalidate: false,
    formtarget: "_blank",
    height: 100,
    list: "datalist-id",
    max: 100,
    maxlength: 50,
    min: 0,
    minlength: 5,
    multiple: true,
    name: "input-name",
    pattern: "[a-zA-Z0-9]",
    placeholder: "Placeholder text",
    popvertarget: "popover-target-id",
    popovertargetaction: "toggle",
    readonly: false,
    required: true,
    size: 20,
    src: "https://picsum.photos/200/300",
    step: 1,
    type: "text",
    value: "Input value",
    width: 200,
  },
  // Render the <html> element
  render: (args) => {
    return createHTMLElement("input", args);
  },
};

export const Default = {};

// All input types
export const AllInputTypes = {
  render: (args) => {
    const fragment = document.createDocumentFragment();

    for (const type of inputTypes) {
      args.type = type;

      // Create a new input element for each type
      const element = createHTMLElement("input", {
        ...args,
        type: type,
        placeholder: `Input type: ${type}`,
      });

      if (!element) {
        console.error(`Failed to create input element for type: ${type}`);
        continue;
      }

      // Add the element to the array
      fragment.appendChild(element);
    }
    return fragment;
  },
};

export const WithLabelSibling = {
  args: {
    labelText: "Label text",
  },
  render: (args) => {
    // Fragment
    const fragment = document.createDocumentFragment();
    const label = createHTMLElement("label", {
      content: args.labelText,
    });
    const input = createHTMLElement("input", {
      ...args,
      type: args.type,
    });
    if (!input) {
      console.error(`Failed to create input element for type: ${args.type}`);
      return;
    }
    // Append the label to the fragment
    fragment.appendChild(label);
    // Append the input to the fragment
    fragment.appendChild(input);
    // Return the fragment
    return fragment;
  },
};

export const AsChildOfLabel = {
  args: {
    labelText: "Label text",
  },
  render: (args) => {
    // Fragment
    const fragment = document.createDocumentFragment();
    const label = createHTMLElement("label", {
      content: args.labelText,
    });
    const input = createHTMLElement("input", {
      ...args,
      type: args.type,
    });
    if (!input) {
      console.error(`Failed to create input element for type: ${args.type}`);
      return;
    }
    label.appendChild(input);
    fragment.appendChild(label);
    // Return the fragment
    return fragment;
  },
};

export const AsPrependedChildOfLabel = {
  args: {
    labelText: "Label text",
  },
  render: (args) => {
    // Fragment
    const fragment = document.createDocumentFragment();
    const label = createHTMLElement("label", {
      content: args.labelText,
    });
    const input = createHTMLElement("input", {
      ...args,
      type: args.type,
    });
    if (!input) {
      console.error(`Failed to create input element for type: ${args.type}`);
      return;
    }
    label.prepend(input);
    fragment.appendChild(label);
    // Return the fragment
    return fragment;
  },
};

export const Inline = {
  args: {
    labelText: "Label text",
  },
  render: (args) => {
    // We want to encapsulate the input with text before and after it, e.g. have the input in the middle of a sentence
    // Fragment
    const fragment = document.createDocumentFragment();
    const label = createHTMLElement("label", {
      content: args.labelText,
    });
    const input = createHTMLElement("input", {
      ...args,
      type: args.type,
    });
    if (!input) {
      console.error(`Failed to create input element for type: ${args.type}`);
      return;
    }
    // Create a span to encapsulate the input
    const span = document.createElement("span");
    span.appendChild(input);
    // Add text before the input
    const beforeText = document.createTextNode("Before text ");
    span.prepend(beforeText);
    // Add text after the input
    const afterText = document.createTextNode(" After text goes here");
    span.appendChild(afterText);
    // Append the span to the label
    label.appendChild(span);
    // Append the label to the fragment
    fragment.appendChild(label);
    // Return the fragment
    return fragment;
  },
};
