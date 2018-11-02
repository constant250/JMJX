'use strict';

import $ from 'jquery';
import selectize from 'selectize';
import alertify from 'alertifyjs'
import axios from 'axios';
import datetimepicker from 'eonasdan-bootstrap-datetimepicker';
import DataTable from 'datatables.net-responsive'
import yadcf from 'yadcf';


$(document).ready(function(){
var openRows = new Array();
var course = ''
function format ( d ) {
     return d;
}

function closeOpenedRows(table, selectedRow) {
    $.each(openRows, function (index, openRow) {
        // not the selected row!
        if ($.data(selectedRow) !== $.data(openRow)) {
            var rowToCollapse = oTable.row(openRow);
            rowToCollapse.child.hide();
            openRow.removeClass('shown');
            // replace icon to expand
            // $(openRow).find('td.details-control').html('<span class="glyphicon glyphicon-plus"></span>');
            // remove from list
            var index = $.inArray(selectedRow, openRows);
            openRows.splice(index, 1);
        }
    });
}

var oTable = $('#package-course').DataTable({
	responsive:true,
	ajax:{'url':'../configurations/offer-package-course/1','dataSrc':''},
	columns:[
		{
			'className'			: 'details-control',
			'orderable'			: false,
			'data'	   			: null,
			'defaultContent'	:''
		},
		{ "data":"date_created" },
		{ "data":"shore_type" },
		{ "data":"location" },
		{ "data":"name" },
		{ "data":"description" },
		{ "data":"active" },
		{
			'className' 		:'Uisd',
			'data'				:null,
			// 'defaultContent'	: '<button class="gusad pEdit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button> <button class="gusad pDel"><i class="fa fa-minus-square" aria-hidden="true"></i></button> '
			'defaultContent'	:`<div class="dropdown actions">
	                                  <button class="btn  dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	                                    <span>Actions</span>
	                                    <span class="caret"></span>
	                                  </button>
	                                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
	                                    <li><a href="#" class=" pEdit">Edit</a></li>
	                                    <li><a href="#" class=" pDel">Delete </i></a></li>
	                                  </ul>
	                                </div>`
		}
	],
	// "order": [[1, 'asc']]
});


 yadcf.init(oTable,[
	{
	  	column_number : 2,
	  	filter_container_id : "shoretype",
	  	style_class:'form-control',
	  	filter_default_label: "Shore Type",
	  	filter_reset_button_text: false
  	},
  	{
	  	column_number : 3,
	  	filter_container_id : "location",
	  	style_class:'form-control',
	  	filter_default_label: "Location",
	  	filter_reset_button_text: false
  	},
  	{
	  	column_number : 6,
	  	filter_container_id : "active",
	  	style_class:'form-control',
	  	filter_type: "select",
	  	data:[
	  		{
	  			value:1,
	  			label:'Yes'
	  		},
	  		{
	  			value:0,
	  			label:'No'
	  		}
	  	],
	  	select_type: "select",
	  	filter_default_label: "",
	  	select_type_options: {
	      dropdownAutoWidth: true,
	    },
	  	filter_reset_button_text: false
  	},
 ])
$('#clear-filter-btn').on('click', (e)=>{
    e.preventDefault();
    yadcf.exResetAllFilters(oTable)
})

$('#package-course tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = oTable.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            closeOpenedRows(oTable, tr);
            $.ajax({
		     	type:"GET",
		     	headers:{
		            'Accept': 'application/json',
		            'Content-Type': 'application/json'
		        },
		        dataType: "json",
		        url:'/package-detail/'+row.data().id,
		        success:function(data){
		        	var _tr='';
		        	_tr+=`<tr class="nothere">
			                <td width="50%">
			                  <input type='text' name="course" class="course-code form-control" />
			                </td>
			                <td width="20%">
			                  <div class='input-group date date-datepicker_start'>
			                    <input type='text' name="start_date" class="form-control  course_start_date" value="" />
			                    <div class="input-group-addon">
			                        <i class="fa fa-calendar" aria-hidden="true"></i>
			                    </div>
			                  </div>
			                </td>
			                <td width="20%">
			                  <div class='input-group date date-datepicker_end'>
			                    <input type='text' name="end_date" class="form-control course_end_date" value="" />
			                    <div class="input-group-addon">
			                        <i class="fa fa-calendar" aria-hidden="true"></i>
			                    </div>
			                  </div>
			                </td>
			                <td colspan="3" align="right"><button style="float:left" class='add-item-btn' data-packageid="${row.data().id}" >ADD</button></td>
			              </tr>`;
		        	$.each(data['detail'], function(k,v){
		        		// console.log(v['detail_course']);
		        		// console.log(v['detail_course']['wk_duration_package']);
		        		// console.log(v);
		        		var dis = (v.primary == 1 ? 'disabled' : '');
		        		_tr+=`<tr class="row_${v['id']}">
                                            <td width="55%">
                                                <input type='text' name="course" class="form-control" style="text-align: left;" data-valueing ="${v['detail_course']}" value="${v['detail_course']['course_code']} - ${v['detail_course']['course_name']}" />
                                            </td>
                                            <td width="15%">
                                              <div class='input-group date date-datepickers${k}'>
                                                <input type='text' name="start_date" class="form-control  course_start_date" value=" ${v['course_start_date']} " />
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </div>
                                              </div>
                                            </td>
                                            <td width="15%">
                                              <div class='input-group date date-datepickere${k}' data-weeking='${v['detail_course']['wk_duration_package']}'>
                                                <input type='text' name="end_date" class="form-control course_end_date" value="${v['course_end_date']} " />
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </div>
                                              </div>
                                            </td>

                                            <td> <button type="button" class="btn btn-success package-edit" data="${v['id']}"><i class="fa fa-pencil-square-o" data="${v['id']}" aria-hidden="true"></i></button></td>
                                             <td> <button type="button" class="btn btn-danger package-remove" data="${v['id']}"><i class="fa fa-trash" data="${v['id']}" aria-hidden="true"></i></button>
                                            </td>
                                            <td> <input type="number" style="width:40px;" name="order" class="form-control" id="pp_${v['id']}" data="${v['id']}" value="${v['order']}">
                                            </td>
                                          </tr>`
		        	})
		        	var header = `<table class="generatedtable" cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;width:100%;"> <thead>
                                          <tr>
                                              <td width=""><center>Course Code</center></td>
                                              <td><center>Course Start Date</center></td>
                                              <td><center>Course End Date</center></td>
                                              <td><center>Edit</center></td>
                                              <td><center>Delete</center></td>
                                              <td><center>Order</center></td>
                                          </tr>
                                      </thead>`;
				    var footer = '</table>';
				    var table = header+_tr+footer;
				    row.child( format(table) ).show();
           			tr.addClass('shown');
           			// console.log(data['courses']);
           			if(tr.hasClass('shown')){
           				// console.log($('.generatedtable .course-code'));
           				course = $('.generatedtable .course-code').selectize({
           					valueField: 'id',
		                    labelField: 'course_code',
		                    searchField: ['course_code'],
		                    create: false,
		                    maxItems: 1,
		                    openOnFocus: true,
		                    options: data['courses'],
		                    render:{
		                    	item:function(item,escape){
		                    		return `<div><span>${item.course_code} - ${item.course_name} </span></div>`
		                    	},
		                    	option:function(item,escape){
		                    		// console.log(item);
		                    		return `<div><span>${item.course_code} - ${item.course_name}</span></div>`
		                    	}
		                    }
           				})

           				$('.date-datepicker_start').datetimepicker({
				    		format:'YYYY-MM-DD'
				    	})
				    	$('.date-datepicker_end').datetimepicker({
				    		format:'YYYY-MM-DD',
				    		useCurrent: false
				    	})
				    	$('.date-datepicker_end').data("DateTimePicker").disable();


				    	$('.date-datepicker_start').on('dp.change', function(e){
				    		// $('.date-datepickere_end').add('')
				    		var scourse = $('input.course-code').val();
				    		var selectizeinput = Object.values(course[0].selectize.options).find((item)=>{
								// console.log(scourse);
								if(item.id == scourse){
									return item;
								}
						    	// return item.id = _course;
						    });
				    		// console.log(selectizeinput);
				    		 $('.date-datepicker_end').data("DateTimePicker").date(moment(e.date).add(selectizeinput['wk_duration_package'],'w')).disable();
				    	})
				    	// $('.date-datepicker_end').on('dp.change', function(e){
				    	// 	 $('.date-datepicker_start').data("DateTimePicker").maxDate(e.date);
				    	// })
				    	$.each($('[class*=date-datepickers]') , function(k, v){
				    		var lastid = $(v).attr('class').substr($(v).attr('class').lastIndexOf(' ' + 1));
				    		$('.date-datepickers'+lastid).datetimepicker({
					    		format:'YYYY-MM-DD'
					    	})
					    	$('.date-datepickere'+lastid).datetimepicker({
					    		format:'YYYY-MM-DD',
					    		useCurrent: false
					    	})
					    	$('.date-datepickere'+lastid).data("DateTimePicker").disable();
				    		$('.date-datepickers'+lastid).on('dp.change', function(e){
				    			 $('.date-datepickere'+lastid).data("DateTimePicker").date(moment(e.date).add($('.date-datepickere'+lastid).attr('data-weeking'),'w')).disable();
					    		 // $('.date-datepickere'+lastid).data("DateTimePicker").minDate(e.date);
					    	})
					    	// $('.date-datepickere'+lastid).on('dp.change', function(e){
					    	// 	 $('.date-datepickers'+lastid).data("DateTimePicker").maxDate(e.date);
					    	// })
				    	})


           			}
           			openRows.push(tr);
		        }
		     })
        }
    } );
	$('body').on('click','.add-item-btn', function(e){
		// $(e.target).closest
		var noti = alertify.notify('Please wait','success', 5);
		var _course = $(e.target).closest('tr').find('input.course-code').val();

		var startdate = $(e.target).closest('tr').find('input.course_start_date').val();
		var enddate = $(e.target).closest('tr').find('input.course_end_date').val();
		// console.log(course[0].selectize.options);
		var selectizeinput = Object.values(course[0].selectize.options).find((item)=>{
			console.log(_course);
			if(item.id == _course){
				return item;
			}
	    	// return item.id = _course;
	    });
	    // console.log(course[0].selectize.getItem( _course ))
	    // console.log(selectizeinput);

		axios.post('/configurations/offer-package-course',{
			package_id:$(e.target).data('packageid'),
			course_code:selectizeinput.id,
			course_start_date:startdate,
			course_end_date:enddate
		}).then((response)=>{
			// console.log(response)
			if(response.data.status == 'success'){
				noti.dismiss()
				alertify.notify('You have added successfully','success',3);
				let itemTemplate = `<tr>
	                    <td width="45%">
							<input type='text' name="course" class="form-control" value="${ selectizeinput.course_code } - ${ selectizeinput.course_name }" />
	                    </td>
	                    <td width="25%">
	                      <div class='input-group date date-datepicker'>
	                        <input type='text' name="start_date" class="form-control  course_start_date" value="${startdate}" />
	                        <div class="input-group-addon">
	                            <i class="fa fa-calendar" aria-hidden="true"></i>
	                        </div>
	                      </div>
	                    </td>
	                    <td width="25%">
	                      <div class='input-group date date-datepicker'>
	                        <input type='text' name="end_date" class="form-control course_end_date" value="${enddate}" disabled/>
	                        <div class="input-group-addon">
	                            <i class="fa fa-calendar" aria-hidden="true"></i>
	                        </div>
	                      </div>
	                    </td>
	                    <td><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
	                    <td> <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
	                  	<td> <button type="button" class="btn btn-info"><i class="fa fa-key" aria-hidden="true"></i></button></td>
	                  </tr>`
      	  $(e.target).closest('tr').find('input.course-code').val('');
		  $(e.target).closest('tr').find('input.course_start_date').val('');
		  $(e.target).closest('tr').find('input.course_end_date').val('');
		  course[0].selectize.clear();
		  $(itemTemplate).insertAfter( $('body .generatedtable tr.nothere') );
			}else{
				 course[0].selectize.clear();
				noti.dismiss()
				alertify.notify(response.data.data,'error',5);
			}
		}).catch((error)=>{
			alertify.notify(error,'error',5);
			console.log(error);
		})


	})

	$('body').on('click','.package-remove',(e)=>{
		e.preventDefault();

		// console.log($(e.target))
		// console.log($(e.target).attr('data'))
		var r = confirm('Are you sure you want to remove this ?');

		if(r == true){
			var noti = alertify.notify('Please wait','success', 5);
			axios.delete('/configurations/offer-package-course/'+$(e.target).attr('data'))
			.then((response)=>{
				console.log(response);
				noti.dismiss();
				// alert('You have successfully removed an item');
				$(e.target).closest('tr').remove();
				alertify.notify('You have successfully removed an item','success',5);
			}).catch((error)=>{
				console.log(error);
				noti.dismiss();
				alertify.notify('something went wrong please try again later','error',3);
			})
		}

	})

	$('body').on('click','.package-edit',(e)=>{
		e.preventDefault();
		var startdate = $(e.target).closest('tr').find('input.course_start_date').val();
		var enddate = $(e.target).closest('tr').find('input.course_end_date').val();
			var r = confirm('Are you sure you want to update this ?');
			if(r == true){
				var noti = alertify.notify('Please wait','success', 5);
				axios.put('/configurations/offer-package-course/'+$(e.target).attr('data'),{
					course_start_date:startdate,
					course_end_date:enddate
				})
				.then((response)=>{
					console.log(response);
					// alert('You have successfully updated an item');
					noti.dismiss()
					alertify.notify('You have successfully updated an item','success',5);
					// $(e.target).closest('tr').remove();
				}).catch((error)=>{
					console.log(error);
					noti.dismiss()
					// alert('something went wrong please try again later')
					alertify.notify('something went wrong please try again later','error',5);
				})
			}


	})

	$('#package-course tbody').on('click','a.pEdit', function(e){
		e.preventDefault();
		var data = oTable.row($(this).parents('tr')).data();
		// console.log(data);
		window.location.assign(`offer-package-course/${data['id']}/edit`);
	})
	$('#package-course tbody').on('click','a.pDel', function(e){
		var data = oTable.row($(this).parents('tr')).data();
		// console.log(data);
		e.preventDefault();
		var r = confirm('Are you sure you want to delete this ?');
		if(r == true){
			window.location.assign(`/offer-package-course-delete/${data['id']}`);
		}

	})

})

