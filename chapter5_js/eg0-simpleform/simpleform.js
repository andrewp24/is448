
window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submitB").onclick=showvalues;
}

function showvalues(){
	var username_entered = document.getElementById("username").value;
	var password_entered = document.getElementById("password").value;
	
	alert("You entered " + username_entered + " and " + password_entered);
}