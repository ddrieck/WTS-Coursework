window.onload = initAll;
var xhr = false;
var citiesArray = new Array();
var popArray = new Array();

function initAll() {
	document.getElementById("searchField").onkeyup = searchSuggest;

	if (window.XMLHttpRequest) {
		xhr = new XMLHttpRequest();
	}
	else {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) { }
		}
	}

	if (xhr) {
		xhr.onreadystatechange = setCitiesArray;
		xhr.open("GET", "wa-cities.xml", true);
		xhr.send(null);
	}
	else {
		alert("Sorry, but I couldn't create an XMLHttpRequest");
	}
}

function setCitiesArray() {
	if (xhr.readyState == 4) {
		if (xhr.status == 200) {
			if (xhr.responseXML) {
				var allCities = xhr.responseXML.getElementsByTagName("item");
				for (var i=0; i<allCities.length; i++) {
					citiesArray[i] = allCities[i].getElementsByTagName("label")[0].firstChild;
					popArray[i] = allCities[i].getElementsByTagName("pop")[0].firstChild;
				}
			}
		}
		else {
			alert("There was a problem with the request " + xhr.status);
		}
	}
}


function searchSuggest() {
	var str = document.getElementById("searchField").value;
	document.getElementById("searchField").className = "";
	if (str != "") {
		document.getElementById("popups").innerHTML = "";
	
		for (var i=0; i<citiesArray.length; i++) {
			var thisCity = citiesArray[i].nodeValue;
	
			if (thisCity.toLowerCase().indexOf(str.toLowerCase()) == 0) {
				var tempDiv = document.createElement("div");
				tempDiv.innerHTML = thisCity;
				tempDiv.onclick = makeChoice;
				tempDiv.className = "suggestions";
				document.getElementById("popups").appendChild(tempDiv);
			}
		}
		var foundCt = document.getElementById("popups").childNodes.length;
		if (foundCt == 0) {
			document.getElementById("searchField").className = "error";
		}
		if (foundCt == 1) {
			document.getElementById("searchField").value = document.getElementById("popups").firstChild.innerHTML;
			document.getElementById("popups").innerHTML = "";
			popValue(document.getElementById("searchField").value);
		}
	}
}

function makeChoice(evt) {
	var thisDiv = (evt) ? evt.target : window.event.srcElement;
	document.getElementById("searchField").value = thisDiv.innerHTML;
	document.getElementById("popups").innerHTML = "";
	popValue(document.getElementById("searchField").value);
}

function popValue (city) {
	var citiesString = new Array();
	for (var i=0; i<citiesArray.length; i++) {
		citiesString.push(citiesArray[i].nodeValue);
		}
		
	var cityPosition = citiesString.indexOf(city);
	document.getElementById("cityPop").value = popArray[cityPosition].nodeValue;
	}

						