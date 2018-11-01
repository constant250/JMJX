'use strict';

import alertify from 'alertifyjs';

let Attachement = ((window, undefined) => {

	// dom elements
	let cacheDom = {

		/*===========================================
		=            Attachments Section            =
		===========================================*/

		// All attachment inputs
		$pocAttachment : $('input[name=poc-attachment]'),

		$poaAttachment : $('input[name=poa-attachment]'),

		$pondAttachment : $('input[name=pond-attachment]'),

		$oaAttachment : $('input[name=oa-attachment]'),

		$poconAttachment : $('input[name=pocon-attachment]'),

		$bcAttachment : $('input[name=bc-attachment]'),

		// attachment preview button
		$previewAttachment : $('a.fileuploader-action-preview'),

		// on shore attachment inputs
		$PassportOSAttachment : $('input[name=passport-os-attachment]'),
		$EnrolmentFormOSAttachment : $('input[name=ef-os-attachment]'),
		$AcadQualificationOSAttachment : $('input[name=aq-os-attachment]'),
		$EngTestResOSAttachment : $('input[name=etr-os-attachment]'),
		$POFCOSAttachment : $('input[name=pofc-os-attachment]'),
		$POPOSAttachment : $('input[name=pop-os-attachment]'),
		$AusQOSAttachment : $('input[name=ausq-os-attachment]'),

		// off shore attachment inputs
		$PassportOfSAttachment : $('input[name=passport-ofs-attachment]'),
		$EnrolmentFormOfSAttachment : $('input[name=ef-ofs-attachment]'),
		$AcadQualificationOfSAttachment : $('input[name=aq-ofs-attachment]'),
		$EngTestResOfSAttachment : $('input[name=etr-ofs-attachment]'),
		$POFCOfSAttachment : $('input[name=pofc-ofs-attachment]'),
		$POPOfSAttachment : $('input[name=pop-ofs-attachment]'),
		$AusQOfSAttachment : $('input[name=ausq-ofs-attachment]'),

		//
		$formToken : $('input[name=_token]'),

		$attachmentDeleteForm : $('form[id=delete-deals-attachment]')

		/*=====  End of Attachments Section  ======*/
	};

	// filer instances
	let filerInstance = {};

	// jfiler options
	let _fileuploaderOptions = (type) => {
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
			                        <span class="name-holder filename">${name}</span>\
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
			                        <span class="name-holder filename">${name}</span>\
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

					item.html.find('span.filename').attr('data-id', item.file.att_id);

					var $preview = item.html.find('a.fileuploader-action-preview');


					if ( typeof item.data.meta != 'undefined' ) {

						// add file meta value
						item.html.attr('data-meta', item.data.meta);

						$preview.attr('href', '/deals/attachment/preview/'+item.data.meta);
						$preview.attr('target', '_blank');
					}
				},

				// Callback fired after removing the item element
				// by default we will animate the removing action
				onItemRemove: function(itemEl, listEl, parentEl, newInputEl, inputEl) {

					// post delete
					cacheDom.$attachmentDeleteForm.find('input[name=_meta]').val( itemEl.data('meta') );

					$.ajax({
						url: cacheDom.$attachmentDeleteForm.attr('action'),
						type: 'POST',
						data: cacheDom.$attachmentDeleteForm.serialize(),
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
					"_token" : cacheDom.$formToken.val(),
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

					item.html.find('span.filename').attr('data-id', response.att_id);
					console.log(item.file);

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
	}

	// initialize fileuploader
	let initFileUploader = () => {
		/*=====================================
		=            Fileuploaders            =
		=====================================*/

		// initialize fileuploader
		cacheDom.$oaAttachment.fileuploader( _fileuploaderOptions('oa') );
		cacheDom.$pocAttachment.fileuploader( _fileuploaderOptions('poc') );
		cacheDom.$poaAttachment.fileuploader( _fileuploaderOptions('poa') );
		cacheDom.$pondAttachment.fileuploader( _fileuploaderOptions('pond') );
		cacheDom.$poconAttachment.fileuploader( _fileuploaderOptions('pocon') );
		cacheDom.$bcAttachment.fileuploader( _fileuploaderOptions('bc') );
		// on shore
		cacheDom.$PassportOSAttachment.fileuploader( _fileuploaderOptions('passport-os') );
		cacheDom.$EnrolmentFormOSAttachment.fileuploader( _fileuploaderOptions('ef-os') );
		cacheDom.$AcadQualificationOSAttachment.fileuploader( _fileuploaderOptions('aq-os') );
		cacheDom.$EngTestResOSAttachment.fileuploader( _fileuploaderOptions('etr-os') );
		cacheDom.$POFCOSAttachment.fileuploader( _fileuploaderOptions('pofc-os') );
		cacheDom.$POPOSAttachment.fileuploader( _fileuploaderOptions('pop-os') );
		cacheDom.$AusQOSAttachment.fileuploader( _fileuploaderOptions('ausq-os') );
		// off shore
		cacheDom.$PassportOfSAttachment.fileuploader( _fileuploaderOptions('passport-ofs') );
		cacheDom.$EnrolmentFormOfSAttachment.fileuploader( _fileuploaderOptions('ef-ofs') );
		cacheDom.$AcadQualificationOfSAttachment.fileuploader( _fileuploaderOptions('aq-ofs') );
		cacheDom.$EngTestResOfSAttachment.fileuploader( _fileuploaderOptions('etr-ofs') );
		cacheDom.$POFCOfSAttachment.fileuploader( _fileuploaderOptions('pofc-ofs') );
		cacheDom.$POPOfSAttachment.fileuploader( _fileuploaderOptions('pop-ofs') );
		cacheDom.$AusQOfSAttachment.fileuploader( _fileuploaderOptions('ausq-ofs') );

		// fileuploader instances
		filerInstance._fileuploaderOaInstance = $.fileuploader.getInstance(cacheDom.$oaAttachment);
		filerInstance._fileuploaderPocInstance = $.fileuploader.getInstance(cacheDom.$pocAttachment);
		filerInstance._fileuploaderPoaInstance = $.fileuploader.getInstance(cacheDom.$poaAttachment);
		filerInstance._fileuploaderPondInstance = $.fileuploader.getInstance(cacheDom.$pondAttachment);
		filerInstance._fileuploaderPoconInstance = $.fileuploader.getInstance(cacheDom.$poconAttachment);
		filerInstance._fileuploaderBcInstance = $.fileuploader.getInstance(cacheDom.$bcAttachment);

		// appended files
		for ( var file of window.files ) {
			switch (file.data.input) {
				case 'poc-attachment':
					filerInstance._fileuploaderPocInstance.append(file);
					break;

				case 'poa-attachment':
					filerInstance._fileuploaderPoaInstance.append(file);
					break;

				case 'pond-attachment':
					filerInstance._fileuploaderPondInstance.append(file);
					break;

				case 'oa-attachment':
					filerInstance._fileuploaderOaInstance.append(file);
					break;
				case 'pocon-attachment':
					filerInstance._fileuploaderPoconInstance.append(file);
					break;
				case 'bc-attachment':
					filerInstance._fileuploaderBcInstance.append(file);
					break;
			}
		}

		/*=====  End of Fileuploaders  ======*/
	}

	// initialize
	let init = () => {
		initFileUploader();
	}

	return {
		init: init
	}
})(window);

// init
Attachement.init();

$( document ).ready(function() {
	$('body').on('dblclick', '.name-holder', function(){
		// alert($(this).html());
		$(this).removeClass('name-holder');
		console.log($(this))
		var id = $(this).attr('data-id');
		var f = $(this).html().split('.');
		var file = $(this).html().replace('.'+f[f.length-1], '');
		var html = `<div id="rename_${id}">
						<input class="form-control" style="width: 35%; float:left;" name="replace-filename_${id}" data-old_name="${file}" type="text" value="${file}">
						<button class="btn btn-success" id="save-filename" data-id="${id}" style="margin-left:3px">
						<i class="fa fa-check" style="height:20px; width:20px; line-height: 20px;" aria-hidden="true"></i>
						</button>
						<button class="btn btn-danger" id="reset-filename" data-id="${id}" style="margin-left:3px">
						<i class="fa fa-times" style="height:20px; width:20px; line-height: 20px;" aria-hidden="true"></i>
						</button>
					<div>`
		$(this).html('');
		$(this).html(html);
		// document.getElementsByClassName('.filename').innerHtml(html);
	});
	$('body').on('click',  '#reset-filename', function(e){
		e.preventDefault();
		// console.log($(this).attr('data-id'));
		var ee = $(this).attr('data-id');
		var pclass = $(`#rename_${ee}`).parent().addClass('name-holder').html($(`input[name=replace-filename_${ee}]`).attr('data-old_name'));
		// console.log();
	});
	$('body').on('click',  '#save-filename', function(e){
		e.preventDefault();
		var att_id = $(this).attr('data-id');
		// alert(att_id);

		// console.log($('input[name=_token]').val());
		// console.log($('input[name=_token]').val());
		// console.log($('[name=replace-filename]').val());

		$.ajax({
			url: '/deals/attachments/rename',
			type: 'POST',
			data: {_token: $('input[name=_token]').val(), id: att_id, filename: $(`[name=replace-filename_${att_id}]`).val()},
			success: function(response) {
				console.log(response)
				if (response.rename == 'success') {
				alertify.alert('Success', 'Edit Successful');
				var pclass = $(`#rename_${att_id}`).parent().addClass('name-holder').html($(`input[name=replace-filename_${att_id}]`).val());
				} else {
					alertify.alert('Error', 'Something went Wrong Please try again');
				}
			}
		});

	})
});
