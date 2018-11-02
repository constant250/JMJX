$('#filer_input').fileuploader({
      showThumbs: true,
      extensions: ['pdf', 'docm', 'docx', 'doc'],
      addMore: false,
      allowDuplicates: false,
      theme: 'default',
      thumbnails: {
        // thumbnails list HTML {String, Function}
        // example: '<ul></ul>'
        // example: function(options) { return '<ul></ul>'; }
        box: '<div class="fileuploader-items">' +
            '<ul class="fileuploader-items-list"></ul>' +
              '</div>',
        
        // append thumbnails list to selector {null, String, jQuery Object}
        // example: 'body'
        // example: $('body')
        boxAppendTo: null,
        
        // thumbnails item HTML {String, Function}
        // example: '<li>${name}</li>'
        // example: function(item) { return '<li>' + item.name + '</li>'; }
        item: '<li class="fileuploader-item">' +
             '<div class="columns">' +
              '<div class="column-thumbnail">${image}</div>' +
            '<div class="column-title">' +
                 '<div title="${name}">${name}</div>' +
                 '<span>${size2}</span>' +
            '</div>' +
            '<div class="column-actions" style="top: 5% !important;">' +
                 '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
            '</div>' +

            '<div class="column-description" style="margin-top: 15px;">' +
                 '<textarea name="${name}" class="form-control" placeholder="Description"></textarea>' +
            '</div>' +

              '</div>' +
              '<div class="progress-bar2">${progressBar}<span></span></div>' +
          '</li>',
        
        // thumbnails appended item HTML {String, Function}
        // example: '<li>${name}</li>'
        // example: function(item) { return '<li>' + item.name + '</li>'; }
        item2: '<li class="fileuploader-item">' +
             '<div class="columns">' +
              '<a href="${data.url}" target="_blank">' +
                 '<div class="column-thumbnail">${image}</div>' +
                 '<div class="column-title">' +
                      '<div title="${name}">${name}</div>' +
                      '<span>${size2}</span>' +
                 '</div>' +
            '</a>' +
            '<div class="column-actions">' +
                 '<a href="${file}" class="fileuploader-action fileuploader-action-download" title="Download" download><i></i></a>' +
                 '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i></i></a>' +
            '</div>' +
              '</div>' +
          '</li>',
          
        // insert the thumbnail's item at the beginning of the list? {Boolean}
        itemPrepend: false,
        
        // show a confirmation dialog by removing a file? {Boolean}
        // it will not be shown in upload mode by canceling an upload
        removeConfirmation: true,
        
        // render the image thumbnail? {Boolean}
        // if it will be false, it will generate an icon(you can also hide it with css)
        // if it will be false, you can use the API method (item.renderImage()) to render it (check thumbnails example)
        startImageRenderer: true,
        
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
        
        // Callback fired before adding the list element
        beforeShow: function(parentEl, newInputEl, inputEl) {
          // callback will go here
        },
        
        // Callback fired after adding the item element
        onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
          // callback will go here
        },
        
        // Callback fired after removing the item element
        // by default we will animate the removing action
        onItemRemove: function(itemEl, listEl, parentEl, newInputEl, inputEl) {
          itemEl.children().animate({'opacity': 0}, 200, function() {
            setTimeout(function() {
              itemEl.slideUp(200, function() {
                itemEl.remove(); 
              });
            }, 100);
          });
        },
        
        // Callback fired after the item image was loaded
        onImageLoaded: function(item, listEl, parentEl, newInputEl, inputEl) {
          // callback will go here
        },
      }
    });



  $('.edit-note').on('click', function(){
    var note = $('.note-magic').html();
    var note_id = $(this).attr('value');
    $('.note-magic').html('<textarea class="form-control" name="note-edit">'+note+'</textarea>');
    $('.update-note').css('display','inline');
    $('.edit-note').css('display','none');
    // $('.note-action').html('<a class="update-note" value="'+note_id+'"><span style=" margin-right:10px; font-size: 14; color:#0AC8CF"><i class="fa fa-check" aria-hidden="true"></i></span></a>');
    $(this).hide();
  });

  $('.update-note').on('click', function(){
    $('.update-note').css('display','none');
    $('.edit-note').css('display','inline');
    $.ajax({
        url: '/documents/note-update',
        method:'post',
        data:{_token: csrf_token,id:$(this).attr('value'),note:$('[name=note-edit]').val()},
        success: function(results) {
            var r = $.parseJSON(results);
            // console.log(r);
            if(r.submit == 'update'){
              $('.note-magic').html(r.note);
              // $('.note-action').html('<a class="edit-note" value="'+note_id+'"><span style=" margin-right:10px; font-size: 14; color:#0AC8CF"><i class="fa fa-pencil" aria-hidden="true"></i></span></a>');
              alertify.alert('<h3>Success!</h3>',"Document note successfully updated.");
            }
        }
    });
  });

  $('.delete-histDoc').on('click', function(){
      var id = $(this).attr('value');
      var r = confirm("Are you sure to delete this version?");
      if(r == true){
         $.ajax({
            url: '/documents/version-delete',
            method:'post',
            data:{_token: csrf_token,id:id},
            success: function(results) {
                var r = $.parseJSON(results);
                console.log(r);
                
                if(r.submit == 'deleted'){
                  if(r.rollback == 1){
                    alertify.alert('<h3>Success!</h3>',"Linked document successfully removed.", function(){
                      if(r.id == 0){
                         window.location.href = '/documents';
                      }else{
                        window.location.href = '/documents/'+r.id;
                      }
                    });
                  }else{
                    $('tr.vh-'+r.id).remove();
                    alertify.alert('<h3>Success!</h3>',"Linked document successfully removed.");
                    
                  }
                }
            }
        });
      }
  });




  $(function () {
    $('#dob-datetimepicker').datetimepicker({
     format: 'DD-MMMM-YYYY'
    });
  });


    $(function () {
    $('#from-datetimepicker').datetimepicker({
            format: 'DD-MMMM-YYYY'
        });

    });

        $(function () {
    $('#to-datetimepicker').datetimepicker({
            format: 'DD-MMMM-YYYY'
        });

    });


 $('.attached-files-list.details li:gt(7)').hide();
