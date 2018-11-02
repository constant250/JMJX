
import moment from 'moment';
// Item: Amcharts
// Name: Opportunity by Stage
// Location: Sales Summary

var chart = AmCharts.makeChart("opportunity-stage", {
	"type": "serial",
   "theme": "light",
	"categoryField": "date",
	"startDuration": 1,
	"categoryAxis": {
		"gridPosition": "start",
		"position": "left"
	},
  "legend": {
      "useGraphSettings": true,
      "equalWidths": true,
      "periodValueText": "total: [[value.sum]]",
      "position": "left",
      "valueAlign": "left",
      'align': 'center',
      "spacing": 1,
      "maxColumns": 5
  },
	"trendLines": [],
	"graphs": [
		{
			"balloonText": "Prospecting:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			// 'fillColors': '#FF5E5B',
			"title": "Prospecting",
			"type": "column",
			"valueField": "Prospecting"
		},
		{
			"balloonText": "Qualification:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-2",
			"lineAlpha": 0.2,
			// 'fillColors': '#7DDF64',
			"title": "Qualification",
			"type": "column",
			"valueField": "Qualification"
		},
		{
			"balloonText": "Negotiating:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-3",
			"lineAlpha": 0.2,
			// 'fillColors': '#0AC8CF',
			"title": "Negotiating",
			"type": "column",
			"valueField": "Negotiating"
		},
		{
			"balloonText": "Verbal:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-4",
			"lineAlpha": 0.2,
			// 'fillColors': '#006989',
			"title": "Verbal",
			"type": "column",
			"valueField": "Verbal"
		},
		{
			"balloonText": "Close Won:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-5",
			"lineAlpha": 0.2,
			// 'fillColors': '#FDE74C',
			"title": "Close Won",
			"type": "column",
			"valueField": "Close Won"
		},
		{
			"balloonText": "Close Lost:[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-5",
			"lineAlpha": 0.2,
			// 'fillColors': '#FDE74C',
			"title": "Close Lost",
			"type": "column",
			"valueField": "Close Lost"
		}
	],
	"guides": [],
	"valueAxes": [
		{
			"id": "ValueAxis-1",
			"position": "left",
			"axisAlpha": 0
		}
	],
	"allLabels": [],
	"balloon": {},
	"titles": [],
	"dataProvider": [
		{
		"date": "07-2017",
		"Prospecting": 0,
		"color":'#fff',
		"Qualification": 2,
		"Negotiating": 1,
		"Verbal": 1,
		"Close Won": 0,
		"Close Lost": 0
		},
		{
		"date": "08-2017",
		"Prospecting": 8,
		"Qualification": 0,
		"Negotiating": 0,
		"Verbal": 0,
		"Close Won": 0,
		"Close Lost": 0
		}
	]

});

if( $.isEmptyObject(window.opp_stage)){
	chart.dataProvider = window.opp_stage;
		chart.validateData();
}else{
	var _url = window.location.href.split('/');
	var month = _url[_url.length-2];
	var year = _url[_url.length-1];
	console.log(window.location.href );
	if(isNaN(parseInt(month))){
		month = moment().format('MM') ;
		year = moment().format('YYYY') ;
	}
	console.log();
	$.ajax({
	type:'GET',
	url:`/reports/deals/sales-summary/${month}/${year}/filter`,
	async:true,
	global:false,
	success:function(r){
		// console.log(result);
		// var r  = JSON.parse(result);
		// charts.dataProvider= r;
		chart.dataProvider = r;
		chart.validateData();
		// console.log(typeof r);

	}
});
}


    var legend = new AmCharts.AmLegend();
    chart.addLegend(legend, "opportunity_stage_legend");
    legend.markerSize = 10;
   // legend.forceWidth = true;
   legend.verticalGap = 10;
   legend.markerType = "square";
   legend.align ="center";
   legend.color ="#616161";
   legend.fontSize = 12;
   legend.markerLabelGap = 10;

	// $.ajax({
	// 	type:'GET',
	// 	url:'/reports/deals/sales-summary/1',
	// 	async:true,
	// 	global:false,
	// 	success:function(r){
	// 		// console.log(result);
	// 		// var r  = JSON.parse(result);
	// 		// charts.dataProvider= r;
	// 		chart.dataProvider = r;
	// 		chart.validateData();
	// 		// console.log(typeof r);

	// 	}
	// });

