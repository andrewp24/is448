window.onload = pageLoad;

function pageLoad() {
	$("state").onchange = showZip;
}

function showZip() {
	state = $("state").value;
	//alert($state);
	new Ajax.Request("get_zips.php", {
		method: "get",
		parameters: {
			type: state
		},
		onSuccess: ajaxSuccess,
		onFailure: ajaxFailure
	});
}
//function to execute when ajax request is successful
function ajaxSuccess(ajax) {

	//alert(ajax.responseText);

	var res = ajax.responseText.split("<br />");

	//document.getElementById("namearea").innerHTML = 
	var str;
	str = "<select id=\"zip\" name=\"zip\">";
	//<select id="zip" name="zip>
	//<option value="21044">21044</option>
	//<option value="21045">21045</option>
	for (var i = 0; i < res.length; i++) {
		str = str + "<option value=\"" + res[i] + "\">" + res[i] + "</option>";
	}
	str = str + "</select>";
	document.getElementById("ziparea").innerHTML = str;

}
//function to execute when ajax request is unsuccessful
function ajaxFailure() {
	alert("Ajax request failed");
}