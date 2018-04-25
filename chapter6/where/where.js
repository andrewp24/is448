window.onload = pageLoad;

function pageLoad() {
  document.body.onclick = findIt;
}


// where.js
//   Show the coordinates of the mouse cursor position 
//   in an image and anywhere on the screen when the mouse
//   is clicked


// The event handler function to get and display the 
//  coordinates of the cursor, both in an element and 
//  on the screen
// the findIt function must read in an argument by the name
// 'event' to work

function findIt(event) {


  eventObject = event;

  //if browser is IE, the event object must be referenced as window.event
  if (navigator.appName == "Microsoft Internet Explorer") {
    eventObject = window.event;

  }

  document.getElementById("xcoor1").value = eventObject.clientX;
  document.getElementById("ycoor1").value = eventObject.clientY;
  document.getElementById("xcoor2").value = eventObject.screenX;
  document.getElementById("ycoor2").value = eventObject.screenY;
}