const require_context = require('./context-DwbtaXxf.cjs');
const node_path = require_context.__toESM(require("node:path"));
const node_buffer = require_context.__toESM(require("node:buffer"));
const node_process = require_context.__toESM(require("node:process"));
const node_module = require_context.__toESM(require("node:module"));

//#region src/webpack/context.ts
function contextOptionsFromCompilation(compilation) {
	return {
		addWatchFile(file) {
			(compilation.fileDependencies ?? compilation.compilationDependencies).add(file);
		},
		getWatchFiles() {
			return Array.from(compilation.fileDependencies ?? compilation.compilationDependencies);
		}
	};
}
const require$1 = (0, node_module.createRequire)(require("url").pathToFileURL(__filename).href);
function getSource(fileSource) {
	const webpack = require$1("webpack");
	return new webpack.sources.RawSource(typeof fileSource === "string" ? fileSource : node_buffer.Buffer.from(fileSource.buffer));
}
function createBuildContext(options, compiler, compilation, loaderContext) {
	return {
		parse: require_context.parse,
		addWatchFile(id) {
			options.addWatchFile((0, node_path.resolve)(node_process.default.cwd(), id));
		},
		emitFile(emittedFile) {
			const outFileName = emittedFile.fileName || emittedFile.name;
			if (emittedFile.source && outFileName) {
				if (!compilation) throw new Error("unplugin/webpack: emitFile outside supported hooks  (buildStart, buildEnd, load, transform, watchChange)");
				compilation.emitAsset(outFileName, getSource(emittedFile.source));
			}
		},
		getWatchFiles() {
			return options.getWatchFiles();
		},
		getNativeBuildContext() {
			return {
				framework: "webpack",
				compiler,
				compilation,
				loaderContext
			};
		}
	};
}
function createContext(loader) {
	return {
		error: (error) => loader.emitError(normalizeMessage(error)),
		warn: (message) => loader.emitWarning(normalizeMessage(message))
	};
}
function normalizeMessage(error) {
	const err = new Error(typeof error === "string" ? error : error.message);
	if (typeof error === "object") {
		err.stack = error.stack;
		err.cause = error.meta;
	}
	return err;
}

//#endregion
Object.defineProperty(exports, 'contextOptionsFromCompilation', {
  enumerable: true,
  get: function () {
    return contextOptionsFromCompilation;
  }
});
Object.defineProperty(exports, 'createBuildContext', {
  enumerable: true,
  get: function () {
    return createBuildContext;
  }
});
Object.defineProperty(exports, 'createContext', {
  enumerable: true,
  get: function () {
    return createContext;
  }
});
Object.defineProperty(exports, 'normalizeMessage', {
  enumerable: true,
  get: function () {
    return normalizeMessage;
  }
});