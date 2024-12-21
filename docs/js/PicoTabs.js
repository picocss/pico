/*
// To not have any keypresses change the tabs use the following
document.addEventListener("DOMContentLoaded", () => {
	const tabs = document.querySelectorAll('[role="tab"]');
	const panels = document.querySelectorAll('[role="tabpanel"]');

	tabs.forEach((tab, index) => {
		tab.addEventListener("click", () => {
			// Reset all tabs and panels
			tabs.forEach((t, i) => {
				t.setAttribute("aria-selected", "false");
				t.setAttribute("tabindex", "-1");
				panels[i].setAttribute("hidden", true);
			});

			// Activate the clicked tab
			tab.setAttribute("aria-selected", "true");
			tab.setAttribute("tabindex", "0");
			document
				.querySelector('[aria-labelledby="' + tab.id + '"]')
				.removeAttribute("hidden");

			// Focus the activated tab
			tab.focus();
		});
	});
});
*/

class PicoTabs {
	constructor(tabListContainerSelector) {
		this.tabListContainer = document.querySelector(tabListContainerSelector);
		// Check if tablist element exists on the page
		if (!this.tabListContainer) {
			console.warn(
				`No element with ${tabListContainerSelector} found on the page.`
			);
			return;
		}

		this.tabs = this.tabListContainer.querySelectorAll('[role="tab"]');
		this.panels = document.querySelectorAll('[role="tabpanel"]');

		// Proceed only if tabs and panels are found
		if (this.tabs.length === 0 || this.panels.length === 0) {
			console.warn("No tabs or panels found, initialization aborted.");
			return;
		}

		this.init();
	}

	init() {
		this.tabs.forEach((tab, index) => {
			tab.addEventListener("click", () => this.activateTab(index));
			tab.addEventListener("keydown", (e) => this.handleKeyDown(e, index));
		});
	}

	// Activate a tab and corresponding panel
	activateTab(index) {
		// Reset all tabs and panels
		this.tabs.forEach((tab, i) => {
			tab.setAttribute("aria-selected", "false");
			tab.setAttribute("tabindex", "-1");
			this.panels[i].setAttribute("hidden", "true");
		});

		// Activate the specified tab
		this.tabs[index].setAttribute("aria-selected", "true");
		this.tabs[index].setAttribute("tabindex", "0");
		this.panels[index].removeAttribute("hidden");

		// Focus the activated tab
		this.tabs[index].focus();
	}

	// Handle keyboard navigation
	handleKeyDown(event, currentIndex) {
		switch (event.key) {
			case "ArrowLeft":
				event.preventDefault();
				this.activateTab((currentIndex - 1 + this.tabs.length) % this.tabs.length);
				break;
			case "ArrowRight":
				event.preventDefault();
				this.activateTab((currentIndex + 1) % this.tabs.length);
				break;
			case "Home":
				event.preventDefault();
				this.activateTab(0);
				break;
			case "End":
				event.preventDefault();
				this.activateTab(this.tabs.length - 1);
				break;
			default:
				break;
		}
	}
}
//document.addEventListener("DOMContentLoaded", () => {
//	new PicoTabs('[role="tablist"]');
//})