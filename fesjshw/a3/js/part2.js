// Assignment 3, part 2.
// The Javascript scolding machine will provide accurate and proven* methods to scold your children.
// *(this has not been proven in any way)
// As seen on TV
// Function called when the form is submitted.
// Function performs the calculation and returns false.

function calculate() {
    'use strict';
    
    // For storing the generation:
    var scold;
    
    // Get a reference to the form element:
    var grade = document.getElementById('grade');
		
	// Validate data and run the switch command
	if (grade && grade.value){
	
		switch (grade.value.toUpperCase()){
			case 'A':
				scold = "Great job, to the refrigerator!";
				break;
			case 'B':
				scold = "Not bad, yet not great.";
				break;
			case 'C':
				scold = "That's wonderfully mediocre of you!";
				break;
			case 'D':
				scold = "D for disappointing. You have disappointed Javascript Scolding Machine.";
				break;
			case 'F':
				scold = "You're grounded!";
				break;
			default:
				scold = "This isn't a real grade! Are you trying to fool Javascript Scolding Machine?";
				break;
			}; // Switch is done.
	
    // Display the generation:
    document.getElementById('scold').value = scold;
	
	};
	
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
