function showNotification(options = {}) {
  const dialog = document.querySelector("dialog[role='alert']");

  if (options.text || typeof options === "string") {
    dialog.innerText = options.text || options;
  } else if (options.html) {
    dialog.innerHTML = options.html;
  }

  dialog.showModal();

  setTimeout(() => {
    dialog.close();
  }, options.delay || 3000);
}

function closeNotification() {
  const dialog = document.querySelector("dialog[role='alert']");
  dialog.close();
}