// // Item: Amcharts
// // Name: Opportunity by Stage
// // Location: Sales Summary

// var chart = AmCharts.makeChart("opportunity-stage", {
// 	"type": "serial",
//    "theme": "light",
// 	"categoryField": "date",
// 	"startDuration": 1,
// 	"categoryAxis": {
// 		"gridPosition": "start",
// 		"position": "left"
// 	},
//   "legend": {
//       "useGraphSettings": true,
//      	"equalWidths": true,
//       "periodValueText": "total: [[value.sum]]",
//       "position": "left",
//       "valueAlign": "left",
//       'align': 'center',
//       "spacing": 1,
//       "maxColumns": 5
//   },
// 	"trendLines": [],
// 	"graphs": [
// 		{
// 			"balloonText": "Opportunity:[[value]]",
// 			"fillAlphas": 0.8,
// 			"id": "AmGraph-3",
// 			"lineAlpha": 0.2,
// 			'fillColors': '#0AC8CF',
// 			'lineColor': '#0AC8CF',
// 			"title": "Opportunity",
// 			"type": "column",
// 			"valueField": "opportunity"
// 		}
// 	],
// 	"guides": [],
// 	"valueAxes": [
// 		{
// 			"id": "ValueAxis-1",
// 			"position": "left",
// 			"axisAlpha": 0
// 		}
// 	],
// 	"allLabels": [],
// 	"balloon": {},
// 	"titles": [],
// 	"dataProvider": [
// 		{
// 			"date": '01-2016',
// 			'opportunity': 27000
// 		},
// 		{
// 			"date": '02-2016',
// 			'opportunity': 15000
// 		},
// 		{
// 			"date": '03-2016',
// 			'opportunity': 5000
// 		},
// 		{
// 			"date": '04-2016',
// 			'opportunity': 10000
// 		},
// 		{
// 			"date": '04-2016',
// 			'opportunity': 20000
// 		},
// 		{
// 			"date": '05-2016',
// 			'opportunity': 30000
// 		},
// 		{
// 			"date": '06-2016',
// 			'opportunity': 14000
// 		},
// 		{
// 			"date": '07-2016',
// 			'opportunity': 17000
// 		},
// 		{
// 			"date": '08-2016',
// 			'opportunity': 25000
// 		},
// 		{
// 			"date": '09-2016',
// 			'opportunity': 10000
// 		},
// 		{
// 			"date": '10-2016',
// 			'opportunity': 16000
// 		},
// 		{
// 			"date": '11-2016',
// 			'opportunity': 20000
// 		},
// 		{
// 			"date": '12-2016',
// 			'opportunity': 17000
// 		},
// 	]

// });

//     var legend = new AmCharts.AmLegend();
//     chart.addLegend(legend, "opportunity_stage_legend");
//     legend.markerSize = 10;
//    // legend.forceWidth = true;
//    legend.verticalGap = 10;
//    legend.markerType = "square";
//    legend.align ="center";
//    legend.color ="#616161";
//    legend.fontSize = 12;
//    legend.markerLabelGap = 10;

// // select click

$('#party_stage').on('change',function(){
	console.log(chart);
	// var charts = getChart('opportunity-stage');
	var party_stage = this.value;
	$.ajax({
		type:'GET',
		url:'/reports/deals/sales-summary/'+party_stage,
		async:true,
		global:false,
		success:function(r){
			// console.log(result);
			// var r  = JSON.parse(result);
			// charts.dataProvider= r;
			chart.dataProvider = r;
			chart.validateData();
			// console.log(typeof r);

		}
	});
});

function getChart(id) {
	var allCharts = AmCharts.charts;
	for (var i = 0; i < allCharts.length; i++) {
		if (id == $(allCharts[i].div).attr('id')) {
		return allCharts[i];
		}
	}
}

$('.sales-summary-select').on('change',function(e){
	// console.log(this.value);
	// console.log($('.sales-summary-select-year').value());
	window.location.href="/reports/deals/sales-summary/"+this.value+"/"+$('.sales-summary-select-year').val();
});
