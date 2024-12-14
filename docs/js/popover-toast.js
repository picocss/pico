/**
 * Popover Toast
 *
 * Modified from https://mdn.github.io/dom-examples/popover-api/toast-popovers/
 * Modified by Yohn
 */

const successToastBtn = document.getElementById("success-toast-btn");
const failureToastBtn = document.getElementById("failure-toast-btn");
const counter = document.querySelector("p");

function makeToast(result) {
	// Create an element and make it into a popover
	const popover = document.createElement("article");
	popover.popover = "manual";
	popover.classList.add("toast");
	popover.classList.add("newest");

	let msg;

	// Give the toast an appropriate text content, class for styling, and update
	// the relevant count, depending on whether it was a success or a failure
	if (result === "success") {
		msg = "Action was successful!";
		popover.classList.add("success");
		successCount++;
	} else if (result === "failure") {
		msg = "Action failed!";
		popover.classList.add("failure");
		failCount++;
	} else {
		return;
	}

	// Give the toast its text content, and add it to the DOM
	popover.textContent = msg;
	document.body.appendChild(popover);

	// Show the popover
	popover.showPopover();

	// Remove the toast again after 4 seconds
	setTimeout(() => {
		popover.hidePopover();
		popover.remove();
	}, 4000);

	// When a new toast appears, run the movetoastsUp() function
	popover.addEventListener("toggle", (event) => {
		if (event.newState === "open") {
			moveToastsUp();
		}
	});
}

function moveToastsUp() {
	const toasts = document.querySelectorAll(".toast");

	toasts.forEach((toast) => {
		// If the toast is the one that has just appeared, we don't want it to move up.
		if (toast.classList.contains("newest")) {
			toast.style.bottom = `5px`;
			toast.classList.remove("newest");
		} else {
			// Move up all the other toasts by 50px to make way for the new one
			const prevValue = toast.style.bottom.replace("px", "");
			const newValue = parseInt(prevValue) + 50;
			toast.style.bottom = `${newValue}px`;
		}
	});
}

// Handlers to wire up the buttons to the makeToast() function
successToastBtn.addEventListener("click", () => {
	makeToast("success");
});

failureToastBtn.addEventListener("click", () => {
	makeToast("failure");
});
