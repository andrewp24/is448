"use strict";
window.onload = pageLoad;

function pageLoad() {
  document.getElementById("textchange").onmouseover = changeColor;
  document.getElementById("textchange").onmouseout = changeColor;
}

function changeColor() {
  var dom = document.getElementById("textchange");
  //alert(event.type);
  if (event.type == "mouseover") {
    dom.style.color = 'red';
    dom.style.font = 'italic 16pt Times';
  } else {
    dom.style.color = 'blue';
    dom.style.font = 'normal 16pt Times';

  }

}