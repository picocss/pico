/**
 * Most Visible v1.4.0
 *
 * @author Andy Palmer <andy@andypalmer.me>
 * @license MIT
 */

(function (root, factory) {
    // Universal Module Definition
    /* jshint strict:false */
    /* global define: false, module: false */
    if (typeof define === 'function' && define.amd) {
        define([], function () {
            return factory(root);
        });
    } else if (typeof module === 'object' && module.exports) {
        module.exports = factory(root);
    } else {
        root.mostVisible = factory(root);
    }
}(typeof self !== 'undefined' ? self : this, function (window) {
    /* jshint unused: vars */

    'use strict';

    /**
     * MostVisible constructor
     *
     * @param {NodeList|string} elements
     * @param {Object} options
     * @constructor
     */
    function MostVisible(elements, options) {
        if (!(this instanceof MostVisible)) {
            return (new MostVisible(elements, options)).getMostVisible();
        }

        if (typeof elements === 'string') {
            elements = document.querySelectorAll(elements);
        }

        this.elements = elements;
        this.options = extend({}, MostVisible.defaults, options);
    }

    /**
     * MostVisible default options
     *
     * @namespace
     * @property {object}  defaults             Default options hash.
     * @property {boolean} defaults.percentage  Whether to calculate visibility as a percentage of height.
     * @property {number}  defaults.offset      An offset to take into account when calculating visibility.
     */
    MostVisible.defaults = {
        percentage: false,
        offset: 0
    };

    MostVisible.prototype = {
        /**
         * Returns the most visible element from the instance's NodeList.
         *
         * @returns {Element} Most visible element.
         */
        getMostVisible: function () {
            var element        = null,
                viewportHeight = document.documentElement.clientHeight,
                maxVisible     = 0;

            for (var i = 0; i < this.elements.length; i++) {
                var currentVisible = this.getVisibleHeight(this.elements[i], viewportHeight);

                if (currentVisible > maxVisible) {
                    maxVisible = currentVisible;
                    element = this.elements[i];
                }
            }

            return element;
        },

        /**
         * Returns the visible height of an element.
         *
         * @param {Element} element Element to check the visibility of.
         * @param {number}  viewportHeight
         * @returns {number} Visible height of the element in pixels or a percentage of the element's total height.
         */
        getVisibleHeight: function (element, viewportHeight) {
            var rect             = element.getBoundingClientRect(),
                rectTopOffset    = rect.top - this.options.offset,
                rectBottomOffset = rect.bottom - this.options.offset,
                height           = rect.bottom - rect.top,
                visible          = {
                    top: rectTopOffset >= 0 && rectTopOffset < viewportHeight,
                    bottom: rectBottomOffset > 0 && rectBottomOffset < viewportHeight
                },
                visiblePx        = 0;

            if (visible.top && visible.bottom) {
                // Whole element is visible
                visiblePx = height;
            } else if (visible.top) {
                visiblePx = viewportHeight - rect.top;
            } else if (visible.bottom) {
                visiblePx = rectBottomOffset;
            } else if (height > viewportHeight && rectTopOffset < 0) {
                var absTop = Math.abs(rectTopOffset);

                if (absTop < height) {
                    // Part of the element is visible
                    visiblePx = height - absTop;
                }
            }

            if (this.options.percentage) {
                return (visiblePx / height) * 100;
            }

            return visiblePx;
        }
    };

    /*
    MostVisible.makeJQueryPlugin = function ($) {
        if (!$) {
            return;
        }

        $.fn.mostVisible = function (options) {
            var instance = new MostVisible(this.get(), options);
            return this.filter(instance.getMostVisible());
        };
    };
    */

    // Try adding the jQuery plugin to window.jQuery
    // MostVisible.makeJQueryPlugin(window.jQuery);

    /**
     * Extends obj by adding the properties of all other objects passed to the function.
     *
     * @param {...Object} obj
     * @returns {Object} The extended object.
     */
    function extend(obj) {
        for (var i = 1; i < arguments.length; i++) {
            for (var key in arguments[i]) {
                if (arguments[i].hasOwnProperty(key)) {
                    obj[key] = arguments[i][key];
                }
            }
        }

        return obj;
    }

    //noinspection JSAnnotator
    return MostVisible;

}));
