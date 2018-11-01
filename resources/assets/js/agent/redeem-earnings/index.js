import $ from 'jquery';
import alertify from 'alertifyjs';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';
  var oTable = $('#offer-letter-table').DataTable();
  yadcf.init(oTable,[
      {column_number : 2, filter_container_id: 'course', filter_reset_button_text:false, style_class:'form-control'},
      {column_number : 4, filter_container_id: 'month', filter_reset_button_text:false, style_class:'form-control'},
      {column_number : 8, filter_container_id: 'status', filter_reset_button_text:false, style_class:'form-control'}
  ]);



  // var redeem_commission_btn = document.querySelector('.redeemed-commission-btn');
  
  // VIEW DETAILS
  $('.view-details').on('click', function(){
  	var id = $(this).attr('data');
  	window.location.href = "/agent/redeem-earnings/details/"+id;

  })


  // REDEEM EARNINGS
  var redeem_content= $("#redeem_commission").html();
  var if_exist = 0;

  $('.redeemed-commission-btn').on('click', function(){
  	  var loop = $(this).attr('data');
      window.showConfirm = function(){
          alertify.confirm(redeem_content, function(){
          		console.log(loop);
          		var course_code = $('.re-'+loop+' td#course').attr('data'),
          		month = $('.re-'+loop+' td#completion_date').html(),
          		scID = $('.re-'+loop+' td#id').html(),
          		token = $('meta[name="csrf-token"]').attr('content');

          		var formData = new FormData();

          		formData.append('course_code', course_code);
          		formData.append('month', month);
          		formData.append('scID', scID);
          		formData.append('_token', token);

          		$.ajax({
				  url: '/agent/redeem-earnings/process-reedem',
				  data: formData,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  success: function(data){
				    // alert(data);
				    var r = $.parseJSON(data);
				    console.log(r);
	          		if(if_exist == 0){
	                	redeem_continue();
	          		}
	          		if(r.result == 'success'){
		          		// console.log(form_content.find('h1#msg'));
		          		$("#redeem_success_modal").find('h1#msg').html(r.msg);
		          		$("#redeem_success_modal").find('span#reqDate').html(r.request_date);
		          		$("#redeem_success_modal").find('i#fa_circle').removeClass('fa fa-times-circle');
		          		$("#redeem_success_modal").find('i#fa_circle').addClass('fa fa-check-circle');

		          		$("#redeem-"+loop).attr('disabled', '');
		          		$("#flag-"+loop).removeClass('redeem-available');
                  $("#flag-"+loop).addClass('redeem-on-process');
		          		$("#flag-"+loop).attr('title','On-Process');

		          		var form_content = $("#redeem_success_modal").html();
		          		alertify.redeem_success(form_content);
	          			$('.alertify.success-modal .ajs-modal .ajs-dialog').css('background-color', '#66BB6A');
	          		
	          		}else{
	          			$("#redeem_success_modal").find('h1#msg').html(r.msg);
		          		$("#redeem_success_modal").find('p#req').html('');
		          		$("#redeem_success_modal").find('i#fa_circle').removeClass('fa fa-check-circle');
		          		$("#redeem_success_modal").find('i#fa_circle').addClass('fa fa-times-circle');

		          		var form_content = $("#redeem_success_modal").html();
		          		alertify.redeem_success(form_content);
	          			$('.alertify.success-modal .ajs-modal .ajs-dialog').css('background-color', '#CD5C5C');
	          		}
				  }
				});

                // window.redeem_continue = function(){
                	// if(typeof alertify.redeem_success() === 'undefined'){
	        			// alertify.dialog('redeem_success',function(){
					    //   return {
					    //     main:function(content){
					    //         this.setContent(content); 
					    //         this.show(true, 'success-modal') ;
					    //     },
					    //     setup:function(){
					    //         return {
					    //             options:{
					    //                 basic:true,
					    //                 maximizable:false,
					    //                 resizable:false,
					    //                 padding:true,
					    //                 movable: false,
					    //                 closable: true
					    //             }
					    //         };
					    //     }
					    //   };
					    // });	
                	// }

				    // if(!alertify.redeem_success(form_content)){
	                	
				    // 	alert('walapa');
				    // 	alertify.redeem_success(form_content);
				    // }else{
				    // 	alert('ambot!');
				    // 	alertify.redeem_success(form_content).close();
				    // 	alertify.redeem_success(form_content);
				    // }
                // }
              }
            ).set({
              labels: {ok:'Continue'},
                  basic:true,
                  maximizable:false,
                  resizable:false,
                  padding:true,
                  movable: false,
                  closable: true
            }).show(true, 'custom-modal');
      }
      window.showConfirm();
  });

  // function alert_confirm(loop){}

  function redeem_continue(){
    alertify.dialog('redeem_success',function(){
      return {
        main:function(content){
            this.setContent(content); 
            this.show(true, 'success-modal') ;
        },
        setup:function(){
            return {
                options:{
                    basic:true,
                    maximizable:false,
                    resizable:false,
                    padding:true,
                    movable: false,
                    closable: true
                }
            };
        }
      };
    });
    if_exist = 1;
    // alertify.redeem_success(form_content);  
  }

   // window.redeem_commission_btn.addEventListener('click', alert_confirm);