// import $ from 'jquery';
import toolbar from '../back-end/form-toolbar.js';
import alertify from 'alertifyjs';
import moment from 'moment';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';
import datetimepicker from 'eonasdan-bootstrap-datetimepicker';

function display_c(){
var refresh=1000;
var mytime=setTimeout(display_ct,refresh)
}

// console.log(moment().add(8, 'hours').format('ddd, DD MMM YYYY hh:mm:ss A'));

function display_ct() {
var strcount
// var x = new Date().addHours(8);
var x = moment();
// var x1=x.toUTCString();
var x1=x.format('ddd, DD MMM YYYY hh:mm:ss A');
document.getElementById('ct').innerHTML = x1;
var tt=display_c();
}

$(window).on( 'load' ,display_ct());

$('#from-date, #to-date').on('dp.change', function(){
		
	var from = $('#from-date').val();
	var to = $('#to-date').val();
	var group = $('[name=group]').val();
	var user = $('[name=user]').val();
	
	if(from && to){
		from = moment(from, 'DD-MMMM-YYYY').format('YYYY-MM-DD');
		to = moment(to, 'DD-MMMM-YYYY').format('YYYY-MM-DD');

		if(from > to){
			alertify.alert('Opsss', 'Please check date range');
		}else{
			console.log(from);
			console.log(to);
			window.location.href = "/timelog/reports?from="+from+"&to="+to+"&group="+group+"&user="+user;
		}
		
	}
});

// $(document).ready(function(){

	$('[name=group]').on('change', function(){
		var from = $('#from-date').val();
		var to = $('#to-date').val();
		var group = $('[name=group]').val();
		var user = '';

		if(from && to){
			from = moment(from, 'DD-MMMM-YYYY').format('YYYY-MM-DD');
			to = moment(to, 'DD-MMMM-YYYY').format('YYYY-MM-DD');

			if(from > to){
				alertify.alert('Opsss', 'Please check date range');
			}else{
				console.log(from);
				console.log(to);
				window.location.href = "/timelog/reports?from="+from+"&to="+to+"&group="+group+"&user="+user;
			}
			
		}else{
			window.location.href = "/timelog/reports?from="+from+"&to="+to+"&group="+group+"&user="+user;
		}
	});

	$('[name=user]').on('change', function(){
		var from = $('#from-date').val();
		var to = $('#to-date').val();
		var group = '';
		var user = $('[name=user]').val();

		if(from && to){
			from = moment(from, 'DD-MMMM-YYYY').format('YYYY-MM-DD');
			to = moment(to, 'DD-MMMM-YYYY').format('YYYY-MM-DD');

			if(from > to){
				alertify.alert('Opsss', 'Please check date range');
			}else{
				console.log(from);
				console.log(to);
				window.location.href = "/timelog/reports?from="+from+"&to="+to+"&group="+group+"&user="+user;
			}
			
		}else{
			window.location.href = "/timelog/reports?from="+from+"&to="+to+"&group="+group+"&user="+user;
		}
	});


// DataTables

	

	// var oTable =  $('#timelogs-list').DataTable({
	// 	// searching: false
	// });

	// yadcf.init(oTable,[
	// {column_number : 0, filter_type: "text", filter_container_id: 'search-name', filter_reset_button_text:false, style_class:'form-control', filter_default_label:''}
	// ]);

// });


$('.time_notes').on('click', function(){
	alertify.alert('Note', $(this).children().attr('title'));
});

$(function () {
      $('#from-date').datetimepicker({
            format: 'DD-MMM-YYYY',
            useCurrent: false,
        });
   });

  $(function () {
      $('#to-date').datetimepicker({
            format: 'DD-MMM-YYYY',
            useCurrent: false,
        });
   });