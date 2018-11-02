'use strict';

import $ from 'jquery';
import alertify from 'alertifyjs';
import selectize from 'selectize';
import datetimepicker from 'eonasdan-bootstrap-datetimepicker';
import DataTable from 'datatables.net-responsive'

$(document).ready(()=>{
	// var editor = new $.fn.dataTable.Editor();
	// editor.add({
	// 	"type":"selectize"
	// })

   var course = '';
   var oTable = $('#package-course').DataTable( {
        responsive: {
            details: {
                renderer: function ( api, rowIdx, columns ) {

                    var data = $.map( columns, function ( col, i ) {
                        return col.hidden ?
                            '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                '<td>'+col.data+'</td>'+
                            '</tr>' :
                            '';
                    } ).join('');
                    return data ?
                        $('<table class="gugugaga"/>').append( data )
                        :false;
                }
            }
        }
    } );

   function format(data){
   	console.log(data);
   	// let itemTemplate = `<tr>
		  //                   <td width="25%">
				// 				<input type='text' name="course" class="form-control" />
		  //                   </td>
		  //                   <td width="25%">
		  //                     <div class='input-group date date-datepicker'>
		  //                       <input type='text' name="start_date" class="form-control  course_start_date" />
		  //                       <div class="input-group-addon">
		  //                           <i class="fa fa-calendar" aria-hidden="true"></i>
		  //                       </div>
		  //                     </div>
		  //                   </td>
		  //                   <td width="25%">
		  //                     <div class='input-group date date-datepicker'>
		  //                       <input type='text' name="end_date" class="form-control course_end_date" />
		  //                       <div class="input-group-addon">
		  //                           <i class="fa fa-calendar" aria-hidden="true"></i>
		  //                       </div>
		  //                     </div>
		  //                   </td>
		  //                   <td><a  href="#" class="text-primary px-20-font center-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
		  //                   <td><a  href="#" class="text-danger px-20-font center-block"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
		  //                 </tr>`
		return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		        '<tr>'+
		            '<td>Full name:</td>'+
		            '<td>123</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Extension number:</td>'+
		            '<td>123</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Extra info:</td>'+
		            '<td>And any further details here (images etc)...</td>'+
		        '</tr>'+
		    '</table>';
   }

    oTable.on('responsive-display', function(e, datatable, row, showHide, update){
    	// console.log(e);
    	console.log(row.data());
    	course = $('.gugugaga .course-code ').selectize({
	    		valueField: 'id',
			    labelField: 'course_code',
			    searchField: ['course_code'],
			    create: false,
			    maxItems: 1,
			    openOnFocus: false,
			    options:window.courses
	    	});
    	$('.date-datepicker').datetimepicker({
    		format:'DD-MM-YYYY'
    	})
    })



	$('body').on('click','.add-item-btn',(e)=>{
		e.preventDefault();
		var packageglobal = [];
		var tr = $(e.target).closest('tr');
		var row = oTable.row(tr);
		var _course = $(e.target).closest('tr').find('input.course-code').val();
		var startdate = $(e.target).closest('tr').find('input.course_start_date').val();
		var enddate = $(e.target).closest('tr').find('input.course_end_date').val();
		var package_id = $(e.target).data('coursepackage');

	    var selectizeinput = Object.values(course[0].selectize.options).find((item)=>{
	    	return item.id = _course;
	    });
		var packageitem = {
			course_code:selectizeinput.id,
			course_end_date:enddate,
			course_start_date:startdate,
			package_id:package_id

		}
		window.jsop[package_id].push(packageitem);
		console.log(window.jsop);

		let itemTemplate = `<tr>
	                    <td width="25%">
							<input type='text' name="course" class="form-control" />
	                    </td>
	                    <td width="25%">
	                      <div class='input-group date date-datepicker'>
	                        <input type='text' name="start_date" class="form-control  course_start_date" />
	                        <div class="input-group-addon">
	                            <i class="fa fa-calendar" aria-hidden="true"></i>
	                        </div>
	                      </div>
	                    </td>
	                    <td width="25%">
	                      <div class='input-group date date-datepicker'>
	                        <input type='text' name="end_date" class="form-control course_end_date" />
	                        <div class="input-group-addon">
	                            <i class="fa fa-calendar" aria-hidden="true"></i>
	                        </div>
	                      </div>
	                    </td>
	                    <td><a  href="#" class="text-primary px-20-font center-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                    <td><a  href="#" class="text-danger px-20-font center-block"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
	                  </tr>`
		$(itemTemplate).insertBefore( $('body .gugugaga #expandtable') )
		$('#package-course').DataTable( {
	        responsive: {
	            details: {
	                renderer: function ( api, rowIdx, columns ) {

	                    var data = $.map( columns, function ( col, i ) {
	                        return col.hidden ?
	                            '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
	                                '<td>'+col.data+'</td>'+
	                            '</tr>' :
	                            '';
	                    } ).join('');
	                    return data ?
	                        $('<table class="gugugaga"/>').append( data )
	                        :false;
	                }
	            }
	        }
	    } );
	    // row.child(format(window.jsop[package_id])).show();

	})
	// console.log($('.course-code'));
	// $.each($('.course-code'), (key, val)=>{
	// 	// console.log(val);
	// 	$(val).selectize({
	// 		valueField: 'id',
	// 	    labelField: 'course_code',
	// 	    searchField: ['course_code'],
	// 	    create: false,
	// 	    maxItems: 1,
	// 	    openOnFocus: true,
	// 	    options:window.courses
	// 	})
	// })
	// $('.course-code').selectize({
	// 	valueField: 'id',
	//     labelField: 'course_code',
	//     searchField: ['course_code'],
	//     create: true,
	//     maxItems: 1,
	//     openOnFocus: true,
	//     options:window.courses
	// })

})


/*const _package = ( (window, undefined) => {
	let cacheDOM = {
        $dateDue: $('.course_end_date'),
        $dateCreated: $('.course_end_start'),
        $course:$('.course_code'),
        addItemBtn: document.querySelector('.add-item-btn'),
    };


    let AddPackage = (e)=>{
    	e.target;
    	console.log(e.target);
    	alert('hi');
    	let itemTemplate = `<tr>
	                    <td width="25%">
							<input type='text' name="course" class="form-control" />
	                    </td>
	                    <td width="25%">
	                      <div class='input-group date date-datepicker'>
	                        <input type='text' name="start_date" class="form-control  course_start_date" />
	                        <div class="input-group-addon">
	                            <i class="fa fa-calendar" aria-hidden="true"></i>
	                        </div>
	                      </div>
	                    </td>
	                    <td width="25%">
	                      <div class='input-group date date-datepicker'>
	                        <input type='text' name="end_date" class="form-control course_end_date" />
	                        <div class="input-group-addon">
	                            <i class="fa fa-calendar" aria-hidden="true"></i>
	                        </div>
	                      </div>
	                    </td>
	                    <td><a  href="#" class="text-primary px-20-font center-block"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
	                    <td><a  href="#" class="text-danger px-20-font center-block"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
	                  </tr>`
	    $(itemTemplate).insertBefore( $('#addpackage') );
    }

    let domEvents = () => {
    	  // cacheDOM.addItemBtn.addEventListener('click', AddPackage);
    	  cacheDOM.addItemBtn.addEventListener('click', AddPackage);
    }

    const init = () => {
        // events
        console.log(cacheDOM.addItemBtn);
        domEvents();
    };
    return {
        init: init
    }
})(window)

$(document).ready(function(){
    _package.init();
})
*/
