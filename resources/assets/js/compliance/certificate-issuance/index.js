import alertify from 'alertifyjs';

$('body').on('click', '.send_cert', function(){
	var id = $(this).attr('data');
	var email = $(this).attr('data-email');



  	alertify.confirm('Send Certificate', 'Are you sure to send this certificate to <b>'+email+'</b>?', 
    function(){ 

    	alertify.success('Please Wait...');
      	
      	$.ajax({
	        url: 'certificate-issuance/send/'+id,
	        type: 'GET',
	        success: function(response) {
	        	console.log(response);
	        	var r = $.parseJSON(response);

	        	if(r.result == 'success'){
	        		$('#flag-'+id).attr('style','color:#43A047 !important;');
	        		alertify.alert('Email Sending Successful', r.msg);
	        	}else{
	        		alertify.alert('Email Sending Failed', r.msg);
	        	}
	        }
	      });

      

    }, function(){ alertify.error('Cancel')});


});