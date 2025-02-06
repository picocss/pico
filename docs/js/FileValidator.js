class FileValidator {
	/**
	 * Initializes the FileValidator with a file input element.
	 * @param {HTMLInputElement} fileInput - File input element to validate.
	 * @param {boolean} displayList - Whether to display the file list (default: true).
	 * @param {HTMLElement} customListContainer - Optional custom container for the file list.
	 */
	constructor(fileInput, displayList = true, customListContainer = null) {
		if (!(fileInput instanceof HTMLInputElement) || fileInput.type !== "file") {
			throw new Error("FileValidator requires an input element of type 'file'.");
		}

		this.fileInput = fileInput;
		this.displayList = displayList;
		this.customListContainer = customListContainer;

		this.fileInput.addEventListener("change", () => this.validateFiles());

		// Create a container for the file list
		if (this.displayList) {
			this.fileListContainer = document.createElement("ul");
			this.fileListContainer.className = "file-list";
			if (this.customListContainer) {
				this.customListContainer.append(this.fileListContainer);
			} else {
				this.fileInput.insertAdjacentElement("afterend", this.fileListContainer);
			}
		}
	}

	/**
	 * Validates files based on the accept and size attributes of the input element.
	 * Displays a file list if files are valid.
	 * @returns {boolean} - True if all files are valid, otherwise false.
	 */
	validateFiles() {
		const accept = this.fileInput.getAttribute("accept") || "";
		const maxSize = parseInt(this.fileInput.getAttribute("data-max-size"), 10) || Infinity;
		const files = Array.from(this.fileInput.files);

		// Clear any existing list
		if (this.displayList) {
			this.fileListContainer.innerHTML = "";
		}

		if (files.length === 0) {
			console.log("No files selected.");
			return false;
		}

		for (const file of files) {
			if (accept && !this.isFileTypeValid(file, accept)) {
				console.error(`Invalid file type: ${file.name}`);
				this.fileInput.setCustomValidity(`Invalid file type: ${file.name}`);
				return false;
			}

			if (file.size > maxSize) {
				console.error(`File too large: ${file.name} (${file.size} bytes)`);
				this.fileInput.setCustomValidity(`File too large: ${file.name}`);
				return false;
			}

			// Add file to the list if valid
			if (this.displayList) {
				this.addFileToList(file);
			}
		}

		this.fileInput.setCustomValidity("");
		console.log("All files are valid.");
		return true;
	}

	/**
	 * Adds a file to the displayed list, including an image preview if the file is an image.
	 * @param {File} file - The file to add to the list.
	 */
	addFileToList(file) {
		const listItem = document.createElement("li");
		listItem.textContent = `${file.name} (${(file.size / 1024).toFixed(2)} KB)`;

		// Add an image preview if the file is an image
		if (file.type.startsWith("image/")) {
			const imagePreview = document.createElement("img");
			imagePreview.src = URL.createObjectURL(file);
			imagePreview.style.maxWidth = "50px";
			imagePreview.style.maxHeight = "50px";
			imagePreview.onload = () => URL.revokeObjectURL(imagePreview.src); // Release memory
			listItem.prepend(imagePreview);
		}

		// Add a remove button
		const removeButton = document.createElement("button");
		removeButton.textContent = " ";
		removeButton.className = "btn-file-rm";
		removeButton.addEventListener("click", (event) => {
			event.stopPropagation(); // Prevent event from bubbling up to modal
			this.removeFile(file, listItem);
		});

		listItem.append(removeButton);

		if (this.customListContainer) {
			this.customListContainer.append(listItem);
		} else {
			this.fileListContainer.append(listItem);
		}
	}

	/**
	 * Removes a file from the list and updates the input file element.
	 * @param {File} file - The file to remove.
	 * @param {HTMLElement} listItem - The list item element to remove.
	 */
	removeFile(file, listItem) {
		const filesArray = Array.from(this.fileInput.files);
		const updatedFiles = filesArray.filter(f => f !== file);

		// Update the input element with the new FileList
		const dataTransfer = new DataTransfer();
		updatedFiles.forEach(f => dataTransfer.items.add(f));
		this.fileInput.files = dataTransfer.files;

		// Remove the list item from the display
		listItem.remove();
	}

	/**
	 * Checks if a file's type matches any of the allowed types in the accept attribute.
	 * @param {File} file - File object to check.
	 * @param {string} accept - Accept attribute value (e.g., ".jpg, .png, image/*").
	 * @returns {boolean} - True if the file type is valid, otherwise false.
	 */
	isFileTypeValid(file, accept) {
		const acceptedTypes = accept.split(",").map(type => type.trim());
		return acceptedTypes.some(type => {
			if (type.includes("/") && file.type === type) return true;
			if (type.startsWith(".") && file.name.endsWith(type)) return true;
			if (type.endsWith("/*")) return file.type.startsWith(type.split("/")[0] + "/");
			return false;
		});
	}
}


// Usage example:
// <input type="file" id="fileInput" accept=".jpg, .png, .gif, .svg" data-max-size="1048576" multiple>
// const fileInput = document.getElementById("fileInput");
// new FileValidator(fileInput, false); // Hide display list
//
// Alternatively, with custom list container:
// const customListContainer = document.getElementById("customListContainer");
// new FileValidator(fileInput, true, customListContainer);

// Usage example2:
// <input type="file" id="checkfile" accept=".jpg, .png, .gif, .svg" data-max-size="1048576" multiple>
// 1048576 = 1MB
// const checkfile = document.getElementById("checkfile");
// new FileValidator(checkfile);
