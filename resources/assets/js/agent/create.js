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

            // csrf token
            this.$formToken = $('input[name=_token]');

            this.$form = $('form[id=create-agent-form]');
            this.$deleteForm = $('#delete-item');
            // stat dec datetimepicker
            this.$dobDatepicker = $('div[id=dob-datetimepicker]');

            // note content
            this.$noteContent = $('textarea[id=notes-content]');

            // convo content
            this.$convoContent = $('textarea[id=convo-content]');

            // convo id
            this.$convoId = $('input[id=convo-id]');

            // note submit button
            this.$submitNoteBtn = $('button[id=submit-note]');

            this.$submitConvoBtn = $('button[id=submit-convo]');

            // note list
            this.$noteList = $('ul[id=note-list]');

            // convo list
            this.$convoList = $('ul[id=convo-list]');
            
            /*=====  End of Notes  ======*/

            // attachment inputs
            this.$Attachment = $('input[name=attachment]');
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
            toolbar.deleteBtn.on('click', this._deleteItemInIndex.bind(this));

            // notes submit
            this.$submitNoteBtn.on('click', this._submitNote.bind(this));

            // convo submit
            this.$submitConvoBtn.on('click', this._submitConvo.bind(this));

        },

        /**
         *
         * Register autoload Events
         *
         */

        _autoload: function() {
            // dob
            this.$dobDatepicker.datetimepicker({
                format: 'DD/MM/YYYY'
            });

            // initialize fileuploader
            this.$Attachment.fileuploader( this._fileuploaderOptions('att') );
            // fileuploader instances
            this._fileuploaderPoaInstance = $.fileuploader.getInstance(this.$Attachment);

            for ( var file of window.files ) {
                this._fileuploaderPoaInstance.append(file);
            }
        },

        // submit note callback
        _submitNote: function(e) {
            var notification = alertify.notify('Submitting your note...', 'warning', 0, null);

            $.ajax({
                url: window.notesRoute,
                type: 'POST',
                data: {'_token': Users.$formToken.val(), 'remarks': Users.$noteContent.val()},
                success: function(response) {

                    if ( response.status != 'error' ) {
                        response.content = Users.$noteContent.val();
                        Users._appendNote(response);

                        Users.$noteContent.val('');
                        notification.dismiss();
                    } else {
                        alertify.alert('Error', 'There was a problem on the server.<br>Please try again later.');
                    }
                }
            });
        },

        // submit convo callback
        _submitConvo: function(e) {
            var notification = alertify.notify('Submitting your conversation...', 'warning', 0, null);

            $.ajax({
                url: window.notesRoute,
                type: 'POST',
                data: {'_token': Users.$formToken.val(), 'remarks': Users.$convoContent.val(), 'notes_id': Users.$convoId.val()},
                success: function(response) {

                    if ( response.status != 'error' ) {
                        response.content = Users.$convoContent.val();
                        Users._appendConvo(response);

                        Users.$convoContent.val('');
                        notification.dismiss();
                    } else {
                        alertify.alert('Error', 'There was a problem on the server.<br>Please try again later.');
                    }
                }
            });
        },

        // note append element callback
        _appendNote: function(data) {
            var noteItem = '<li>\
                <div class="position-relative">\
                    <div class="chatbox-avatar" style="">\
                        <canvas width="50" height="50" data-jdenticon-value="%userId%"></canvas>\
                    </div>\
                    <div class="chatbox-content">\
                        <h1 class="content-name px-16-font proximanova-bold iris-blue-font-color no-margin line-height-1">%user%</h1>\
                        <span class="content-date px-10-font dark-grey-font-color">%timeSent%</span>\
                        <span class="content-timepass px-10-font dark-grey-font-color"><i class="fa fa-clock-o" aria-hidden="true"></i>%timeDiff%</span>\
                        <div class="content-conversation px-12-font bright-grey-font-color">\
                            <p>%content%</p>\
                        </div>\
                    </div>\
                </div>\
            </li>';
            

            noteItem = noteItem.split('%user%').join(data.userName);
            noteItem = noteItem.split('%userId%').join(data.userId);
            noteItem = noteItem.split('%timeSent%').join(data.createdAt);
            noteItem = noteItem.split('%timeDiff%').join(data.timeDiff);
            noteItem = noteItem.split('%content%').join(data.content);

            Users.$noteList.append(noteItem);
        },

        // note append element callback
        _appendConvo: function(data) {
            var noteItem = '<li>\
                <div class="position-relative">\
                    <div class="chatbox-avatar" style="">\
                        <canvas width="50" height="50" data-jdenticon-value="%userId%"></canvas>\
                    </div>\
                    <div class="chatbox-content">\
                        <h1 class="content-name px-16-font proximanova-bold iris-blue-font-color no-margin line-height-1">%user%</h1>\
                        <span class="content-date px-10-font dark-grey-font-color">%timeSent%</span>\
                        <span class="content-timepass px-10-font dark-grey-font-color"><i class="fa fa-clock-o" aria-hidden="true"></i>%timeDiff%</span>\
                        <div class="content-conversation px-12-font bright-grey-font-color">\
                            <p>%content%</p>\
                        </div>\
                    </div>\
                </div>\
            </li>';
            

            noteItem = noteItem.split('%user%').join(data.userName);
            noteItem = noteItem.split('%userId%').join(data.userId);
            noteItem = noteItem.split('%timeSent%').join(data.createdAt);
            noteItem = noteItem.split('%timeDiff%').join(data.timeDiff);
            noteItem = noteItem.split('%content%').join(data.content);

            Users.$convoList.append(noteItem);
        },

        // jfiler options
        _fileuploaderOptions: function(type) {
            return {
                // limit of files {null, Number}
                // also with the appended files
                // if null - has no limits
                limit: null,
                
                // file's maximal size in MB {null, Number}
                // also with the appended files
                // if null - has no limits
                maxSize: null,
                
                // each file's maximal size in MB {null, Number}
                // if null - has no limits
                fileMaxSize: null,
                
                // allowed extensions or file types {null, Array}
                extensions: ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'],
                
                // new input {Boolean, String, Function, jQuery Object}
                changeInput: '<div class="btn-wrapper no-padding">\
                                <button class="btn upload-btn" type="button" style="width: 100%;margin-bottom: 15px;background-color: #81f0be;color: #178252;outline: 0!important;text-align: left;"><span>Upload</span><span class="pull-right"><i class="fa fa-upload" aria-hidden="true"></i></span></button>\
                            </div>',
                
                // add brackets at the end of the input name by multiple files {Boolean}
                // specially for PHP
                inputNameBrackets: false,
                
                // fileuploader theme {null, String}
                // it will be only a class name in fileuploader parent element
                // the class name will be: fileuploader-theme-default
                theme: null,
                
                // enable thumbnails for files {null, Object}
                // set on null to disable the thumbnails
                thumbnails: {
                    // thumbnails list HTML {String, Function}
                    box: '<div class="upload-list-wrapper fileuploader-items">\
                            <ul class="fileuploader-items-list upload-list"></ul>\
                        </div>',

                    // append thumbnails list to selector {null, String, jQuery Object}
                    boxAppendTo: $('div#'+type+'-box-wrapper'),
                    
                    // thumbnails item HTML {String, Function}
                    item: '<li class="fileuploader-item">\
                                <div class="col-sm-1 no-padding">\
                                    <span>${icon}</span>\
                                </div>\
                                <div class="col-sm-11" id="detail-holder">\
                                    <div class="upload-status">\
                                        <span class="filename">${name}</span>\
                                        <span class="column-actions pull-right"></span>\
                                        <div class="progress no-margin position-relative">\
                                            ${progressBar}\
                                        </div>\
                                        <span>${size2}</span>\
                                        <div class="clearfix"></div>\
                                    </div>\
                                </div>\
                                <div class="clearfix"></div>\
                            </li>',
                    
                    // thumbnails appended item HTML {String, Function}
                    item2: '<li class="fileuploader-item">\
                                <div class="col-sm-1 no-padding">\
                                    <span>${icon}</span>\
                                </div>\
                                <div class="col-sm-11" id="detail-holder">\
                                    <div class="upload-status">\
                                        <span class="filename">${name}</span>\
                                        <span class="column-actions pull-right">\
                                            <a class="fileuploader-action fileuploader-action-preview"><i class="fa fa-eye"></i></a>\
                                            <a class="fileuploader-action fileuploader-action-remove"><i class="fa fa-times"></i></a>\
                                        </span>\
                                        <span>${size2}</span>\
                                        <div class="clearfix"></div>\
                                    </div>\
                                </div>\
                                <div class="clearfix"></div>\
                            </li>',
                        
                    // insert the thumbnail's item at the beginning of the list? {Boolean}
                    itemPrepend: false,
                    
                    // show a confirmation dialog by removing a file? {Boolean}
                    // it will not be shown in upload mode by canceling an upload
                    removeConfirmation: true,
                    
                    // render the image thumbnail? {Boolean}
                    // if it will be false, it will generate an icon(you can also hide it with css)
                    // if it will be false, you can use the API method (item.renderImage()) to render it (check thumbnails example)
                    startImageRenderer: false,
                    
                    // render the images synchron {Boolean}
                    // made to improve the browser speed
                    synchronImages: true,
                    
                    // render the image in a canvas element {Boolea, Object}
                    // if it will be true, it will generate an image with the css sizes from the parent element (.column-thumbnail)
                    // you can also set the width and the height in the object
                    // by default - true
                    canvasImage: {
                        width: null,
                        height: null
                    },
                    
                    // thumbnails selectors
                    _selectors: {
                        list: '.fileuploader-items-list',
                        item: '.fileuploader-item',
                        start: '.fileuploader-action-start',
                        retry: '.fileuploader-action-retry',
                        remove: '.fileuploader-action-remove'
                    },

                    // Callback fired after adding the item element
                    onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {

                        var $preview = item.html.find('a.fileuploader-action-preview');

                        if ( typeof item.data.meta != 'undefined' ) {

                            // add file meta value
                            item.html.attr('data-meta', item.data.meta);
                            
                            $preview.attr('href', '/agent-management/attachment/preview/'+item.data.meta);
                            $preview.attr('target', '_blank');


                            /*==========================================
                            =            Preview Attachment            =
                            ==========================================*/

                            // base64 preview
                            /*$.ajax({
                                url: '/deals/attachment/preview/' + item.data.meta,
                                type: 'POST',
                                data: {"_token" : Users.$formToken.val()},
                                success: function(r) {
                                    // 
                                    $preview.attr('href', r.source);

                                    // attachment preview
                                    $(document).ready(function() {

                                        $preview.magnificPopup({
                                            type: r.type,
                                            mainClass: 'mfp-fade',
                                            removalDelay: 300,
                                            ajax: {
                                                cursor: 'mfp-ajax-cur',
                                                tError: '<a href="%url%">The content</a> could not be loaded.'
                                            }
                                        });
                                    });
                                }
                            });*/

                            // add event attachment preview
                            // $preview.on('click', Users._previewAttachment.bind(Deal));
                            
                            /*=====  End of Preview Attachment  ======*/
                            
                        }
                    },
                    
                    // Callback fired after removing the item element
                    // by default we will animate the removing action
                    onItemRemove: function(itemEl, listEl, parentEl, newInputEl, inputEl) {

                        // post delete
                        Users.$attachmentDeleteForm.find('input[name=_meta]').val( itemEl.data('meta') );

                        $.ajax({
                            url: Users.$attachmentDeleteForm.attr('action'),
                            type: 'POST',
                            data: Users.$attachmentDeleteForm.serialize(),
                            success: function(response) {
                                if (response.status == 'success') {

                                    itemEl.children().animate({'opacity': 0}, 200, function() {
                                        setTimeout(function() {
                                            itemEl.slideUp(200, function() {
                                                itemEl.remove();
                                            });
                                        }, 100);
                                    });
                                    
                                    alertify.alert('Success', response.message);
                                } else {
                                    alertify.alert('Error', response.message);
                                }
                            }
                        });

                    },
                },
                
                // enable the upload mode {null, Object}
                // each file will be separately uploaded to server
                // if you want to send all files, you don't even need this option. Just use the standard HTML <form> to do this.
                // by default - null
                upload: {
                    // upload URL {String}
                    url: window.attachmentRoute,
                    
                    // upload data {null, Object}
                    // you can also change this Object in beforeSend callback
                    // example: { option_1: 'yes', option_2: 'ok' }
                    data: {
                        "_token" : Users.$formToken.val(),
                    },
                    
                    // upload type {String}
                    // for more details http://api.jquery.com/jquery.ajax/
                    type: 'POST',
                    
                    // upload enctype {String}
                    // for more details http://api.jquery.com/jquery.ajax/
                    enctype: 'multipart/form-data',
                    
                    // auto-start file uploading {Boolean}
                    // if it will be false, you can use the API method - api.getChoosedFiles()[i].upload.send(), cancel(), retry() to trigger uploading for each file
                    // if it will be false, you can use the upload button - check the options example
                    start: true,
                    
                    // upload the files synchron {Boolean}
                    synchron: true,
                    
                    // Callback fired before uploading a file
                    // by returning false, you can prevent the upload
                    beforeSend: function(item, listEl, parentEl, newInputEl, inputEl) {
                        // example:
                        // here you can extend the uploading data

                        return true;
                    },
                    
                    // Callback fired if the uploading succeeds
                    // by default we will add a success icon and fadeOut the progressbar
                    // Remember that if you want so show the PHP errors, you will need to process them also here. To prevent it you will need to respond on the upload url with error code in header.
                    onSuccess: function(data, item, listEl, parentEl, newInputEl, inputEl, textStatus, jqXHR) {

                        var response = JSON.parse(jqXHR.responseText);

                        item.html.find('.column-actions').html(
                            '<a href="'+response.preview.source+'" class="mfp-'+response.preview.type+' fileuploader-action fileuploader-action-preview" target="_blank" title="Preview"><i class="fa fa-eye"></i></a>'+
                            '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="fa fa-times"></i></a>'
                        );

                        // add success status string
                        item.html.find('#detail-holder').append(
                            '<span class="file">Success</span>'
                        );

                        // add file meta value
                        item.html.attr('data-meta', response.meta);

                        setTimeout(function() {
                            item.html.find('.progress').fadeOut(400);
                        }, 400);

                    },
                    
                    // Callback fired if the uploading failed
                    // by default we will set the progressbar to 0% and if it wasn't cancelled, we will add a retry button
                    // Remember that the PHP errors will be sent in the onSuccess function. To prevent this you will need to respond on the upload url with error code in header.
                    onError: function(item, listEl, parentEl, newInputEl, inputEl, jqXHR, textStatus, errorThrown) {
                        var errors = JSON.parse(jqXHR.responseText)['errors'];

                        var progressBar = item.html.find('.progress');

                        if(progressBar.length > 0) {
                            progressBar.find('span').html(0 + "%");
                            progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
                            item.html.find('.progress').fadeOut(400);
                        }

                        item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length == 0 ? item.html.find('.column-actions').prepend(
                            '<span class="pull-right"><a class="fileuploader-action fileuploader-action-retry" title="Retry"><i class="fa fa-refresh"></i></a></span>'
                        ) : null;

                        item.html.find('#detail-holder').append(
                            '<div class="clearfix"></div>\
                            <span class="">'+textStatus+'<br>'
                                + errors +
                            '</span>'
                        );
                    },
                    
                    // Callback fired while uploading the file
                    // by default we will set the progressbar width and percentage
                    /*data = {
                        loaded: ...,
                        loadedInFormat: ...,
                        total: ...,
                        totalInFormat: ...,
                        percentage: ...,
                        secondsElapsed: ...,
                        secondsElapsedInFormat:...,
                        bytesPerSecond: ...,
                        bytesPerSecondInFormat: ...,
                        remainingBytes: ...,
                        remainingBytesInFormat: ...,
                        secondsRemaining: ...,
                        secondsRemainingInFormat: ...
                    }*/
                    onProgress: function(data, item, listEl, parentEl, newInputEl, inputEl) {
                        var progressBar = item.html.find('.progress');

                        if(progressBar.length > 0) {
                            progressBar.show();
                            progressBar.find('span').html(data.percentage + "%");
                            progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                        }
                    },
                    
                    // Callback fired after all files were uploaded
                    onComplete: function(listEl, parentEl, newInputEl, inputEl, jqXHR, textStatus) {
                        // callback will go here
                    },
                },
                
                // enable the drag&drop feature {Boolean, Object}
                // this feature is available only in upload mode
                // by default - true
                dragDrop: {
                    // set drag&drop container {null, String, jQuery Object}
                    // example: 'body'
                    // example: $('body')
                    container: $('div#'+type+'-drag-files'),
                    
                    // Callback fired on entering with dragged files the drop container
                    onDragEnter: function(event, listEl, parentEl, newInputEl, inputEl) {
                        // callback will go here
                    },
                    
                    // Callback fired on leaving with dragged files the drop container
                    onDragLeave: function(event, listEl, parentEl, newInputEl, inputEl) {
                        // callback will go here
                    },
                    
                    // Callback fired on dropping the dragged files in drop container
                    onDrop: function(event, listEl, parentEl, newInputEl, inputEl) {
                        // callback will go here
                    },

                },
                
                // enable the addMore mode {Boolean}
                // choose more files from different folders; can be used in the standard HTML <form>
                addMore: true,
                
                // appended files {null, Array of Objects}
                // useful for REST API in javascript
                // please follow this structure for each file:
                /*{
                    name: 'filename1.txt',
                    size: 1024,
                    type: 'text/plain',
                    file: 'uploads/filename1.txt',
                    data: {
                        url: 'http://your_link.com/',
                        another_attribute: 'ok',
                        you_can_use_it_later: 'hehe',
                        also_in_templates: 'perfect'
                    }
                }*/
                files: null,
                
                // upload an image from clipboard {Boolean, Number in ms}
                // the input should be completely into view by pasting
                // this feature is available only in upload mode
                // compatible only for Chrome
                clipboardPaste: 2000,
                
                // input with the listed files {Boolean, String}
                // this list is an input[type="hidden"]
                // this list will be generated from each choosed/appended file name in a JSON format. You can use the onListInput callback to mainpulate this list
                // files in this list that are "0://file_name.ext" are showing to PHP that they are choosed and should be uploaded
                // if you've appended some files on the server-side, PHP will check if each appended file is in this list, if not, PHP will set it as removed. Also, it is very important if you have appended files
                // example: true
                // example: 'custom_listInput_name'
                listInput: true,
                
                // enable API methods {Boolean}
                // if it will be true, you can use API methods like writing this code:
                // var api = $.fileuploader.getInstance(input_element); (check api example to see all available methods)
                enableApi: true,
                
                // standard input events {null, Object}
                // bind standard Javascript input events
                // example: 
                /*{
                    click: function(event) {
                        // input was clicked
                    }
                }*/
                listeners: null,
                
                // dialogs
                // made to let you customizing the standard Javascript dialogs
                // this dialogs are used by showing a file warning or confirming a file removing
                dialogs: {
                
                    // alert dialog
                    alert: function(text) {
                        // return alert(text);
                        return alertify.alert(text);
                    },
                    
                    // confirm dialog
                    confirm: function(text, callback) {
                        confirm(text) ? callback() : null;
                        // alertify.confirm('Warning!', text, callback(), null) ;;
                    }
                },
                
                // captions
                captions: {
                    button: function(options) { return 'Choose ' + (options.limit == 1 ? 'File' : 'Files'); },
                    feedback: function(options) { return 'Choose ' + (options.limit == 1 ? 'file' : 'files') + ' to upload'; },
                    feedback2: function(options) { return options.length + ' ' + (options.length > 1 ? ' files were' : ' file was') + ' chosen'; },
                    drop: 'Drop the files here to Upload',
                    paste: '<div class="fileuploader-pending-loader"><div class="left-half" style="animation-duration: ${ms}s"></div><div class="spinner" style="animation-duration: ${ms}s"></div><div class="right-half" style="animation-duration: ${ms}s"></div></div> Pasting a file, click here to cancel.',
                    removeConfirmation: 'Are you sure you want to remove this file?',
                    errors: {
                        filesLimit: 'Only ${limit} files are allowed to be uploaded.',
                        filesType: 'Only ${extensions} files are allowed to be uploaded.',
                        fileSize: '${name} is too large! Please choose a file up to ${fileMaxSize}MB.',
                        filesSizeAll: 'Files that you choosed are too large! Please upload files up to ${maxSize} MB.',
                        fileName: 'File with the name ${name} is already selected.',
                        folderUpload: 'You are not allowed to upload folders.'
                    }
                }
            };
        },

        /**
         *
         * Event Callbacks
         *
         */
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