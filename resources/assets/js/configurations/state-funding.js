import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';

(function(window, undefined) {
    var StateFundning = {
        init: function() {
            /*----------  initialize DOM Elements  ----------*/
            this._cacheDom();

            /*----------  autoload functions  ----------*/
            this._autoload();

            /*----------  bind DOM element events  ----------*/
            this._bindDomEvents();
        },
        _cacheDom: function() {
            this.$form = $('form[id=add-state-funding-form]');
            this.$deleteForm = $('#delete-item');
        },
        _bindDomEvents: function() {
            // submit form
            toolbar.saveBtn.on('click', this._saveFormEvent.bind(this));

            // remove item in index page action menu
            toolbar.deleteBtn.on('click', this._deleteItemInIndex.bind(this));

        },
        _autoload: function() {
            this.$deleteForm.attr('type', 'button');
        },

        _saveFormEvent: function(e) {
            this.$form.submit();
        },

        // * remove item in index page
        _deleteItemInIndex: function(e) {
            // let url = this.$deleteForm.attr('action');
            e.preventDefault();
            console.log('test');
            alertify.confirm('Delete Entry', 'Are you sure you want to delete this entry?',
                function(){
                    // Deal.$deleteForm.attr('action', url +'/'+ e.target.getAttribute('data-item'));

                    // this.$deleteForm.submit();
                },
                function(){ alertify.error('Cancel')});
        }

        /*=====  End of Event Callbacks  ======*/

    }

    // initialize
    StateFundning.init();
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
