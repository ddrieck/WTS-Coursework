// Start of script with only one document.write
// Declare emtpy variable
var tableHTML = "";

// Add beginning of table to the tableHTML variable
tableHTML += "<table border=1>";

// First for loop that creates our rows
for (i=1; i<=10; i++){
	tableHTML += "<tr>";
	
// Second for loop that generates the column values
	for (j=1; j<=10; j++){

		// This if/else statements looks for perfect square. If it finds it, it bolds.
		if ((i/j) == 1){
			tableHTML += ("<td><strong>" + (i*j) + "</strong></td>");
			} else {
			// Otherwise return normal format
			tableHTML += ("<td>" + (i*j) + "</td>");
		};
	// Finish row from first for loop
	};
	tableHTML += "</tr>";
};
// Close off table
tableHTML += "</table>";

//Take all the components from above that have been added to tableHTML and write them to the page.
document.write(tableHTML);
