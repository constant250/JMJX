/////////////////////////////////////////////////////////////////////////////////////////////////////////  Datepicker  /////////////////////////////////////////////////////////////////////////////////////////////////////////

// Item: Datepicker
// Name: DOB Datepicker
// Location: Add Customer
  // $(function () {
  //     $('#dob-datetimepicker').datetimepicker({
  //         format: 'DD-MMMM-YYYY'
  //     });
  // });

// Item: Datepicker
// Name: Start and End Date Datepicker
// Location: Add Reminders

$(function () {
    $('#send-time-datetimepicker').datetimepicker({
      format: 'LT'
    });
});

$(function () {
    $('#start-date-datetimepicker').datetimepicker({
      format: 'MMMM DD YYYY'
    });
});

$(function () {
    $('#end-date-datetimepicker').datetimepicker({
      format: 'MMMM DD YYYY'
    });
});

// Item: Datepicker
// Name: Date Datepicker
// Location: Global
$(function () {
    $('#date-datetimepicker').datetimepicker({
      format: 'DD-MMMM-YYYY'
    });
});


// Item: Datepicker
// Name: Course Enrolment Students
// Location: Course Enrolment Students
$(function () {
    $('#from-datetimepicker').datetimepicker({
      format: 'DD-MMMM-YYYY'
    });
});

$(function () {
    $('#to-datetimepicker').datetimepicker({
      format: 'DD-MMMM-YYYY'
    });
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////  DataTables  /////////////////////////////////////////////////////////////////////////////////////////////////////////

// Item: Datatables
// Name: All datatables with "custom-datatable" class
var oTable = $('.custom-datatable').DataTable( {
    "paging":   true,
    "order":  [[ 0, "desc" ]],
    "bFilter": false,
    "info":     true,
    "searching": true
} );

// //customer search
// $('[data-searching]').on('keyup', function() {
//    oTable.search(this.value).draw();
// })

/////////////////////////////////////////////////////////////////////////////////////////////////////////  Charts & Graphs  /////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
// Item: Amcharts
// Name: Student Enrollee Summary per Month
// Location: Dashboard

var chart = AmCharts.makeChart( "student_enrollee_summary", {
  "type": "serial",
  "theme": "light",
  "dataProvider": window.student_enrolle_chart,
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "Number of Students"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "months",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  }

} );
*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////  Form Wizards  /////////////////////////////////////////////////////////////////////////////////////////////////////////

// Item: jQuery Steps
// Name: Student Information
// Location: Add Customer

$(function ()
    {
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade"
     });
});





