// today.js #2
// This script indicates the current date and time.

// This function is used to update the text of an HTML element.
// The function takes two arguments: the element's ID and the text message.
function setText(elementId, message) {
    'use strict';
    
    if ( (typeof elementId == 'string')
    && (typeof message == 'string') ) {
    
        // Get a reference to the paragraph:
        var output = document.getElementById(elementId);
    
        // Update the innerText or textContent property of the paragraph:
		if (output.textContent !== undefined) {
			output.textContent = message;
		} else {
			output.innerText = message;
		}
    
    } // End of main IF.

} // End of setText() function.

function maxofThree(a, b, c){
	'use strict';
	return Math.max(a, b, c);
		} //End of function

// Call this function when the page has loaded:
function init() {
    'use strict';
    var a = 142;
	var b = 1344;
	var c = 86;
	
    //Run the comparison function
	var message = 'Of the numbers ' + a + ', ' + b + ', & ' + c; 
    message += ' the largest is ' + maxofThree(a, b, c) + '.';

    // Update the page:
    setText('output', message);
    
} // End of init() function.
window.onload = init;