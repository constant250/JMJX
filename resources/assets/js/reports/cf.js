import $ from 'jquery';
import alertify from 'alertifyjs';
import DataTable from 'datatables.net';
import yadcf from 'yadcf';

$(document).ready(function(){
	var oTable =  $('#staff-management-table').DataTable({
		order:[[0,'desc']]
	});
})