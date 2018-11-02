import $ from 'jquery';
import alertify from 'alertifyjs';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';

$(document).ready(function(){
	'use strict';

	var oTable =  $('.reports-datatable').DataTable({
		"scrollX": true
	});
	/*var oTable = $('.non-custom-datatable').on('init.dt', function () {
        console.log( 'Table initialisation complete: '+new Date().getTime() );
    } )
    .DataTable();*/

    // var oTable = 

	/*yadcf.init(oTable,[
	  {column_number : 0},
	  {column_number : 2, filter_type: "text", filter_container_id: 'search-name', filter_reset_button_text:false, style_class:'form-control', filter_default_label:''},
      {column_number : 3, filter_container_id: 'file_type', filter_reset_button_text:false, style_class:'form-control'},
      {column_number : 4, filter_container_id: 'uploaded_by', filter_reset_button_text:false, style_class:'form-control'},
      {column_number : 5, filter_container_id: 'related_student', filter_reset_button_text:false, style_class:'form-control'}
	]);*/
});