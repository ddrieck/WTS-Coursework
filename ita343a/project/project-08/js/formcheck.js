
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
	
	if (document.getElementById("firstname").value == "") {
		document.getElementById("error").innerHTML = "You must enter a first name to continue.";
		document.getElementById("firstname").focus();
		document.getElementById("firstname").select();
		return false;
	}
	
	if (document.getElementById("lastname").value == "") {
		document.getElementById("error").innerHTML = "You must enter a last name to continue.";
		document.getElementById("lastname").focus();
		document.getElementById("lastname").select();
		return false;
	}
	
	if (document.getElementById("email").value == "") {
		document.getElementById("error").innerHTML = "You must enter an email address to continue.";
		document.getElementById("email").focus();
		document.getElementById("email").select();
		return false;
	}
	
	if (document.getElementById("phone").value == "") {
		document.getElementById("error").innerHTML = "You must enter a phone number to continue.";
		document.getElementById("phone").focus();
		document.getElementById("phone").select();
		return false;
	}
	
	if (document.getElementById("password").value != document.getElementById("repeatpassword").value) {
		document.getElementById("error").innerHTML = "Your passwords do not match.";
		document.getElementById("repeatpassword").focus();
		document.getElementById("repeatpassword").select();
		return false;
	}
	}