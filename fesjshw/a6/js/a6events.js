	
function sayHello() {
	alert("Welcome to my page!");
	alert("The local time is " + (new Date).toLocaleString());
}

function hideDiv() {
	document.getElementById("hidden").style.display = "none";
}

function showDiv() {
	document.getElementById("hidden").style.display = "block";
}

function convertUpper() {
	this.value = this.value.toUpperCase();
}

function convertLower() {
	this.value = this.value.toLowerCase();
}

	
function init() {

	// ADD YOUR EVENT HANDLERS HERE:
	pushbutton.onclick = sayHello;
	redbox.onmouseout = hideDiv;
	redbox.onmouseover = showDiv;
	ta1.onfocus = convertLower;
	ta1.onblur = convertUpper;
	ta2.onfocus = convertLower;
	ta2.onblur = convertUpper;
	ta3.onfocus = convertLower;
	ta3.onblur = convertUpper;
	// ... NO CHANGES PAST THIS LINE!
	

}

window.onload = init;
	
	
	