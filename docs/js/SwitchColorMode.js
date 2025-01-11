/*!
 * Minimal theme switcher using a checkbox
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2024 - Licensed under MIT
 * Modified by Yohn https://github.com/Yohn/PicoCSS
 */

const SwitchColorMode = {
	// Config
	_scheme: "auto",
	toggleSelector: "input[name='color-mode-toggle']",
	rootAttribute: "data-theme",
	localStorageKey: "picoPreferredColorScheme",

	// Init
	init() {
		this.checkbox = document.querySelector(this.toggleSelector);
		if (!this.checkbox) {
			console.error("Theme switcher toggle not found");
			return;
		}
		this.scheme = this.schemeFromLocalStorage;
		this.initToggle();
	},

	// Get color scheme from local storage
	get schemeFromLocalStorage() {
		return window.localStorage?.getItem(this.localStorageKey) ?? this._scheme;
	},

	// Preferred color scheme
	get preferredColorScheme() {
		return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
	},

	// Initialize the toggle switch
	initToggle() {
		// Set initial checkbox state based on the current scheme
		this.checkbox.checked = this.scheme === "dark";

		// Listen for changes to the checkbox
		this.checkbox.addEventListener("change", () => {
			this.scheme = this.checkbox.checked ? "dark" : "light";
		});
	},

	// Set scheme
	set scheme(scheme) {
		if (scheme === "auto") {
			this._scheme = this.preferredColorScheme;
		} else if (scheme === "dark" || scheme === "light") {
			this._scheme = scheme;
		}
		this.applyScheme();
		this.schemeToLocalStorage();
	},

	// Get scheme
	get scheme() {
		return this._scheme;
	},

	// Apply scheme
	applyScheme() {
		document.querySelector("html")?.setAttribute(this.rootAttribute, this.scheme);
	},

	// Store scheme to local storage
	schemeToLocalStorage() {
		window.localStorage?.setItem(this.localStorageKey, this.scheme);
	},
};

// Init
SwitchColorMode.init();
