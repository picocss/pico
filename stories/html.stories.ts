export default {
  title: "Example/HTML",
  tags: ["autodocs"],
  args: {
    content: "Content",
  },
  // Render the <html> element
  render: (args) => {
    return `<html>
            <head>
            <title>HTML Story</title>
            </head>
            <body>
            <h1>Hello, world!</h1>
            </body>
        </html>`;
  },
};

export const Default = {};
