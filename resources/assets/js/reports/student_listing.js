import $ from 'jquery';
import alertify from 'alertifyjs';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';
require( 'datatables.net-buttons/js/buttons.html5.min' )
require('pdfmake/build/pdfmake.js');
require('pdfmake/build/vfs_fonts.js');

$(document).ready(function(){
	var oTable = $('#student-listing-table').DataTable();
	 new $.fn.dataTable.Buttons( oTable, {
	    buttons: [
	        {
	            "extend": 'collection',
	            "text": 'Export',
	            "buttons": [
	                {
	                    'extend':'excel',
	                    "exportOptions": {
	                        "columns": [0,1,2,3,4,5,6,7,8],
	                    }

	                },
	                {
	                    'extend':'csvHtml5',
	                    "exportOptions": {
	                        "columns": [0,1,2,3,4,5,6,7,8],
	                    }
	                },
	                {
	                    "extend": "pdfHtml5",
	                    "text"  : "PDF",
	                    "orientation": "landscape",
	                    "title" : ()=>{
	                        return 'ETI CRM Student Listing';
	                    },
	                    "customize": (doc)=>{
	                        let column = doc.content[1].table.body[0];
	                        for (var i = 0; i < column.length ; i++) {
	                            if(i % 2 == 0){
	                                doc.content[1].table.body[0][i].fillColor = '#09c8d0'
	                            }else{
	                                doc.content[1].table.body[0][i].fillColor = '#577577'
	                            }
	                        }
	                    },
	                    // "action":function(e, dt, node, config){

	                    //      $.fn.DataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, node, config){
	                    //       console.log(config);
	                    //      };
	                    // },
	                    "exportOptions": {
	                        "columns": [0,1,2,3,4,5,6,7,8],
	                    }
	                   }
	                // { "text": 'High priority',   action: function () {  } },
	                // { "text": 'Medium priority', action: function () {  } },
	                // { "text": 'Low priority',    action: function () {  } }
	            ],
	            "fade": true
	        }
	    ]
	} );
	oTable.buttons( 0, null ).containers().appendTo('#button_f');
	yadcf.init(oTable,[
	  {column_number : 5, filter_container_id: 'course', filter_reset_button_text:false, style_class:'form-control'},
      {column_number : 7, filter_container_id: 'course_fee', filter_reset_button_text:false, style_class:'form-control'},
      {column_number : 8, filter_container_id: 'owner', filter_reset_button_text:false, style_class:'form-control'}
	]);

	$('#clear-filter-btn').on('click', (e)=>{
        e.preventDefault();
        console.log(months);
        yadcf.exResetAllFilters(oTable)
    })
})
