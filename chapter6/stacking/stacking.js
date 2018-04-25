"use strict";
window.onload = pageLoad;

function pageLoad() {
	document.getElementById("bart").onclick = toTop;
	document.getElementById("lisa").onclick = toTop;
	document.getElementById("homer").onclick = toTop;

}

function toTop() {

	var domCurr = findCurrentTopElement("img");
	var domNew = event.target.id;
	var newTopElement = document.getElementById(domNew);
	document.getElementById(domNew).style.zIndex = "10";
	document.getElementById(domCurr).style.zIndex = '0';


}

function findCurrentTopElement(elem) {
	var elements = document.getElementsByTagName(elem);
	var highest = 0;
	for (var i = 0; i < elements.length; i++) {
		//getComputedStyle
		// object returned from getComputedStyle is read-only and can be used to inspect the element's style
		var zindex = window.getComputedStyle(elements[i], null).getPropertyValue("z-index");

		if ((zindex >= highest) && (zindex != 'auto')) {
			highest = zindex;
			var id = elements[i].id;
		}
	}
	//alert(id);
	return id;
	//alert(highest);
}