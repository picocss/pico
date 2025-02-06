/*!
 * Minimal theme switcher using a checkbox
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2025 - Licensed under MIT
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

		// If first visit, use the theme from <html> attribute; otherwise, use stored preference
		this.scheme = this.schemeFromLocalStorage ?? this.schemeFromHTML;

		// Set checkbox state based on the applied theme
		this.checkbox.checked = this.scheme === "dark";

		// Listen for user changes
		this.checkbox.addEventListener("change", () => {
			this.scheme = this.checkbox.checked ? "dark" : "light";
			this.schemeToLocalStorage();
		});
	},

	// Get color scheme from local storage
	get schemeFromLocalStorage() {
		return window.localStorage?.getItem(this.localStorageKey);
	},

	// Get the default theme from the <html> attribute
	get schemeFromHTML() {
		return document.documentElement.getAttribute(this.rootAttribute) ?? "auto";
	},

	// Preferred color scheme from system
	get preferredColorScheme() {
		return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
	},

	// Set scheme
	set scheme(scheme) {
		if (scheme === "auto") {
			this._scheme = this.preferredColorScheme;
		} else if (scheme === "dark" || scheme === "light") {
			this._scheme = scheme;
		}
		this.applyScheme();
	},

	// Get scheme
	get scheme() {
		return this._scheme;
	},

	// Apply scheme
	applyScheme() {
		document.documentElement.setAttribute(this.rootAttribute, this._scheme);
	},

	// Store scheme to local storage
	schemeToLocalStorage() {
		window.localStorage?.setItem(this.localStorageKey, this.scheme);
	},
};

// Init
SwitchColorMode.init();