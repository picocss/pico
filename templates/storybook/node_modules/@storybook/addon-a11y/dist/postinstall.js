import CJS_COMPAT_NODE_URL_cqu0oobb0x from 'node:url';
import CJS_COMPAT_NODE_PATH_cqu0oobb0x from 'node:path';
import CJS_COMPAT_NODE_MODULE_cqu0oobb0x from "node:module";

var __filename = CJS_COMPAT_NODE_URL_cqu0oobb0x.fileURLToPath(import.meta.url);
var __dirname = CJS_COMPAT_NODE_PATH_cqu0oobb0x.dirname(__filename);
var require = CJS_COMPAT_NODE_MODULE_cqu0oobb0x.createRequire(import.meta.url);

// ------------------------------------------------------------
// end of CJS compatibility banner, injected by Storybook's esbuild configuration
// ------------------------------------------------------------

// src/postinstall.ts
import { JsPackageManagerFactory } from "storybook/internal/common";
async function postinstall(options) {
  let args = ["storybook", "automigrate", "addon-a11y-addon-test"];
  args.push("--loglevel", "silent"), args.push("--skip-doctor"), options.yes && args.push("--yes"), options.packageManager && args.push("--package-manager", options.packageManager), options.configDir && args.push("--config-dir", options.configDir), await JsPackageManagerFactory.getPackageManager({
    force: options.packageManager,
    configDir: options.configDir
  }).runPackageCommand({ args });
}
export {
  postinstall as default
};
