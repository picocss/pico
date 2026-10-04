import { createHTMLElement } from "../HTMLElement";

// Import the details and summary stories
import Details from "./details.stories";
import Summary from "./summary.stories";

export default {
  title: "InteractiveElements/DetailsAndSummary",
  tags: ["autodocs"],
  args: {
    ...Details.args,
    ...Summary.args,
    content: "Details and Summary content",
    summary: "Summary Label",
  },

  render: (args) => {
    return createHTMLElement("details", {
      ...args,
      content: [
        createHTMLElement("summary", {
          ...args,
          content: args.summary,
        }),
        args.content,
      ],
    });
  },
};

export const Default = {};
