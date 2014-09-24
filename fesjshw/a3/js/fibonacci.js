
function calculate() {
    'use strict';
        
	//Capture upper and lower limit
	var lowerLimit = document.getElementById('lowerLimit').value;
	var upperLimit = document.getElementById('upperLimit').value;
	
	//Convert to integers
	lowerLimit = parseInt(lowerLimit, 10);
	upperLimit = parseInt(upperLimit, 10);
	
	// Create empty variable for results
	var result = "";
	
	//Set first part of sequence so javascript doesn't complain
	var n1 = 0;
	var n2 = 1;
	var n3 = lowerLimit;

	console.log (lowerLimit);
	console.log (upperLimit);
	
	//Check if inputs are valid
	if ( lowerLimit !== '' &&  (lowerLimit >= 0) && upperLimit && (upperLimit > lowerLimit)){
	
	//The while loop calculates the Fibonacci sequence starting at 
	//the lowerlimit and ending at the upper limiit.
	//It adds the results to the result variable for later writing
	while (n3 <= upperLimit)
	{
		
		n3 = n1 + n2;
		n1 = n2;
		n2 = n3;
		if (n3 > lowerLimit && n3 < upperLimit){
		result += n3 + " ";
		}
	}
	
	//Write results of while loop into form
	    document.getElementById('result').value = result;
	} else {
	//Display angry message if inputs are not valid
		if (lowerLimit > upperLimit) {
		document.getElementById('result').value = "The lower limit is higher than the upper limit. Please switch.";
		} else {
		document.getElementById('result').value = "These are not valid numbers. For shame!";
		}
	};
	
	// Return false to prevent submission:
    return false;
	
} // End of calculate() function.

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
    'use strict';
    document.getElementById('theForm').onsubmit = calculate;
} 

// End of init() function.
window.onload = init;
