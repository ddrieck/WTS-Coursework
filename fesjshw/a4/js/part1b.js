// Assignment 3, part 2.
// The Javascript scolding machine will provide accurate and proven* methods to scold your children.
// *(this has not been proven in any way)
// As seen on TV
// Function called when the form is submitted.
// Function performs the calculation and returns false.

function calculate() {
    'use strict';
    
    //Create a Date for today
	var today = new Date();
	
	//Extract the year from the today date object
	var year = today.getFullYear();
	
	//Extract the month from user input
	var monthnum = document.getElementById('monthnum').value;
		
	//Subtract one to have the month input be correct for date object
	var month = (monthnum - 1);
	
	//Set up our output date using above variables and add first day and first second
	var result = new Date (year, month, 1, 0, 0, 1);
	
	//Format our result to locale
	result = result.toLocaleString();
	
    // Display our new date, validate for a number between 1 and 12:
	if ((month <= 12)&&(month >= 0)){
    document.getElementById('result').value = result;
	} else {
	document.getElementById('result').value = "I'm sorry, this is an invalid number. Please choose a number between 1 and 12.";
	};
	
    // Return false to prevent submission:
    return false;
    
}; // End of calculate() function.

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
    'use strict';
    document.getElementById('theForm').onsubmit = calculate;
} // End of init() function.
window.onload = init;
