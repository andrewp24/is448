window.onload = pageLoad;

function pageLoad() {
	$("showF").onclick = showInfo;
}

/*
function is invoked when a user clicks on the lookup button in the html page
this function creates an asynchronous Ajax request to retrieve the full-form of a
user-given abbreviation
*/
function showInfo() {
	//retrieve value from the 'term' textbox
	var startpoint = $("start").value;
	var endpoint = $("end").value;

	if ($("stops").checked)
		numstops = $("stops").value;
	else
		numstops = "1";
	//= document.getElementById("term").value;
	//create a new Ajax request with URL pointing to urban.php, and query-string-parameter-name is 'parameter1' and query-string-parameter-value being the value that
	//was retrieved from the 'term' textbox above
	//on request success, you want the displayResult function to be invoked


	//urban.php?parameter1=xml

	new Ajax.Request("showflights.php", {
		method: "post",
		parameters: {
			start: startpoint,
			end: endpoint,
			stops: numstops
		},
		onSuccess: displayResult,
		onFailure: displayFailureMessage
	});
}


/*
the response from the server, after the request is processed completely is
displayed as the value of the div-element with the id 'result'
*/
//note: ajax MUST be in the parameter list of this function always
function displayResult(ajax) {
	//document.getElemenyById("result").innerHTML = ajax.responseText;
	$("result").innerHTML =
		"<h2> Flight options </h2>" + ajax.responseText;
	//eXtensible Markup Language
	//document.getElementById("result").value = 1234;

}

function displayFailureMessage() {
	alert('ajax request failed');
}