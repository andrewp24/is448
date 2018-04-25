"use strict";

window.onload = pageLoad;

function pageLoad() {
  document.getElementById("submitB").onclick = flipImage;
}

// showHide.js
//   Illustrates visibility control of elements

// The event handler function to toggle the visibility 
//    of the images of Saturn 

function flipImage() {
  var img_element = document.getElementById("saturn");

  // Flip the visibility adjective to whatever it is not now 

  if (img_element.style.visibility == "visible")
    img_element.style.visibility = "hidden";
  else
    img_element.style.visibility = "visible";
}