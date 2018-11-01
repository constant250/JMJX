'use strict'
import selectize from 'selectize';
import toolbar from '../back-end/form-toolbar.js';

$(document).ready(function(){
	toolbar.saveBtn.on('click', ()=>{
		$('.add-course-form').submit();
	})

	$('#state').selectize({
		valueField: 'state_key',
        labelField: 'shortname',
        searchField: ['course_code','state_name'],
        create: false,
        maxItems: 1,
        openOnFocus: true,
        options: window.state
	})

	$('.date-datepicker').datetimepicker({
		format:'YYYY-MM-DD'
	})
})
