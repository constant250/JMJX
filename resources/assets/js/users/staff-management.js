import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';

(function (window, undefined) {
    let Users = {
        init: function() {
            // initialize DOM Elements
            this._cacheDom();

            // initialize DOM Evenets
            this._bindDomEvents();
        },

        /**
         *
         * Register DOM Elements
         *
         */
        _cacheDom: function() {
            this.$form = $('form[id=create-user-form]');
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
         * Event Callbacks
         *
         */
        _saveFormEvent: function(e) {
            this.$form.submit();
        }

    }

    Users.init();
})(window)

$('#delete-item').on('click', function(e){
      e.preventDefault();
      var x = false;
      alertify.confirm('Delete Entry', 'Are you sure you want to delete this entry?',
          function(){
              $('#delete-item').parent().submit();
          },
          function(){ alertify.error('Cancel')
      });
  });