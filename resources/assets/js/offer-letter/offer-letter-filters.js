'use strict';

import $ from 'jquery';
// import selectize from 'selectize';
// import alertify from 'alertifyjs'
// import axios from 'axios';
// import datetimepicker from 'eonasdan-bootstrap-datetimepicker';
import DataTable from 'datatables.net-responsive'
import yadcf from 'yadcf';

var oTable = $('#offer-letter-table').DataTable({
	responsive:true,
	order: [[0, 'desc']],
	// ajax:{'url':'../configurations/offer-package-course/1','dataSrc':''},
	// columns:[
	// 	{
	// 		'className'			: 'details-control',
	// 		'orderable'		: false,
	// 		'data'	   		: null,
	// 		'defaultContent':''
	// 	},
	// 	{ "data":"date_created" },
	// 	{ "data":"shore_type" },
	// 	{ "data":"location" },
	// 	{ "data":"name" },
	// 	{ "data":"description" },
	// 	{ "data":"active" }
	// ],
	// "order": [[1, 'asc']]
});


yadcf.init(oTable,[
  {
    column_number : 8,
    filter_container_id : "agent",
    style_class:'form-control',
    filter_default_label: "Package Type",
    filter_reset_button_text: false
  },
  {
  	column_number : 10,
  	filter_container_id : "shoretype",
  	style_class:'form-control',
  	filter_default_label: "Shore Type",
  	filter_reset_button_text: false
	},
	{
  	column_number : 11,
  	filter_container_id : "location",
  	style_class:'form-control',
  	filter_default_label: "Location",
  	filter_reset_button_text: false
	},
]);
$('#clear-filter-btn').on('click', (e)=>{
	e.preventDefault();
	yadcf.exResetAllFilters(oTable)
});