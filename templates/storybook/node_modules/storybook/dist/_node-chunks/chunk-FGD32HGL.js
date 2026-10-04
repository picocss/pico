import CJS_COMPAT_NODE_URL_46qlajyovnk from 'node:url';
import CJS_COMPAT_NODE_PATH_46qlajyovnk from 'node:path';
import CJS_COMPAT_NODE_MODULE_46qlajyovnk from "node:module";

var __filename = CJS_COMPAT_NODE_URL_46qlajyovnk.fileURLToPath(import.meta.url);
var __dirname = CJS_COMPAT_NODE_PATH_46qlajyovnk.dirname(__filename);
var require = CJS_COMPAT_NODE_MODULE_46qlajyovnk.createRequire(import.meta.url);

// ------------------------------------------------------------
// end of CJS compatibility banner, injected by Storybook's esbuild configuration
// ------------------------------------------------------------
import {
  any
} from "./chunk-4DQE7RS6.js";

// src/cli/detect.ts
async function detectPnp() {
  return !!any([".pnp.js", ".pnp.cjs"]);
}

export {
  detectPnp
};
