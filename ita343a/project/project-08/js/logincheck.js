
window.onload = init;

function init() {

	// configure the form itself to launch the submitIt() function when submitted
	document.getElementById("loginForm").onsubmit = submitIt;		

}

function submitIt() {

	if (document.getElementById("username").value == "") {
		document.getElementById("error").innerHTML = "You must enter a username to continue.";
		document.getElementById("username").focus();
		document.getElementById("username").select();
		return false;
	}
	
	if (document.getElementById("password").value == "") {
		document.getElementById("error").innerHTML = "You must enter a password to continue.";
		document.getElementById("password").focus();
		document.getElementById("password").select();
		return false;
	}
	
	}