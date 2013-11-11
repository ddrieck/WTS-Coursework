// This script calculates the hypotenuse of a triangle.

// Function called when the form is submitted.
// Function performs the calculation and returns false.
function calculate() {
	'use strict';
	
	// For storing side a
	var aside;
    // For storing side b
	var bside;
	
    // Grab values of aside and bside from the form
    var aside = document.getElementById('aside').value;
	var bside = document.getElementById('bside').value;

	// Make sure they are positive:
	aside = Math.abs(aside);
	bside = Math.abs(bside);
	
	// First, calculate a squared + b squared
	var absqrd = (aside * aside) + (bside * bside);
	
	// Now, square root the total
	var absqrt = Math.sqrt(absqrd);

	// Format the total so it comes out as a number instead of a string
	absqrt = Math.abs(absqrt);
	absqrt = absqrt.toFixed(2);
	
	// Display the hypotenuse
	document.getElementById('hypotenuse').value = absqrt;
	
	// Return false to prevent submission
	return false;
    
} // End of calculate() function.

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = calculate;
} // End of init() function.
window.onload = init;