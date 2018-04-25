window.onload=pageLoad;

function pageLoad(){
	document.body.onmousedown=displayIt;
	document.body.onmouseup=hideIt;
}

// anywhere.js
//   Display a message when the mouse button is pressed,
//   no matter where it is on the screen 

// The event handler function to display the message

function displayIt(event) {
  var eventObject = event;
  var dom = document.getElementById("message");
  dom.style.left = (eventObject.clientX - 130) + "px";
  dom.style.top = (eventObject.clientY - 25) + "px";
  dom.style.visibility = "visible";
}sw

// ****************************************************
// The event handler function to hide the message

function hideIt() {
  document.getElementById("message").style.visibility = "hidden";
}
