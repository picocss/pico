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
		this.tabLists = document.querySelectorAll(tabListContainerSelector);

		// Proceed only if tablists are found
		if (this.tabLists.length === 0) {
			console.warn(`No elements with ${tabListContainerSelector} found on the page.`);
			return;
		}

		this.tabLists.forEach((tabList) => {
			const tabs = Array.from(tabList.querySelectorAll('[role="tab"]'));
			const panels = Array.from(tabList.querySelectorAll('[role="tabpanel"]'));

			// Filter out nested tabs and panels
			const rootTabs = tabs.filter((tab) => tab.closest(tabListContainerSelector) === tabList);
			const rootPanels = panels.filter((panel) => panel.closest(tabListContainerSelector) === tabList);

			// Proceed only if root tabs and panels are found
			if (rootTabs.length === 0 || rootPanels.length === 0) {
				console.warn("No root tabs or panels found in a tablist, skipping initialization.");
				return;
			}

			this.init(tabList, rootTabs, rootPanels);
		});
	}

	init(tabList, tabs, panels) {
		tabs.forEach((tab, index) => {
			tab.addEventListener("click", () => this.activateTab(tabs, panels, index));
			tab.addEventListener("keydown", (e) => this.handleKeyDown(e, tabs, panels, index));
		});
	}

	// Activate a tab and corresponding panel
	activateTab(tabs, panels, index) {
		// Reset all tabs and panels within the current tablist
		tabs.forEach((tab, i) => {
			tab.setAttribute("aria-selected", "false");
			tab.setAttribute("tabindex", "-1");
			panels[i].setAttribute("hidden", "true");
		});

		// Activate the specified tab
		tabs[index].setAttribute("aria-selected", "true");
		tabs[index].setAttribute("tabindex", "0");
		panels[index].removeAttribute("hidden");

		// Focus the activated tab
		tabs[index].focus();
	}

	// Handle keyboard navigation
	handleKeyDown(event, tabs, panels, currentIndex) {
		switch (event.key) {
			case "ArrowLeft":
				event.preventDefault();
				this.activateTab(tabs, panels, (currentIndex - 1 + tabs.length) % tabs.length);
				break;
			case "ArrowRight":
				event.preventDefault();
				this.activateTab(tabs, panels, (currentIndex + 1) % tabs.length);
				break;
			case "Home":
				event.preventDefault();
				this.activateTab(tabs, panels, 0);
				break;
			case "End":
				event.preventDefault();
				this.activateTab(tabs, panels, tabs.length - 1);
				break;
			default:
				break;
		}
	}
}

//document.addEventListener("DOMContentLoaded", () => {
//	new PicoTabs('[role="tablist"]');
//});