$('.attached-files-wrapper a.show-more-btn').on("click", function() { 
    $('.attached-files-list.details li:gt(7)').slideToggle(); 
    $(this).css({ "display": "none" });
  $("a.show-less-btn").css({ "display": "block" });
});
$('.attached-files-wrapper a.show-less-btn').on("click", function() { 
    $('.attached-files-list.details li:gt(7)').slideToggle(); 
    $(this).css({ "display": "none" });
  $("a.show-more-btn").css({ "display": "block" });
});



  $(document).ready(function() {
 
  $("#timeline-slider").owlCarousel({
 
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 3,
      navigation: true,
      pagination: false,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
      navigationText: ['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>']
  });
 
});



  $('.add-relatedDoc').on('click', function(){
    if($('[name=link_note]').val() == ''){
      alertify.alert('<h3>Opss!</h3>',"Please provied notes.");
      return '';
    }
    if($('[name=link_public]:checked').val() == null){
      var pub = 0;
    }else{
      var pub = 1;
    }
    $.ajax({
        type: "POST",
        url: "/documents/related-document-add",
        data:{_token: csrf_token, document_id: $('[name=document_id]').val(), related_document_id: $('[name=link_docs]').val(), note: $('[name=link_note]').val(), is_public: pub, user_id: $('[name=user_id]').val(), party_id: $('[name=party_id]').val()},
        success: function(data){
          var r = JSON.parse( data );
          console.log(r);

          if(r.submit == 'new'){
            var z = r.request;
            if($('.tbody .odd td').html() == 'No data available in table'){
              $('.tbody .odd td').remove();
            }
            var content = '<tr class="rd-'+z.id+'">\
                <td>'+z.related_document_id+'</td>\
                <td class="getName">'+z.related_document.file_name+' (v.'+z.related_document.version+')</a></td>\
                <td>'+z.note+'</td>\
                <td>'+(z.is_public == 1 ? 'Yes':'No')+'</td>\
                <td>'+z.party.name+'</td>\
                <td>'+moment(z.created_at).format('Do MM YYYY, HH:mm:ss A')+'</td>\
                <td><a href="#" class="delete-relatedDoc" value="'+z.id+'" title="Remove"><span style="font-size: 25px; color:#D34231"><i class="fa fa-minus-square" aria-hidden="true"></i></span></a></td>\
            </tr>';
            $('.tbody').append(content);
            $('.opt-'+z.related_document_id).remove();
            alertify.alert('<h3>Success!</h3>', "Linked document is added successfully.");
          }else{
            alertify.alert('<h3>Error!</h3>', r.messege);
          }
        }
    });
  });

  $('.delete-relatedDoc').on('click', function(){
    // console.log($('.delete-relatedDoc').attr('value'));
    var r = confirm("Are you sure to remove linked document?");
      if(r == true){
        $.ajax({
            url: '/documents/related-document-delete',
            method:'post',
            data:{_token: csrf_token,id:$('.delete-relatedDoc').attr('value')},
            success: function(results) {
                var r = $.parseJSON(results);
                console.log(r);
                
                if(r.submit == 'deleted'){
                  var content = '<option class="opt-'+ $('tr.rd-'+r.id+' .getID').html() +'" value="'+ $('tr.rd-'+r.id+' .getID').html() +'">'+ $('tr.rd-'+r.id+' .getName').html() +'</option>';
                  $('[name=link_docs]').append(content);
                  $('tr.rd-'+r.id).remove();
                  alertify.alert('<h3>Success!</h3>',"Linked document successfully removed.");
                }
            }
        });
      }
  });



  jQuery(document).ready(function($){
  var timelineBlocks = $('.cd-timeline-block'),
    offset = 0.8;

  //hide timeline blocks which are outside the viewport
  hideBlocks(timelineBlocks, offset);

  //on scolling, show/animate timeline blocks when enter the viewport
  $(window).on('scroll', function(){
    (!window.requestAnimationFrame) 
      ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
      : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
  });

  function hideBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
    });
  }

  function showBlocks(blocks, offset) {
    blocks.each(function(){
      ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
    });
  }
});

import alertify from 'alertifyjs';