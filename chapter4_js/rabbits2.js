"use strict";

function matchRabbits() {

	var statement = "Rabbits are furry";
	var pattern = /bits/;
	var result = pattern.test(statement);
	if (result) {
		document.write("'bits' appears in statement <br />");
	} else {
		document.write("'bits' does not appear in statement <br />");
	}
}