
window.onload = init;

function init() {

	// reset the form by calling the resetForm() function
	resetForm();
	
	// configure the 'reset' button to call the resetForm() function when clicked
	document.getElementById("resetform").onclick = resetForm;

	// configure the form itself to launch the submitIt() function when submitted
	document.getElementById("myform").onsubmit = submitIt;	
	
	

}


function resetForm() {

	 // make the value of the username field blank
	 document.getElementById("username").value = "";
	 
	 
	 // position the cursor in the username field
	 document.getElementById("username").focus();

	for(var i=0;i<document.getElementsByName("inter").length;i++)
      document.getElementsByName("inter")[i].checked = false;
	  document.getElementById("address").value = "";
	  document.getElementById("city").value = "";
	  document.getElementById("zip").value = "";
	  document.getElementById("recipient").value = "";
	  document.getElementById("phone").value = "";
	  document.getElementById("email").value = "";
	  document.getElementById("message").value = "";
}

function submitIt() {

	// begin by clearing out the error display area
	// so that we start with a clean slate:
	document.getElementById("formerrors").innerHTML = "&nbsp;"


	// if name is blank, make user go back and correct
	// it before continuing on:

	if (document.getElementById("username").value == "") {
		document.getElementById("formerrors").innerHTML = "You must enter your name";
		document.getElementById("username").focus();
		document.getElementById("username").select();
		return false;
	}
	
	if (!radioSelected("inter")) {
		document.getElementById("formerrors").innerHTML = "You must let us know if you are shipping internationally.";
		return false;
	} else if (radioSelected("inter") == "yes") {
		document.getElementById("formerrors").innerHTML = "Unfortunately we are not able to mail internationally at this time.";
		return false;
	}
	
	if (!isUSZip(document.getElementById("zip").value)){
		document.getElementById("formerrors").innerHTML = "You must enter a valid zip code.";
		document.getElementById("zip").focus();
		document.getElementById("zip").select();
		return false;
		}
		
	if (document.getElementById("recipient").value == "") {
		document.getElementById("formerrors").innerHTML = "You must enter the person the message is going to.";
		document.getElementById("recipient").focus();
		document.getElementById("recipient").select();
		return false;
	}
	
	if (!isPhoneNumber(document.getElementById("phone").value)){
		document.getElementById("formerrors").innerHTML = "You must enter a valid phone number.";
		document.getElementById("phone").focus();
		document.getElementById("phone").select();
		return false;
		}
		
	if (!validEmail(document.getElementById("email").value)){
		document.getElementById("formerrors").innerHTML = "You must enter a valid email address.";
		document.getElementById("email").focus();
		document.getElementById("email").select();
		return false;
		}
	

	// if we made it to here, the form is OK!  
	// now we want to send summary output to a new window:

	newWindow = window.open("","newWin");
	newWindow.focus();
	newWindow.document.write(
		"<link rel='stylesheet' href='css/newform.css'><div id='backcard'><div id='leftcard'><p>Dear " +
		document.getElementById("recipient").value + ",</p><br /> <p>" + document.getElementById("message").value + "</p><br /> <p>Call me soon: " + document.getElementById("phone").value + "<br /><p> Love, <br />" + document.getElementById("username").value + "</div><div id='rightcard'> <p>" + document.getElementById("recipient").value + "<br />" + document.getElementById("address").value + "<br />" + document.getElementById("city").value + ", " + document.getElementById("state").value + " " + document.getElementById("zip").value + "<br />" + document.getElementById("email").value + "</div></div><br /><p style='font-align: center'>Your card is in the mail!</p>");

	newWindow.document.close();
	

	return false;

}


/*
PASTE other validation functions below here (validEmail(), isNum(), etc.)
from the homework samples, the web, or write your own 
*/ 

	function radioSelected(radioName) {

		var radios = document.getElementsByName(radioName);
		var selected;
		
		for (var i=0, count = radios.length; i < count; i++) {
			if (radios[i].checked) {
				return radios[i].value;
			}
		} 

		// if we made it here then we haven't yet returned a value, therefore no radio
		// button was selected by the user and we should return false instead

		return false;
		
	}
	
	function isUSZip(zip) {
		var rez = new RegExp(/^\d{5}(-\d{4})?$/);
		return rez.test(zip);
	}
	
	function isPhoneNumber(phone) 
	{
		// Check for correct phone number
		// Phone Number Must Be Entered As: (555) 555-1234
		
		rePhoneNumber = new RegExp(/^(\([1-9]\d{2}\))?\s?\d{3}\-\d{4}$/);

		if (!rePhoneNumber.test(phone)) {
			  return false;
		}

		return true;
	}
	
	function validEmail(email) {
		var invalidChars = " /:,;";
	
		if (email == "") {
			return false;
		}
		for (var k=0; k<invalidChars.length; k++) {
			var badChar = invalidChars.charAt(k);
			if (email.indexOf(badChar) > -1) {
				return false;
			}
		}
		var atPos = email.indexOf("@",1);
		if (atPos == -1) {
			return false;
		}
		if (email.indexOf("@",atPos+1) != -1) {
			return false;
		}
		var periodPos = email.indexOf(".",atPos);
		if (periodPos == -1) {	
			return false;
		}
		if (periodPos+3 > email.length)	{
			return false;
		}
		return true;
	}