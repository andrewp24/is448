window.onload = pageLoad;

function pageLoad() {
	var okButton = document.getElementById("ok");
	okButton.onclick = actionOnClick;
}

function actionOnClick() {
	alert("button was clicked");
}

/*

function pageLoad(){
	var changeButton = document.getElementById("change");
	changeButton.onclick = changeImage;
}

function changeImage(){
	
	
	var mood = document.getElementById("mood").src;
	if (mood.includes("happy")){
		document.getElementById("mood").src="sad.png";
	}
	else{
		document.getElementById("mood").src="happy.jpg";	
	}
	

}
*/