const require_context = require('./context-DwbtaXxf.cjs');
const node_path = require_context.__toESM(require("node:path"));
const node_buffer = require_context.__toESM(require("node:buffer"));

//#region src/rspack/context.ts
function createBuildContext(compiler, compilation, loaderContext) {
	return {
		getNativeBuildContext() {
			return {
				framework: "rspack",
				compiler,
				compilation,
				loaderContext
			};
		},
		addWatchFile(file) {
			const cwd = process.cwd();
			compilation.fileDependencies.add((0, node_path.resolve)(cwd, file));
		},
		getWatchFiles() {
			return Array.from(compilation.fileDependencies);
		},
		parse: require_context.parse,
		emitFile(emittedFile) {
			const outFileName = emittedFile.fileName || emittedFile.name;
			if (emittedFile.source && outFileName) {
				const { sources } = compilation.compiler.webpack;
				compilation.emitAsset(outFileName, new sources.RawSource(typeof emittedFile.source === "string" ? emittedFile.source : node_buffer.Buffer.from(emittedFile.source)));
			}
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