$(document).ready(function(){
// (function() {
	$('#package-course tbody').on('click','.package-primary',(e)=>{
		e.preventDefault();
		// console.log($(e.target));
		var _dom = $(e.target);
		var id = $(e.target).attr('data');
		// alert(id);
		var r = confirm('Are you sure you want to make this course primary ?');
			if(r == true){

				// alert('sulod! '+ id);
				var noti = alertify.notify('Please wait','success', 5);
				axios.get('/configurations/offer-package-course/primary/'+id)
				.then((response)=>{
					// console.log(response);
					// alert('You have successfully updated an item');

					$('.generatedtable tr').attr('style', 'background-color: #fff !important')
					$('.generatedtable tr.row_'+id).attr('style', 'background-color: #dff0d8 !important')

					$('.package-primary').removeAttr('disabled');
					$('#pp_'+id).attr('disabled', '');
					noti.dismiss()
					alertify.notify('course has been set to primary successfully','success',5);
					// $(e.target).closest('tr').remove();
				}).catch((error)=>{
					console.log(error);
					noti.dismiss()
					// alert('something went wrong please try again later')
					alertify.notify('something went wrong please try again later','error',5);
				});
			}


	})

	$('#package-course tbody').on('change','[name=order]',(e)=>{
		var _dom = $(e.target);
		var id = $(e.target).attr('data');
		var val = $(e.target).val();


		var noti = alertify.notify('Please wait','success', 5);
		axios.get('/configurations/offer-package-course/'+id+'/order/'+val)
		.then((response)=>{
			
			noti.dismiss()

			if(response.data.result == 'error'){
				alertify.notify(response.data.message,'error',5);
			}else{
				alertify.notify('course has been set to primary successfully','success',5);	
			}

			// $(e.target).closest('tr').remove();
		}).catch((error)=>{
			console.log(error);
			noti.dismiss()
			// alert('something went wrong please try again later')
			alertify.notify('something went wrong please try again later','error',5);
		});


	})

});
// })();
