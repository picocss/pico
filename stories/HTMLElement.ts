export const createHTMLElement = (element, { ...args }) => {
  const elem: HTMLElement | null = document.createElement(element);

  if (!elem) {
    return null;
  }

  if (args.content instanceof HTMLElement) {
    elem.appendChild(args.content);
  } else if (args.content instanceof Array) {
    args.content.forEach((content) => {
      if (content instanceof HTMLElement) {
        elem.appendChild(content);
      } else if (typeof content === "string") {
        const textNode = document.createTextNode(content);
        elem.appendChild(textNode);
      }
    });
  } else if (typeof args.content === "string") {
    const textNode = document.createTextNode(args.content);
    elem.appendChild(textNode);
  }

  Object.keys(args).forEach((key) => {
    // Skip the content key
    if (key === "content") {
      return;
    }
    // If the value is false or null or empty, skip it
    if (!args[key]) {
      return;
    }

    // If the value is a function, add it as an event listener
    console.log("key", key, typeof args[key], typeof args[key] === "function");
    if (typeof args[key] === "function") {
      // If it starts with "on", we need to remove it
      const eventKey = key.startsWith("on") ? key.substring(2) : key;
      //   We need to set the attribute as a callback
      elem.addEventListener(eventKey, args[key]);
    }

    elem.setAttribute(key, args[key]);
  });
  return elem;
};
