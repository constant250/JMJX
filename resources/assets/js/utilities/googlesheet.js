// import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';
import sheetrock from 'sheetrock';

$(document).ready(()=>{

	var ln = $('#url-table  tbody > tr').length ;
	console.log(ln);
	if( ln != 0 ){
		var vsheet = $('#url-table tbody').children('tr:first').children('td:last').find('button.gview_sheets');
		let mySpreadsheet =$(vsheet).data('sheeturl');
	 	let sheets =  $('#google_sheet').sheetrock({
	      url: mySpreadsheet,
	      fetchSize: 10,
	      callback: function (error, options, response) {
		    $('#google_sheet').html(response.html);
		    setTimeout( $('.table-googlesheet').removeClass('table-loader'), 5000);
		  },

		  reset: true
	    });

	   $('body').on('click','.gview_sheets',(e)=>{
	   	$('.table-googlesheet').addClass('table-loader')
	   	if($(e.target).data('sheeturl') != undefined){
	   		// console.log($(e.target))
	   		mySpreadsheet = $(e.target).data('sheeturl');
		 	// console.log($.fn.sheetrock);
		 	$('#google_sheet').html('');
		 	$(sheets).empty();
		 	$('#google_sheet').sheetrock({
		      url: mySpreadsheet,
		      fetchSize: 10,
		      callback: function (error, options, response) {
			      $('#google_sheet').html(response.html);
			          setTimeout( $('.table-googlesheet').removeClass('table-loader'), 5000);

			  },
			  reset: true
		    });

	   	}else{
	   		alert('something went wrong please try again later');
	   	}

	   });
 	}
})
