/*
 * Grid
 *
 * Pico.css - https://picocss.com
 * Copyright 2019-2023 - Licensed under MIT
 */

const grid = {
  
  // Config
  buttons: {
    text: {
      add: 'Add column',
      remove: 'Remove column',
    },
    target: '#grid article',
  },
  grid: {
    current: 4,
    min: 1,
    max: 12,
    gridTarget: '#grid .grid',
    codeTarget: '#grid pre code',
  },

  // Init
  init() {
    this.addButtons();
    this.generateGrid();
  },

  // Add buttons
  addButtons() {
    // Insert buttons
    let buttons = document.createElement('P');
    buttons.innerHTML = `
      <button class="secondary add">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19"></line>
          <line x1="5" y1="12" x2="19" y2="12">'</line>
        </svg>
        ${this.buttons.text.add}
      </button>

      <button class="secondary remove">
        <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
          <line x1="5" y1="12" x2="19" y2="12"></line>
        </svg>
        ${this.buttons.text.remove}
      </button>`;
    document.querySelector(this.buttons.target).before(buttons);

    // Add button listener
    document.querySelector('#grid button.add').addEventListener('click', () => {
      this.addColumn();
    }, false);

    // Remove button listener
    document.querySelector('#grid button.remove').addEventListener('click', () => {
      this.removeColumn();
    }, false);
  },

  // Generate grid
  generateGrid() {
    // Config
    let htmlInner = '';
    let codeInner = '&lt;<b>div</b> <i>class</i>=<u>"grid"</u>&gt;\n';

    // Build
    for (let col = 0; col < this.grid.current; col++) {
      htmlInner += '<div>' + (col + 1) + '</div>';
      codeInner += '  &lt;<b>div</b>&gt;' + (col + 1) + '&lt;/<b>div</b>&gt;\n';
    }

    // Display
    codeInner += '&lt;/<b>div</b>&gt;';
    document.querySelector(this.grid.gridTarget).innerHTML = htmlInner;
    document.querySelector(this.grid.codeTarget).innerHTML = codeInner;
  },

  // Add column
  addColumn() {
    if (this.grid.current < this.grid.max) {
      this.grid.current++;
      this.generateGrid();
    }
  },

  // Remove column
  removeColumn() {
    if (this.grid.current > this.grid.min) {
      this.grid.current--;
      this.generateGrid();
    }
  },
};

// Init
grid.init();