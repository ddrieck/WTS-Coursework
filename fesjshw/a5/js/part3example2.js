// part3example2.js
// This script generates 5 random numbers.
// Those 5 numbers are added together for one total and multiplied together for another.
// The number set and totals are displayed on the screen

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

function numbers(){
	'use strict';
	//Create our empty array to take in random numbers
	var numberArray = [];
	for (var i = 0; i < 5; i++){ 
	//Generate 5 random numbers between 1 and 100 and put them into array
	numberArray[i] =+ [Math.floor((Math.random()*100)+1)];
		}
	//console.log(numberArray);
	return numberArray;
	}//End of function

function sum(sumList){
	'use strict'
	//console.log(sumList);
	//We need an initial value to add our first array item to.
	var sumTotal = 0;
	//Run through the array and add all the values. Assign it to sumTotal variable
	for (var i = 0; i < sumList.length; i++){
		var sumTotal = sumTotal + sumList[i];
		//console.log(sumTotal);
		}
	//Print out the total into the message and send it off to setText
	var messageSum = 'The sum of all those numbers is ' + sumTotal + '.';
	return messageSum;
	}//End of function
	
function multiply(multiplyList){
	'use strict'
	//console.log(multiplyList);
	//We need an inital value to multiply list items. 
	//Don't use 0 as I realized after many fruitless minutes
	var multiplyTotal = 1;
	//Run through the array and multiply all the values together. Assign total to multiplyTotal
	for (var i = 0; i < multiplyList.length; i++){
	var multiplyTotal = multiplyTotal * multiplyList[i];
	//	console.log(multiplyTotal);
	}
	//Print out the total into message and send it off to setText
	var messageMultiply = 'When multiplying them all together we get a total of ' + multiplyTotal + '.'
	return messageMultiply;
	}//End of function
	
// Call this function when the page has loaded:
function init() {
    'use strict';
	//Run the numbers function to start us off
	var theList = numbers();
	var message = 'The random numbers that were generated were ' +  theList + '.';
	message += ' ' + sum(theList);
	message += ' ' + multiply(theList);
	
	setText('total', message);

} // End of init() function.
window.onload = init;