// radio_click.js
//   An example of the use of the click event with radio buttons,
//   registering the event handler by assignment to the button
//   attributes

window.onload = pageLoad;
function pageLoad() {

  document.getElementById("plane").onclick=planeChoice;
  document.getElementById("plane2").onclick=planeChoice;
  document.getElementById("plane3").onclick=planeChoice;
  document.getElementById("plane4").onclick=planeChoice;

}


// The event handler for a radio button collection
function planeChoice () {    
    var selected;

    var all = document.getElementsByName("planeButton");
    var i;
    for (i = 0; i < all.length; i++) {
        if (all[i].checked) {
            selected = all[i].value;
        }
    }
    //alert(selected);

// Produce an alert message about the chosen airplane

  switch (selected) {
    case "152": 
      alert("A small two-place airplane for flight training");
      break;
    case "172": 
      alert("The smaller of two four-place airplanes");
      break; 
    case "182":
      alert("The larger of two four-place airplanes");
      break;    
    case "210":
      alert("A six-place high-performance airplane");
      break; 
    default:
      alert("Error in JavaScript function planeChoice");
      break;
  }
  
}

