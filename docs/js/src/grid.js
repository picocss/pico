/*!
 * Grid Interaction
 *
 * Pico.css - https://picocss.com
 * Copyright 2019 - Licensed under MIT
 */

(function() {

  /**
   * Config
   */

  var grid = {
    columnsCurrent: 4,
    columnsMin:     1,
    columnsMax:     12,
    targetButtons:  '#grids article',       // Buttons inserted before target
    targetGrid:     '#grids .grid',         // Grid target
    targetCode:     '#grids pre code',      // Code target
    selectorAdd:    '#grids button.add',    // Add button selector in Dom
    selectorRemove: '#grids button.remove', // Remove Button selector in Dom
  };



  /**
   * Init
   */

   initGridInteraction();



  /**
   * Init grid interaction
   */

  function initGridInteraction() {

   // Add buttons
   addButtons();

   // Add button listener
   document.querySelector(grid.selectorAdd).addEventListener('click', function() {
     addColumn();
   }, false);

   // Remove button listener
   document.querySelector(grid.selectorRemove).addEventListener('click', function() {
     removeColumn();
   }, false);
  }



  /**
   * Add buttons
   */

  function addButtons() {
    var buttons = document.createElement('P');
    buttons.innerHTML = '<button class="secondary add">'
                     +   '<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">'
                     +     '<line x1="12" y1="5" x2="12" y2="19">'
                     +     '</line><line x1="5" y1="12" x2="19" y2="12">'
                     +     '</line>'
                     +   '</svg>'
                     +   ' Add column'
                     + '</button>'

                     + '<button class="secondary remove">'
                     +   '<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">'
                     +     '<line x1="5" y1="12" x2="19" y2="12"></line>'
                     +   '</svg>'
                     +   ' Remove column'
                     + '</button>';
    document.querySelector(grid.targetButtons).before(buttons);
  }



  /**
   * Add column
   */

  function addColumn() {
   if (grid.columnsCurrent < grid.columnsMax) {
     grid.columnsCurrent++;
     generateGrid(grid.columnsCurrent);
   }
  }



  /**
   * Remove column
   */

  function removeColumn() {
   if (grid.columnsCurrent > grid.columnsMin) {
     grid.columnsCurrent--;
     generateGrid(grid.columnsCurrent);
   }
  }



  /**
   * Generate grid
   *
   * @param {number} cols
   */

  function generateGrid(cols) {

   var colsHTML     = '';
   var colsCode     = '';
   var colsCodePref = '&lt;<b>div</b> <i>class</i>=<u>"grid"</u>&gt;\n';
   var colsCodeSuff = '&lt;/<b>div</b>&gt;';

   for (var i=0; i<cols; i++) {
     colsHTML += '<div>' + (i+1) + '</div>';
     colsCode += '  &lt;<b>div</b>&gt;' + (i+1) + '&lt;/<b>div</b>&gt;\n';
   }

   document.querySelector(grid.targetGrid).innerHTML = colsHTML;
   document.querySelector(grid.targetCode).innerHTML = colsCodePref+colsCode+colsCodeSuff;
  }

})();
