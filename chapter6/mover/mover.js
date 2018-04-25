"use strict";

window.onload = pageLoad;

function pageLoad() {
  document.getElementById("submitB").onclick = moveIt;
}

// mover.js
//   Illustrates moving an element within a document

// The event handler function to move an element

function moveIt() {

  var newTop = document.getElementById('topCoord').value;
  var newLeft = document.getElementById('leftCoord').value;

  //access the style property of the image with the id of nebula
  var img_element = document.getElementById("nebula");

  // Change the top and left properties to perform the move
  //  Note the addition of units to the input values 
  img_element.style.top = newTop + "px";
  img_element.style.left = newLeft + "px";
}