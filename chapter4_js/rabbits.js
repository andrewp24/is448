"use strict";

function matchRabbits() {
	var str = "Rabbits are furry";
	var position = str.search(/bits/);
	if (position >= 0) {
		document.write("<p>");
		document.write("bits appears in position", position, "in the string \"", str, "\"<br />");
		document.write("</p>");
	} else {
		document.write("<p>");
		document.write("bits does not appear in ", str, "<br />");
		document.write("</p>");
	}
}