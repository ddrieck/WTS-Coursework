

function init() {

	document.getElementById("btnChangeText").onclick = changeText;

}
window.onload = init;



// this is a function to swapNodes, which we'll use later.
// there is a .swapNode() method available to IE, but this
// other method will work in non-IE browsers.  You don't need to
// completely grasp what's going on in this function, just
// note how it is called later in the page when we want to 
// swap two elements:

function swapNodes(item1,item2) {


	// We need a clone of the node we want to swap
		var itemtmp = item1.cloneNode(1);

	// We also need the parentNodes of the items we are going to swap.
		var parent = item1.parentNode;
		var parent2 = item2.parentNode; 

	// First replace the second node with the copy of the first node
	// which returns a reference to the new node
		item2 = parent2.replaceChild(itemtmp,item2);

	//Then we need to replace the first node with the new second node
		parent.replaceChild(item2,item1);

	// And finally replace the first item with its copy so that we
	// still use the old nodes but in the new order.
		parent2.replaceChild(item1,itemtmp);

	// Free up some memory, we don't want unused nodes in our document.
		itemtmp = null;
}


function insertAfter(newElement, targetElement) {

	// Helper function to insert a node AFTER another node

	var parent = targetElement.parentNode;
	if (parent.lastChild == targetElement) {
		parent.appendChild(newElement);
	} else {
		parent.insertBefore(newElement,targetElement.nextSibling);
	}
}


function changeText() {

	// ****** INSERTING A PARAGRAPH BEFORE A CERTAIN ID *****
	//-create a new text node containing "Node "c" here is going to be inserted before "d" so don't be afraid when it magically appears.";
		newText=document.createTextNode("Node 'c' here is going to be inserted before 'd' so don't be afraid when it magically appears.");

	//-create a new empty paragraph element
		newParag=document.createElement("p");

	//-add the text to the paragraph
		newParag.appendChild(newText);

	//-find the parent of the element ID we want to insert before
		parentObj=document.getElementById("b").parentNode;

	//-insert our new paragraph before the element ID in question
		parentObj.insertBefore(newParag,document.getElementById("b"));

	// *****************************************************************
	
	//-create a new text node containing "Let's swamp the last line and the first.";
		newText=document.createTextNode("Let's swamp the last line and the first.");

	//-create a new empty paragraph element
		newParag=document.createElement("p");

	//-add the text to the paragraph
		newParag.appendChild(newText);

	//-find the parent of the element ID we want to insert before
		parentObj=document.getElementById("e").parentNode;

	//-insert our new paragraph before the element ID in question
		parentObj.insertBefore(newParag,document.getElementById("e"));

	// *****************************************************************


 
 	// ~~~~~~  EXAMPLE: INSERTING A PARAGRAPH *AFTER* A CERTAIN ID  ~~

	//-same as above, create the new paragraph to insert
		newText=document.createTextNode("And I'm going insert this one after 'c'. Getting twisty now.");
		newParag=document.createElement("p");
		newParag.appendChild(newText);

	//-DOM doesn't provide an .insertAfter method, so we have to use our
	// helper function:  insertAfter(what-to-insert, where-to-insert)

	
		insertAfter(newParag, document.getElementById("c"));

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

	//-same as above, create the new paragraph to insert
		newText=document.createTextNode("And this is the actual last line, but it's going to magically appear. Oh my.");
		newParag=document.createElement("p");
		newParag.appendChild(newText);

	//-DOM doesn't provide an .insertAfter method, so we have to use our
	// helper function:  insertAfter(what-to-insert, where-to-insert)


		insertAfter(newParag, document.getElementById("f"));

	// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



	// #####  EXAMPLE:  SWAPPING TWO ELEMENTS BY ID  ####################


        // use the swapNodes() function we defined above
         swapNodes(document.getElementById("a"),document.getElementById("e"));
		 swapNodes(document.getElementById("d"),document.getElementById("f"));

	
	// ##################################################################

	
	// ****** REMOVING AN ELEMENT FROM A DOCUMENT ********
	// -removes the node with ID attribute "b"

	// establish the node to remove and assign it to "nodeToDelete"
		nodeToDelete = document.getElementById("b");

        // find the parent node of the node we want to delete, assign to "parentObj"
		parentObj = nodeToDelete.parentNode;

	// now remove the child
		parentObj.removeChild(nodeToDelete);

	
	// -removes the node with ID attribute "c"

	// establish the node to remove and assign it to "nodeToDelete"
		nodeToDelete = document.getElementById("c");

        // find the parent node of the node we want to delete, assign to "parentObj"
		parentObj = nodeToDelete.parentNode;

	// now remove the child
		parentObj.removeChild(nodeToDelete);

	// *************************************************************
	
	// now remove the button so we can't manipulate twice
	document.getElementById("buttonCode").innerHTML="<hr /><strong style='color:green'>Done. Refresh Page to Try Again.</strong>"

}
