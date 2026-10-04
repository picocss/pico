import CJS_COMPAT_NODE_URL_46qlajyovnk from 'node:url';
import CJS_COMPAT_NODE_PATH_46qlajyovnk from 'node:path';
import CJS_COMPAT_NODE_MODULE_46qlajyovnk from "node:module";

var __filename = CJS_COMPAT_NODE_URL_46qlajyovnk.fileURLToPath(import.meta.url);
var __dirname = CJS_COMPAT_NODE_PATH_46qlajyovnk.dirname(__filename);
var require = CJS_COMPAT_NODE_MODULE_46qlajyovnk.createRequire(import.meta.url);

// ------------------------------------------------------------
// end of CJS compatibility banner, injected by Storybook's esbuild configuration
// ------------------------------------------------------------

// src/common/utils/utils.ts
var groupBy = (items, keySelector) => items.reduce(
  (acc, item, index) => {
    let key = keySelector(item, index);
    return acc[key] ??= [], acc[key].push(item), acc;
  },
  {}
);
function invariant(condition, message) {
  if (!condition)
    throw new Error((typeof message == "function" ? message() : message) ?? "Invariant failed");
}

export {
  groupBy,
  invariant
};
