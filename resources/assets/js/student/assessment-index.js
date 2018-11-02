// render all tasks with filters
if ( typeof v !== 'undefined' && '' != v ) {
    v = JSON.parse(v);
    var fj = FilterJS(v, "#get-training-sched", {
      template: '#training-template',
      criterias:[
        {field: 'train', ele: '#filter-schedule', event: 'change', all: 'all'},
      //   {field: 'status_id', ele: '#status-filter', event: 'change', all: 'all'},
      ],
      search: { ele: '#search-filter', fields: ['fullname','course', 'train'] },
      pagination: {
        container: '#pagination',
        visiblePages: 10,
        perPage: {
          values: [6,9,12],
          container: '#per-page'
        },
      }
    });
}
$('#per-page').children().addClass('student-training-select form-control bright-grey-font-color transparent-bg-color box-shadow-none outline-none');
$('body').on('click', '.student-assessment', function(){
  window.location.href = '/assessment/'+$(this).attr('data-id');
});


$('body').on('click', '.progress-report', function(){
	var data_id = $(this).attr('data-id');
  	alertify.confirm('Progress Report','Are you sure to send?',
    	function(evt, value){ 
    		alertify.notify('Sending Progress Report to Student. please wait for a while. <i class="fa fa-hourglass" aria-hidden="true"></i>', 'success', 0, function(){  console.log('dismissed'); });
    		window.location.href = '/assessment/progress-report/'+data_id+'/1';
    	},
    	function(evt, value){ 
    		// alertify.notify('Generating progress report. please wait for a while. <i class="fa fa-hourglass" aria-hidden="true"></i>', 'warning', 0, function(){  console.log('dismissed'); });
    		// window.location.href = '/assessment/progress-report/'+data_id;
    	 alertify.error('Cancel')
      }
	).set('labels', {ok:'Send', cancel:'Cancel'});
});

$('body').on('click', '.view-progress-report', function(){
  var data_id = $(this).attr('data-id');
  window.location.href = '/assessment/progress-report/'+data_id;
});


// alertify
// alertify.dialog('myConfirm', function() {
//   var settings;
//   return {
//     setup: function() {
//       var settings = alertify.confirm().settings;
//       for (var prop in settings)
//         this.settings[prop] = settings[prop];
//       var setup = alertify.confirm().setup();
//       setup.buttons.push({ 
//         text: '<u>C</u>ontinue',
//         key: 67 /*c*/ ,
//         scope: 'auxiliary',
//       });
//       return setup;
//     },
//     settings: {
//       oncontinue: null
//     },
//     callback: function(closeEvent) {
//       if (closeEvent.index == 2) {
//         if (typeof this.get('oncontinue') === 'function') {
//           returnValue = this.get('oncontinue').call(this, closeEvent);
//           if (typeof returnValue !== 'undefined') {
//             closeEvent.cancel = !returnValue;
//           }
//         }
//       } else {
//         alertify.confirm().callback.call(this, closeEvent);
//       }
//     }
//   };
// }, false, 'confirm');



import alertify from 'alertifyjs';