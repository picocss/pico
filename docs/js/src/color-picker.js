/*!
 * Color Picker
 *
 * Pico.css - https://picocss.com
 * Copyright 2019 - Licensed under MIT
 */

(function() {

  /**
   * Config
   */

  var colors = {
    list:           'json/material-colors.json',
    target:         '#customization h5',                 // Buttons inserted after target
    selectorButton: '#customization button[data-color]', // Button selector in Dom
    selectorTheme:  '#customization',                    // Theme selector in Dom
  }



  /**
   * Init
   */

  colorPicker();


  /**
   * Color Picker
   */

  function colorPicker() {

    // Load colors
    loadJson(colors.list, function(data) {
      generateButtons(data);
      pickColor('pink', data['pink']);
    });

  }



  /**
   * Load Json
   *
   * @param {url} json
   * @param {function} callback
   * @return {object}
   */

  function loadJson(json, callback) {
    var request = new XMLHttpRequest();
    request.open('GET', json, true);

    request.onload = function() {
      if (request.status >= 200 && request.status < 400) {
        var data = JSON.parse(request.responseText);
        callback(data);
      }
      else {
        return 'error';
      }
    };
    request.onerror = function() {
      return 'error';
    };
    request.send();
  }



  /**
   * Generate Buttons
   *
   * @param {object} data
   */

  function generateButtons(data) {

    // Vars
    var colorButtons = '';
    var colorStyles  = '';

    // Colors
    for (var color in data) {
      if (data.hasOwnProperty(color)) {

        // Buttons
        colorButtons += '<button data-color="'+ color +'"></button>';

        // CSS Styles
        colorStyles += 'button[data-color="'+ color +'"] {'
                     +   'background-color: '+ data[color]['600'] +'; '
                     + '}'

                     + '[data-theme="light"] button[data-color="'+ color +'"]:hover, '
                     + '[data-theme="light"] button[data-color="'+ color +'"]:active, '
                     + '[data-theme="light"] button[data-color="'+ color +'"]:focus {'
                     +   'background-color: '+ data[color]['700'] +'; '
                     + '}'

                     + '[data-theme="dark"] button[data-color="'+ color +'"]:hover, '
                     + '[data-theme="dark"] button[data-color="'+ color +'"]:active, '
                     + '[data-theme="dark"] button[data-color="'+ color +'"]:focus {'
                     +   'background-color: '+ data[color]['500'] +'; '
                     + '}'
      }
    }

    // Insert buttons
    var buttons = document.createElement('FIGURE');
    buttons.innerHTML = colorButtons;
    document.querySelector(colors.target).after(buttons);

    // Buttons listeners
    var buttonsAll = document.querySelectorAll(colors.selectorButton);
    for (var i = 0; i < buttonsAll.length; i++) {
      buttonsAll[i].addEventListener('click', function(event) {
        buttonColor = event.target.getAttribute('data-color');
        pickColor(buttonColor, data[buttonColor]);
      }, false);
    }

    // Insert CSS Styles
    var styles = document.createElement('STYLE');
    styles.setAttribute('title', 'color-picker');
    styles.innerHTML = colorStyles;
    document.querySelector('head link').after(styles);
  }



  /**
   * Pick Color
   *
   * @param {string} name
   * @param {object} data
   */

  function pickColor(name, data) {

    // Generate theme
    generateTheme(name, data);

    // Clear picked state
    var buttonsAll = document.querySelectorAll(colors.selectorButton);
    for (var i = 0; i < buttonsAll.length; i++) {
      buttonsAll[i].removeAttribute("class");
    }

    // Set Picked state
    var buttonPicked = document.querySelector(colors.selectorButton + '[data-color="' + name + '"]');
    buttonPicked.setAttribute('class', 'picked');
  }



  /**
   * Generate theme
   *
   * @param {string} name
   * @param {object} data
   */

  function generateTheme(name, data) {

    // Code and Color name
    // TODO: Create a function
    var cName = document.querySelectorAll(colors.selectorTheme + ' .name');
    for (var i = 0; i < cName.length; ++i) {
      cName[i].innerHTML = name.charAt(0).toUpperCase() + name.substring(1) + ' ';
    }
    var c500 = document.querySelectorAll(colors.selectorTheme + ' .c500');
    for (var i = 0; i < c500.length; ++i) {
      c500[i].innerHTML = data[500];
    }
    var c600 = document.querySelectorAll(colors.selectorTheme + ' .c600');
    for (var i = 0; i < c600.length; ++i) {
      c600[i].innerHTML = data[600];
    }
    var c700 = document.querySelectorAll(colors.selectorTheme + ' .c700');
    for (var i = 0; i < c700.length; ++i) {
      c700[i].innerHTML = data[700];
    }
    var c600OutlineLight = document.querySelectorAll(colors.selectorTheme + ' .c600-outline-light');
    for (var i = 0; i < c600OutlineLight.length; ++i) {
      c600OutlineLight[i].innerHTML = hexToRgbA(data[600], .125);
    }
    var c600OutlineDark = document.querySelectorAll(colors.selectorTheme + ' .c600-outline-dark');
    for (var i = 0; i < c600OutlineDark.length; ++i) {
      c600OutlineDark[i].innerHTML = hexToRgbA(data[600], .25);
    }
    var inverse = document.querySelectorAll(colors.selectorTheme + ' .inverse');
    for (var i = 0; i < inverse.length; ++i) {
      inverse[i].innerHTML = data['inverse'];
    }

    // CSS Style
    var generatedStyles = '[data-theme="generated"] {'
                        +   '--primary:' + data[600] + ';'
                        +   '--h4:' + data[700] + ';'
                        +   '--primary-hover:' + data[700] + ';'
                        +   '--primary-focus:' + hexToRgbA(data[600], .125) + ';'
                        +   '--primary-inverse:' + data['inverse'] + ';'
                        + '}'

                        + '@media only screen and (prefers-color-scheme: dark) {'
                        +    ':root:not([data-theme="light"]) [data-theme="generated"] {'
                        +     '--primary:' + data[600] + ';'
                        +     '--h4:' + data[300] + ';'
                        +     '--primary-hover:' + data[500] + ';'
                        +     '--primary-focus:' + hexToRgbA(data[600], .25) + ';'
                        +     '--primary-inverse:' + data['inverse'] + ';'
                        +   '}'
                        + '}'

                        + '[data-theme="dark"] [data-theme="generated"] {'
                        +   '--primary:' + data[600] + ';'
                        +   '--h4:' + data[300] + ';'
                        +   '--primary-hover:' + data[500] + ';'
                        +   '--primary-focus:' + hexToRgbA(data[600], .25) + ';'
                        +   '--primary-inverse:' + data['inverse'] + ';'
                        + '}';

    // Insert CSS Styles
    var selectorGenerated = document.querySelector('style:not([title="color-picker"])');
    if(typeof(selectorGenerated) != 'undefined' && selectorGenerated != null) {
      selectorGenerated.innerHTML = generatedStyles;
    }
    else {
      var styles = document.createElement('STYLE');
      styles.innerHTML = generatedStyles;
      document.querySelector('head link').after(styles);
    }
    document.querySelector(colors.selectorTheme + ' .grid').setAttribute('data-theme', name);
  }



  /**
   * Hexadecimal to Rgba
   *
   * @param {string} hex
   * @param {number} alpha
   * @return {rgba}
   */

  function hexToRgbA(hex, alpha){
    var c;
    if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
      c= hex.substring(1).split('');
      if(c.length== 3) {
        c= [c[0], c[0], c[1], c[1], c[2], c[2]];
      }
      c= '0x' + c.join('');
      return 'rgba(' + [(c>>16)&255, (c>>8)&255, c&255].join(',') + ',' + alpha + ')';
    }
    throw new Error('Bad Hex');
  }


})();
