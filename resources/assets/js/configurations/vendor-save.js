import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';

(function (window, undefined) {
    let Users = {
        init: function() {
            // initialize DOM Elements
            this._cacheDom();

            // initialize DOM Evenets
            this._bindDomEvents();

            /*----------  autoload functions  ----------*/
            this._autoload();
        },

        /**
         *
         * Register DOM Elements
         *
         */
        _cacheDom: function() {
            this.$form = $('form[id=update-vendor-form]');
        },

        /**
         *
         * Register DOM Events
         *
         */
        _bindDomEvents: function() {
            // submit form
            toolbar.saveBtn.on('click', this._saveFormEvent.bind(this));
        },

        /**
         *
         * Register autoload Events
         *
         */

        _autoload: function() {

        },

        /**
         *
         * Event Callbacks
         *
         */
        _saveFormEvent: function(e) {
            this.$form.submit();
        },

    }

    Users.init();
})(window)