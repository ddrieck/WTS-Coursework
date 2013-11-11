// Assignment 4, part 1a
// Function called when the form is submitted.
// Function performs the calculation and returns false.

function calculate() {
    'use strict';
    
	//Set up the array, fill it with months
	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	
	//Return appropriate month based on user submission
	var monthnum = document.getElementById('monthnum').value;
	var result = months[monthnum-1];
	
	// Output the month name
	document.getElementById('result').value = result;
	
    // Return false to prevent submission:
    return false;
    
} // End of calculate() function.

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
    'use strict';
    document.getElementById('theForm').onsubmit = calculate;
} // End of init() function.
window.onload = init;
