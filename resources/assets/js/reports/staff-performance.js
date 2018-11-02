import alertify from 'alertifyjs';
require('amcharts/dist/amcharts/amcharts.js');
require('amcharts/dist/amcharts/serial.js');
require('amcharts/dist/amcharts/pie.js');
require('amcharts/dist/amcharts/themes/light.js');

$( document ).ready(function() {
    console.log(window.deals);
    if(window.deals == '[]'){
      alertify.alert('Opps', 'No data were found on this month.');
    }
    getGraph(window.deals);

    $('#select-month').on('change', function(){
      var month = $(this).val();
        $.ajax({
            'async': false,
            'type': "GET",
            'url': "/reports/staff-performance/"+month,
            'success': function (data) {
                if(data == '[]'){
                  alertify.alert('Opps', 'No data were found on this month.');
                }
                getGraph(data);
            }
        });
    });
    

});

function getGraph(data)
{
  var chart = AmCharts.makeChart("staff-performance", {
    "type": "serial",
    "theme": "light",
    "columnSpacing": 0,
    "categoryField": "staff",
    "startDuration": 1,

   "legend": {
      "position": "right",
      "marginRight": 80,
      "autoMargins": false,
      "truncateLabels": 25, // custom parameter
      "divId": "legenddiv"
    },
    "categoryAxis": {
      "gridPosition": "start",
      "position": "left"
    },
    "trendLines": [],
    "graphs": [
      {
        "balloonText": "Leads:[[value]]",
        "fillAlphas": 10,
        "fillColors":"#506c6f",
        "id": "AmGraph-1",
        "lineAlpha": 0,
        "title": "Leads",
        "type": "column",
        "valueField": "leads"
      },
      {
        "balloonText": "Prospects:[[value]]",
        "fillAlphas": 10,
        "fillColors":"#025680",
        "id": "AmGraph-2",
        "lineAlpha": 0,
        "title": "Prospects",
        "type": "column",
        "valueField": "prospects"
      },
      {
        "balloonText": "Opportunities:[[value]]",
        "fillAlphas": 10,
        "fillColors":"#0ac8cf",
        "id": "AmGraph-3",
        "lineAlpha": 0,
        "title": "Opportunities",
        "type": "column",
        "valueField": "opportunities"
      }
    ],
    "guides": [],
    "valueAxes": [
      {
        "axisAlpha": 0,
        "title": "Client Count"
      }
    ],
    "allLabels": [],
    "balloon": {},
    "titles": [],
    "dataProvider": $.parseJSON(data),
      "export": {
        "enabled": true
       }
  });
}
  

