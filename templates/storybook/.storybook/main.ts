import type { StorybookConfig } from '@storybook/html-vite';

import { dirname } from "path"

import { fileURLToPath } from "node:url"

/**
* This function is used to resolve the absolute path of a package.
* It is needed in projects that use Yarn PnP or are set up within a monorepo.
*/
function getAbsolutePath(value: string): any {
  return dirname(fileURLToPath(import.meta.resolve(`${value}/package.json`)))
}
const config: StorybookConfig = {
  stories: [
    "../stories/**/*.stories.@(js|jsx|mjs|ts|tsx|mdx)"
  ],
  core: {
    disableTelemetry: true,
    builder: '@storybook/builder-vite'
  },
  addons: [
    "@storybook/addon-links",
    '@storybook/addon-a11y',
    '@storybook/addon-docs',
  ],
  framework: {
    "name": getAbsolutePath('@storybook/html-vite'),
    "options": {}
  },
  docs: {
    toc: true,
    defaultName: "Documentation"
  },
};
export default config;
