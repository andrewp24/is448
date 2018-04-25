"use strict";
window.onload = pageLoad;

function pageLoad() {
	document.getElementById("name").onmouseover = messages;
	document.getElementById("name").onmouseout = messages;
	document.getElementById("email").onmouseover = messages;
	document.getElementById("email").onmouseout = messages;
	document.getElementById("userid").onmouseover = messages;
	document.getElementById("userid").onmouseout = messages;
	document.getElementById("password").onmouseover = messages;
	document.getElementById("password").onmouseout = messages;
}

// dynValue.js
//   Illustrates dynamic values
function messages() {

	var adviceNumber;
	if ((event.type == "mouseover")) {
		switch (event.target.id) {
			case "name":
				adviceNumber = 0;
				break;
			case "email":
				adviceNumber = 1;
				break;
			case "userid":
				adviceNumber = 2;
				break;
			case "password":
				adviceNumber = 3;
				break;
		}
	} else if (event.type == "mouseout") {
		adviceNumber = 4;
	}

	var helpers = [
		"Your name must be in the form: first name, middle initial., last name",
		"Your email address must have the form: user@domain",
		"Your user ID must have at least six characters",
		"Your password must have at least six characters and it must include one digit",
		"This box provides advice on filling out the form on this page. Put the mouse cursor over any \
 input field to get advice"
	]

	// *********************************************************** 
	// The event handler function to change the value of the 
	//  textarea

	document.getElementById("adviceBox").innerHTML = helpers[adviceNumber];

}