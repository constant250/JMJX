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

$(document).ready(function(){
  $('.announcement-carousel').owlCarousel({
      autoPlay: 3000,
      stopOnHover: true,
      responsiveClass: true,
      items: 3
  });
});