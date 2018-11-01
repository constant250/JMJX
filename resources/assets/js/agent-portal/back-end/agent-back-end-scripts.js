/////////////////////////////////////////////////////////////////////////////////////////////////////////  Datepicker  /////////////////////////////////////////////////////////////////////////////////////////////////////////

// Item: Datepicker
// Name: Generic Datepicker
// Location: Agent Portal (Global)
  $(function () {
      $('.generic-datepicker').datetimepicker({
          format: 'DD-MMMM-YYYY'
      });
  });

/////////////////////////////////////////////////////////////////////////////////////////////////////////  Charts & Graphs  /////////////////////////////////////////////////////////////////////////////////////////////////////////





$(document).ready(function(){


// Item: Amcharts
// Name: Monthly Commission
// Location: Agent Portal Dashboard


var chart = AmCharts.makeChart("monthly_commission", {
    "type": "serial",
    "theme": "light",
    "marginTop":0,
    "dataProvider": window.commission,
    "valueAxes": [{
        "axisAlpha": 0,
        "position": "left"
    }],
    "graphs": [{
        "id":"g1",
        "balloonText": "[[category]]<br><b><span style='font-size:14px;'>[[value]]</span></b>",
        "bullet": "round",
        "bulletSize": 8,
        "lineColor": "#09C8D0",
        "lineThickness": 2,
        "negativeLineColor": "#D1655D",
        "type": "smoothedLine",
        "valueField": "value"
    }],

    "dataDateFormat": "MMM",
    "categoryField": "month"
});

chart.addListener("rendered", zoomChart);
if(chart.zoomChart){
  chart.zoomChart();
}

function zoomChart(){
    chart.zoomToIndexes(Math.round(chart.dataProvider.length * 0.4), Math.round(chart.dataProvider.length * 0.55));
}

// Item: Amcharts
// Name: Enrolee Percentage
// Location: Agent Portal Dashboard



  var chart = AmCharts.makeChart( "enrolee_percentage", {
    "type": "serial",
    "theme": "light",
    "marginTop":0,
    "dataProvider": window.enrolle,
    "gridAboveGraphs": true,
    "startDuration": 1,
    "graphs": [ {
      "balloonText": "[[category]]: <b>[[value]]</b>",
      "fillColorsField": "color",
      "fillAlphas": 0.8,
      "lineAlpha": 0.2,
      "type": "column",
      "valueField": "count"
    } ],
    "chartCursor": {
      "categoryBalloonEnabled": false,
      "cursorAlpha": 0,
      "zoomable": false
    },
    "categoryField": "month",
    "categoryAxis": {
      "gridPosition": "start",
      "gridAlpha": 0,
      "tickPosition": "start",
      "tickLength": 20
    }

  } );
})

