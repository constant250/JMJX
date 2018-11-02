import $ from 'jquery';
import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';

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

            // csrf token
            this.$formToken = $('input[name=_token]');

            this.$formGet = $('#add-url');
            this.$addButton = $('#add-button');

            // this.$form = $('form[id=create-agent-form]');
            // this.$deleteForm = $('#delete-item');
        },

        /**
         *
         * Register DOM Events
         *
         */
        _bindDomEvents: function() {
            // submit form
            // toolbar.saveBtn.on('click', this._saveFormEvent.bind(this));

            // add button
            this.$addButton.on('click', this._addButton.bind(this));

            // remove item in index page action menu
            // toolbar.deleteBtn.on('click', this._deleteItemInIndex.bind(this));

        },

        /**
         *
         * Register autoload Events
         *
         */

        _autoload: function() {
            
            $('#url-table').DataTable({
                "lengthMenu" : [[5, 10, 150, -1], [5, 10, 150, "All"]],
                "order" : [[0, "desc"]]
            });

        },

        /**
         *
         * Event Callbacks
         *
         */

         _addButton: function(e) {
            alertify.prompt( 'Sheet Name', '', ''
               , function(evt, value) { 
                    alertify.warning('Saving URL');
                    var sheet_name = $('.ajs-input').val();

                    var formdata = new FormData($('#add-url')[0]);
                    formdata.append('name', sheet_name);

                    $.ajax({
                       url: '/utilities/google-sheets/add',
                       data: formdata,
                       processData: false,
                       contentType: false,
                       success: function(data) {
                          var r = $.parseJSON(data);
                          // console.log(r);
                          if(r.status == 'success'){
                            window.location = 'http://vorx.eti/utilities/google-sheets';
                          }else{
                            alertify.alert('Opps', r.message, function(){ this.close() });
                          }
                          // if(r.status == 'success'){
                          //   alertify.success('Sheet Added Successfully');
                          //   var content = '';
                          //   $('#url-table tbody').append();
                          // }else{

                          // }
                       },
                       type: 'POST'
                    });


                }
               , function() { alertify.error('Cancel') });
         },

        _saveFormEvent: function(e) {
            this.$form.submit();
        },

        // * remove item in index page
        _deleteItemInIndex: function(e) {
            let url = this.$deleteForm.attr('action');

            alertify.confirm('Delete Entry', 'Are you sure you want to delete this entry?',
                function(){
                    // Users.$deleteForm.attr('action', url +'/'+ e.target.getAttribute('data-item'));

                    this.$deleteForm.submit();
                },
                function(){ alertify.error('Cancel')});
            e.preventDefault();
        }

    }

    Users.init();
})(window)

$('.delete-btn').on('click', function(e){
    e.preventDefault();
    var x = false;
    var id = $(this).attr('data');
    alertify.confirm('Delete Entry', 'Are you sure you want to delete this URL?',
        function(){
            $.ajax({
               type: 'GET',
               url: '/utilities/google-sheets/delete/'+id,
               success: function(data) {
                  var r = $.parseJSON(data);
                  // console.log(r);
                  window.location = 'http://vorx.eti/utilities/google-sheets';
                  // if(r.status == 'success'){
                  //   alertify.success('Sheet Added Successfully');
                  //   var content = '';
                  //   $('#url-table tbody').append();
                  // }else{

                  // }
               }
            });
        },
        function(){ alertify.error('Cancel')
    });

});