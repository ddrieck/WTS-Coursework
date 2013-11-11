
window.onload = init;

function init() {

	// configure the form itself to launch the submitIt() function when submitted
	document.getElementById("registrationForm").onsubmit = submitIt;		

}

function submitIt() {

	if (document.getElementById("password").value == "") {
		document.getElementById("error").innerHTML = "You must enter a password to continue.";
		document.getElementById("password").focus();
		document.getElementById("password").select();
		return false;
	}
	
	if (document.getElementById("repeatpassword").value == "") {
		document.getElementById("error").innerHTML = "Please reenter your password.";
		document.getElementById("repeatpassword").focus();
		document.getElementById("repeatpassword").select();
		return false;
	}
	}