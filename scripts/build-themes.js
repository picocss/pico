const sass = require("sass");
const path = require("path");
const fs = require("fs");

const themeColors = [
  "amber",
  // "azure",
  "blue",
  "cyan",
  "fuchsia",
  "green",
  "grey",
  "indigo",
  "jade",
  "lime",
  "orange",
  "pink",
  "pumpkin",
  "purple",
  "red",
  "sand",
  "slate",
  "violet",
  "yellow",
  "zinc",
];

const tempScssFoldername = path.join(__dirname, "../.pico");
const cssFoldername = path.join(__dirname, "../css");

// Ceeate the temp folder if it doesn't exist
if (!fs.existsSync(tempScssFoldername)) {
  fs.mkdirSync(tempScssFoldername);
}

// Delete all files in the temp folder
fs.readdirSync(tempScssFoldername).forEach((file) => {
  fs.unlinkSync(path.join(tempScssFoldername, file));
});

// Loop through the theme colors
themeColors.forEach((themeColor) => {
  // All the versions to generate
  const versions = [
    {
      name: "pico",
      content: `@use "../scss" with (
        $theme-color: "${themeColor}"
      );`,
    },
    {
      name: "pico.classless",
      content: `@use "../scss" with (
        $theme-color: "${themeColor}",
        $enable-semantic-container: true,
        $enable-classes: false
      );`,
    },
    {
      name: "pico.fluid.classless",
      content: `@use "../scss" with (
        $theme-color: "${themeColor}", 
        $enable-semantic-container: true, 
        $enable-viewport: false, 
        $enable-classes: false
      );`,
    },
    {
      name: "pico.conditional",
      content: `@use "../scss" with (
        $theme-color: "${themeColor}",
        $parent-selector: ".pico"
      );`,
    },
    {
      name: "pico.classless.conditional",
      content: `@use "../scss" with (
        $theme-color: "${themeColor}",
        $enable-semantic-container: true,
        $enable-classes: false,
        $parent-selector: ".pico"
      );`,
    },
    {
      name: "pico.fluid.classless.conditional",
      content: `@use "../scss" with (
        $theme-color: "${themeColor}", 
        $enable-semantic-container: true, 
        $enable-viewport: false, 
        $enable-classes: false,
        $parent-selector: ".pico"
      );`,
    },
  ];

  // Loop through the versions
  versions.forEach((version) => {
    // Create the file
    fs.writeFileSync(
      path.join(tempScssFoldername, `${version.name}.${themeColor}.scss`),
      version.content,
    );

    // Compile the file
    const result = sass.compile(
      path.join(tempScssFoldername, `${version.name}.${themeColor}.scss`),
      { outputStyle: "compressed" },
    );

    // Write the file
    fs.writeFileSync(path.join(cssFoldername, `${version.name}.${themeColor}.min.css`), result.css);
  });
});
