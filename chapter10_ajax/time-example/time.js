//Author: Sreedevi Sampath

window.onload = pageLoad;

function pageLoad() {
	$("username").onkeyup = showTime;
}

//Javascript function displays current time
//function invoked by onkeyup event in time.html
function showTime() {

	//create a new Ajax request to the displayTime.php URL, and no parameters (because parameters are not required by the displayTime.php program)
	new Ajax.Request("displayTime.php", {
		method: "get",
		onSuccess: displayResult
	});
}

//the displayResult function is executed when the Ajax request is successful
//ajax must be sent as parameter to this function
function displayResult(ajax) {
	$("time").innerHTML = ajax.responseText;
}