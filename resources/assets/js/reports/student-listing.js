import $ from 'jquery';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';
require('datatables.net-buttons/js/buttons.html5.min' )
require('pdfmake/build/pdfmake.js');
require('pdfmake/build/vfs_fonts.js');

$(document).ready(function(){
	'use strict';

	var oTable =  $('#student-listing-table').DataTable({
		'order' : [[0, 'desc']]
	});
	new $.fn.dataTable.Buttons(oTable, {
        "buttons": [
        	{
        		"extend": 'collection',
	            "text": 'Export',
	        	 "buttons":[
	        	 	{
		                'extend':'excel',
		                "exportOptions": {
		                    "columns": [2 ,3 , 4 , 5 , 6 , 7]
		                }

		            },
		            {
		                'extend':'csvHtml5',
		                "exportOptions": {
		                    "columns": [2 ,3 , 4 , 5 , 6 , 7]
		                }
		            },
		            {
		                "extend": "pdfHtml5",
		                "orientation": "landscape",
		                "title" : 'ETI Student Listing',
		                "customize": (doc)=>{
		                	let column = doc.content[1].table.body[0];
		                	for (var i = 0; i < column.length ; i++) {
		                			doc.content['1'].table.widths="*"
		                		if(i % 2 == 0){
									doc.content[1].table.body[0][i].fillColor = '#ff6347'
		                		}else{
									doc.content[1].table.body[0][i].fillColor = '#577477'
		                		}
		                	}
		                },
		                "exportOptions": {
		                "columns": [2 ,3 , 4 , 5 , 6 , 7],
		                }
		            }
	        	 ]
        	}

        ]
    })
	oTable.buttons( 0, null ).containers().appendTo('#button_f');

	yadcf.init(oTable,[
	  {
	  	column_number : 0,
	  	sort_order: "desc"
	  },
	  {
	  	column_number : 1,
	  	filter_container_id : "month",
	  	filter_default_label: "Select Month",
	  	filter_reset_button_text: false
	  },
	  {
	  	column_number : 7,
	  	filter_container_id : "assignee",
	  	filter_default_label: "Select User",
	  	filter_reset_button_text: false
	  }
	  // {column_number : 2, filter_type: "text", filter_container_id: 'search-name', filter_reset_button_text:false, style_class:'form-control', filter_default_label:''},
   //    {column_number : 3, filter_container_id: 'file_type', filter_reset_button_text:false, style_class:'form-control'},
   //    {column_number : 4, filter_container_id: 'uploaded_by', filter_reset_button_text:false, style_class:'form-control'},
   //    {column_number : 5, filter_container_id: 'related_student', filter_reset_button_text:false, style_class:'form-control'}
	]);

	$('#yadcf-filter--appointment_summary_table-1, #yadcf-filter--appointment_summary_table-7').addClass('form-control');

	$('#clear-filter-btn').on('click', (e)=>{
        e.preventDefault();
        yadcf.exResetAllFilters(oTable)
    })

	$('.catFilter').on('click', function(){
		var cat = [];
		$('.catFilter:checked').each(function(){
			cat.push($(this).val())
		});
			// console.log(cat.join(', '));
		oTable.columns(8).search(cat.join(', ')).draw();
	}); 
});
