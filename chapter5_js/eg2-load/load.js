window.onload = pageLoad;

function pageLoad() {
	load_greeting();
	var quote_button = document.getElementById("quote_button");
	quote_button.onclick = display_quote;
	var mood = document.getElementById("change");
	mood.onclick = changeImage;

}

//the onload event handler
function load_greeting() {
	alert("You are visiting my home page. WELCOME!");
	var greeting_message = "You are visiting my home page. WELCOME!";
	document.getElementById("greeting_box").value = greeting_message;
}

//the onclick event handler
function display_quote() {
	var quote_of_the_day = "A penny saved is a penny earned";
	alert(quote_of_the_day);
}

function changeImage() {
	alert("here");
	var mood = document.getElementById("mood").src;
	if (mood.includes("happy")) {
		document.getElementById("mood").src = "sad.png";
	} else {
		document.getElementById("mood").src = "happy.jpg";
	}
}