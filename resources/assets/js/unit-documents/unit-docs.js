import toolbar from '../back-end/form-toolbar.js';
import qq from 'fine-uploader';
import alertify from 'alertifyjs';


console.log($('[name=_token]').val());
$.each(window.units, function(k,v){
	var manualUploader = new qq.FineUploader({
	    element: document.getElementById('fine-uploader-manual-trigger-'+v.unitCode),
	    template: 'qq-template',
	    request: {
	        // endpoint: '/app/public/unit-documents/'+v.deal_id+'/'+v.unitCode
	        endpoint: '/customers/unit-documents/upload',
	        // endpoint: '/customers/unit-documents/upload/'+v.deal_id+'/'+v.unitCode,
	        // method: 'GET'
	        // customHeaders: {'X-CSRF-TOKEN': $('[name=_token]').val()}
	        params: {_token: $('[name=_token]').val(), deal_id: v.deal_id, unitCode: v.unitCode}
	    },
	    thumbnails: {
	        placeholders: {
	            waitingPath: '/images/placeholders/waiting-generic.png',
	            notAvailablePath: '/images/placeholders/not_available-generic.png'
	        }
	    },
	    validation: {
            allowedExtensions: ['jpeg', 'jpg', 'txt', 'doc', 'docx', 'pdf', 'png']
        },
        callbacks: {
        	onComplete: function(id, name, obj, xhr){

        		var extImg = ['jpg', 'png', 'jpeg', 'JPG'];

        		var content = '<li id="li-'+obj['id']+'">'+
	                  '<div class="row">'+
	                    '<div class="col-sm-4" style="padding: 10px;">'+
	                      '<img class="qq-thumbnail-selector" width="100" height="120" src="'+ (extImg.indexOf(obj['ext']) > -1 ? '/'+obj['path'] : '/images/placeholders/document.png') + '">'+
	                    '</div>'+
	                    '<div class="col-sm-8" style="padding: 10px;">'+
	                    '<h5 class="">'+obj['filename']+'</h5>'+
	                    '<h6><i>'+Math.round(obj['size'] / 1024) / 100+' kB</i></h6>'+
	                    '<button type="button" class="btn btn-info"><a href="/'+obj['path']+'" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i></a></button>'+
	                    '<button type="button" class="btn btn-danger delete-file" value="'+obj['id']+'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>'+
	                    '</div>'+
	                  '</div>'+
	              '</li>';

                $('#ul-'+obj['unit_code']).append(content);
        	}
        },
	    autoUpload: true,
	    debug: false
	});
	/*qq(document.getElementById("trigger-upload-"+v.unitCode)).attach("click", function() {
	    manualUploader[v.unitCode].uploadStoredFiles();
	});*/
});


$('.delete-file').on('click', function(){
    var x = $(this).attr('value');
    console.log(x);
    alertify.confirm('Delete File', 'Are you sure you want to delete this file?',
        function(){
            $.ajax({
		      url: '/customers/unit-documents/delete/'+x,
		      method: 'GET',
		      success: function(results) {
		          var r = $.parseJSON(results);
		          if(r.r == true){
		            alertify.alert('<h3>Success!</h3>',"Unit File is deleted successfully.");
		            $('#li-'+x).remove();
		          }
		      }
			});
        },
        function(){ alertify.error('Cancel')
    });
});


$('.verify').on('click', function(){
	var x = $(this).attr('value');
	var y = $(this).attr('data');
	var z = $(this).attr('deal');

    alertify.confirm('Notice', 'Are you sure you to '+(y == 1 ? 'verify' : 'unverify')+' this unit?',
        function(){
            $.ajax({
		      url: '/customers/unit-documents/verify',
		      method: 'POST',
		      data: {'_token': $('[name=_token]').val(), 'verify': y, 'unit': x, 'deal': z},
		      success: function(results) {
		          var r = $.parseJSON(results);
		          if(r.r == true){
		            if(r.verify == 1){
		            	$('#v-'+r.unit).removeClass('btn-danger');
		            	$('#v-'+r.unit).addClass('btn-success');
		            	$('#v-'+r.unit).attr('data', 0);
		            	$('#v-'+r.unit).html('<i class="fa fa-check-circle" aria-hidden="true"></i> Verified');
		            }else{
		            	$('#v-'+r.unit).removeClass('btn-success');
		            	$('#v-'+r.unit).addClass('btn-danger');
		            	$('#v-'+r.unit).attr('data', 1);
		            	$('#v-'+r.unit).html('<i class="fa fa-times-circle" aria-hidden="true"></i>  Unverified');
		            }
		            alertify.alert('<h3>Success!</h3>',"Unit document is now "+(r.verify == 1 ? 'verified' : 'unverified')+".");
		          }
		      }
			});
        },
        function(){ alertify.error('Cancel')
    });
});