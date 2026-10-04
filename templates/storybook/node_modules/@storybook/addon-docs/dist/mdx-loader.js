import CJS_COMPAT_NODE_URL_g8l464utiyh from 'node:url';
import CJS_COMPAT_NODE_PATH_g8l464utiyh from 'node:path';
import CJS_COMPAT_NODE_MODULE_g8l464utiyh from "node:module";

var __filename = CJS_COMPAT_NODE_URL_g8l464utiyh.fileURLToPath(import.meta.url);
var __dirname = CJS_COMPAT_NODE_PATH_g8l464utiyh.dirname(__filename);
var require = CJS_COMPAT_NODE_MODULE_g8l464utiyh.createRequire(import.meta.url);

// ------------------------------------------------------------
// end of CJS compatibility banner, injected by Storybook's esbuild configuration
// ------------------------------------------------------------
import {
  compile
} from "./_node-chunks/chunk-4D5JAY4J.js";
import "./_node-chunks/chunk-HJR7EPNM.js";
import "./_node-chunks/chunk-XKWPYUXN.js";
import "./_node-chunks/chunk-R3UAGPYA.js";

// src/mdx-loader.ts
var DEFAULT_RENDERER = `
import React from 'react';
`;
async function loader(content) {
  let callback = this.async(), options = { ...this.getOptions(), filepath: this.resourcePath };
  try {
    let result = await compile(content, options), code = `${DEFAULT_RENDERER}
${result}`;
    return callback(null, code);
  } catch (err) {
    return console.error("Error loading:", this.resourcePath), callback(err);
  }
}
var mdx_loader_default = loader;
export {
  mdx_loader_default as default
};
