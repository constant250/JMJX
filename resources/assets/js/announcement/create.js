import toolbar from '../back-end/form-toolbar.js';
import qq from 'fine-uploader';
import alertify from 'alertifyjs';

(function (window, undefined) {
	let manualUploader;
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
            this.$form = $('form[id=add-announcements-form]');
            // this.$deleteForm = $('#delete-item');
            // stat dec datetimepicker
            // this.$dobDatepicker = $('div[id=dob-datetimepicker]');
        },

        /**
         *
         * Register DOM Events
         *
         */
        _bindDomEvents: function() {
            // submit form
            toolbar.saveBtn.on('click', this._saveFormEvent.bind(this));

            // remove item in index page action menu
            // toolbar.deleteBtn.on('click', this._deleteItemInIndex.bind(this));

        },

        /**
         *
         * Register autoload Events
         *
         */

        _autoload: function() {

        	this.manualUploader = new qq.FineUploader({
			    element: document.getElementById('fine-uploader-manual-trigger'),
			    template: 'qq-template',
			    request: {
			        endpoint: '/announcements/upload-attachments',
			        params: {_token: $('[name=_token]').val(), attachment_code: $('[name=attachment_code]').val()}
			    },
			    thumbnails: {
			        placeholders: {
			            waitingPath: '/images/placeholders/waiting-generic.png',
			            notAvailablePath: '/images/placeholders/not_available-generic.png'
			        }
			    },
			    chuncking: {
			    	enable: true
			    },
			    autoUpload: true,
			    debug: true
			});

            // dob
           /* this.$dobDatepicker.datetimepicker({
                format: 'DD/MM/YYYY'
            });*/
        },

        /**
         *
         * Event Callbacks
         *
         */
        _saveFormEvent: function(e) {

			this.$form.submit();

            // 
        },

        // * remove item in index page
       /* _deleteItemInIndex: function(e) {
            let url = this.$deleteForm.attr('action');

            alertify.confirm('Delete Entry', 'Are you sure you want to delete this entry?',
                function(){
                    // Deal.$deleteForm.attr('action', url +'/'+ e.target.getAttribute('data-item'));

                    this.$deleteForm.submit();
                },
                function(){ alertify.error('Cancel')});
            e.preventDefault();
        }*/

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

