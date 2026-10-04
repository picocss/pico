import {
  ADDON_ID,
  constants_default
} from "./_browser-chunks/chunk-FX5LXYO2.js";

// src/manager.ts
import { addons } from "storybook/manager-api";
addons.register(ADDON_ID, (api) => {
  api.on(constants_default.REQUEST, ({ kind, name }) => {
    let id = api.storyId(kind, name);
    api.emit(constants_default.RECEIVE, id);
  });
});
