/* This script is in response to Part 1 of assignment 3. The more function code below the comment is an extension of the initial test of the complex logic seen below.
var price;
var pubYear;
var binding;
var NYTBestSeller;
var seriesTitle;

((((price<25)&&(binding="Hardcover"))||((price<15)&&(binding="Paperback")))
&&(pubYear>2000)
&&(NYTBestSeller==true)
&&((seriesTitle="Food Network")||(seriesTitle="The Food Network")))
*/

// Function called when the form is submitted.
// Function runs the complex logic and returns false.
function logicTest() {
	'use strict';
	
      // Get a reference to the form values:
	var price = document.getElementById('price').value;
	var pubYear = document.getElementById('pubYear').value;
	var binding = document.getElementById('binding').value;
	var NYTBestSeller = document.getElementById('NYTBestSeller').value;
	var seriesTitle = document.getElementById('title').value;
	
	// Parse values to correct format
	price = parseInt(price);
	pubYear = parseInt(pubYear);
	// Convert the string value to a boolean
	NYTBestSeller = (NYTBestSeller == "true") ? true : false;
	
	/* Test inputs
	console.log (price);
	console.log (pubYear);
	console.log (binding);
	console.log (seriesTitle);
	console.log (NYTBestSeller);*/
	
	// Run the complex logic with an if/else to print results
	if ((((price < 25)&&(binding = "Hardcover")) || ((price < 15)&&(binding = "Paperback"))) && (pubYear > 2000) && (NYTBestSeller == true) && ((seriesTitle = "Food Network") || (seriesTitle = "The Food Network"))){	
		document.getElementById('result').value = 'Yes we do! Buy away!'; } 
		else { 
				document.getElementById('result').value = 'Nope. Sorry. Maybe search again?';
	}
	
	// Return false to prevent submission:
	return false;
    
} // End of logicTest() function.

// Function called when the window has been loaded.
// Function needs to add an event listener to the form.
function init() {
	'use strict';
	document.getElementById('theForm').onsubmit = logicTest;
} // End of init() function.
window.onload = init;