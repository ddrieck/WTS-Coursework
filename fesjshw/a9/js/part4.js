//window.onload = drawPageContent;
window.onload = init;

function init() {
    'use strict';
    document.getElementById('theForm').onsubmit = addData;
	document.getElementById('graphsubmit').onclick = drawPageContent;
	document.getElementById('graph').onchange= dropdown;
} // End of init() function.

var userData = new Array();

function dropdown() {
	'use strict'
	
	var dropdownvalue = document.getElementById('graph').value;
	var text = "";
	
	switch (dropdownvalue){
		case "widget":
			text = "Please enter 4 values for the widget.";
			break;
		case "icecream":
			text = "Please enter 5 values for ice cream consumption.";
			break;
		case "muppet":
			text = "Please enter 6 values for the muppets.";
			break;
		}
		
		document.getElementById("datalabel").innerHTML = text;
	}

function addData() {
	'use strict';
	var dataoutput = document.getElementById('dataoutput');
	var message = '';
	var dataInput = document.getElementById('data');
		dataInput = parseInt(dataInput.value);
		userData.push(dataInput);

	message = '<ol>';
	for (var i = 0; i < userData.length; i++) {
		message += '<li>' + userData[i] + '</li>';
	}
	message += '</ol>';
	dataoutput.innerHTML = message;  
	//console.log(dataInput);
	//console.log(userData);
	return false;
}

//Global Enumerative Constants
var LEGEND = 0;
var ITEMNAME = 1;
var DATA = 2;
var COLORS = 3;

var chart = new Array();

var d = document;  // shorter to type if not somewhat controversial :)

chart[0] = new Array();
chart[0][LEGEND] = "Widget Production";
chart[0][ITEMNAME] = new Array("Big Widgets", "Little Widgets", "Medium Widgets", "Microwidgets");
chart[0][DATA] = userData;
chart[0][COLORS] = new Array("lightblue","orange","red","lightgreen");

chart[1] = new Array();
chart[1][LEGEND] = "Ice Cream Consumption (in annual Scoops Eaten)";
chart[1][ITEMNAME] = new Array("Chocolate", "Strawberry", "Vanilla", "Mint", "Sorbet");
chart[1][DATA] = userData;
chart[1][COLORS] = new Array("tan", "pink", "#FFFFDD", "#CCFFCC", "orange");

chart[2] = new Array();
chart[2][LEGEND] = "Muppet Airtime in 2009 (in hours)";
chart[2][ITEMNAME] = new Array("Gonzo", "Kermit", "Piggy", "Rowlf", "Big Bird", "Elmo");
chart[2][DATA] = userData;
chart[2][COLORS] = new Array("#FF00FF", "lightgreen", "pink", "tan", "yellow", "red");

function drawChart(chartNum)
{

	function arraySearch(arr, item) {for (i in arr) { if (arr[i]==item) return i; }}

	var printOrder = chart[chartNum][ITEMNAME].slice(0).sort()
	
	var themax=0, thesum=0;  
	for (i in chart[chartNum][DATA]) {
		 thesum += chart[chartNum][DATA][i];
		 themax = Math.max(themax, chart[chartNum][DATA][i]);
		 printOrder[i]=arraySearch(chart[chartNum][ITEMNAME], printOrder[i]);
	}			
	
	// create the fieldset/legend nodes
	var newFieldset = d.createElement("fieldset");
	var newLegend = d.createElement("legend");

	// populate the legend and append to the fieldset
	newLegend.appendChild(d.createTextNode(chart[chartNum][LEGEND]));
	newFieldset.appendChild(newLegend);
	
	for (i in printOrder) {
		j = printOrder[i];

		//append each bargraph to the newFieldset node
		graphBar(newFieldset,
			Math.round(chart[chartNum][DATA][j] / themax * 95),
			chart[chartNum][COLORS][j],
			chart[chartNum][ITEMNAME][j], 
			chart[chartNum][DATA][j] + " (" +
			Math.round(chart[chartNum][DATA][j] / thesum * 100) + "%)");
	}
					
	// append footer div to the fieldset node
	var totalsDiv = d.createElement("div");
	totalsDiv.className = "totals";
	totalsDiv.appendChild(d.createTextNode("Combined Total: " + thesum));
	newFieldset.appendChild(totalsDiv);
	
	// append the complete new fieldset node to the document
	d.body.appendChild(newFieldset);

}

function graphBar(fieldSet, pctwidth, colorcode, legendtext, bartext) 
{

	// create the span element, add its text and the <br /> element
	var newSpan = document.createElement("span");
	newSpan.appendChild(d.createTextNode(legendtext));
	newSpan.appendChild(d.createElement("br"));
	
	// create the div for the bar, style it and add its text
	var newDiv = d.createElement("div");
	with (newDiv) {
		className="graphBar";
		with (style) {
			width = pctwidth + "%";
			height = "25px";
			backgroundColor = colorcode;
		}
		appendChild(d.createTextNode(bartext));
	}
	
	// append the span and the div to the current fieldSet
	fieldSet.appendChild(newSpan);
	fieldSet.appendChild(newDiv);
	
}


	
function drawPageContent() {
	var dropdownvalue = document.getElementById('graph').value;
		
	switch (dropdownvalue){
		case "widget":
			drawChart(0);
			break;
		case "icecream":
			drawChart(1);
			break;
		case "muppet":
			drawChart(2);
			break;
		}
		

		formElement = document.getElementById("theForm");
		formElement.parentNode.removeChild(formElement);
		buttonElement = document.getElementById("graphsubmit");
		buttonElement.parentNode.removeChild(buttonElement);
}