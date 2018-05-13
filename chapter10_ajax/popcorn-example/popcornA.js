// popcornA.js


window.onload = pageLoad;

function pageLoad() {
  $("zip").onblur = getPlace;
}

//  Ajax JavaScript code for the popcornA.html document
// function getPlace
//  parameter: zip
function getPlace() {

  var valueOfZipCode = $("zip").value;
  //create a new Ajax request to the URL getCityState.php
  //query-string-parameter-name is zip
  //query-string-parameter-value is the parameter that was sent to this function, i.e., the zip code value that the user entered
  //on the successful processing of the Ajax request, we want the displayCityState function to be invoked
  new Ajax.Request("getCityState.php", {
    method: "get",
    parameters: {
      zip: valueOfZipCode
    },
    onSuccess: displayCityState
  });
}

//getCityState.php?zip=21044

//displayCityState is the function that is to be executed when the Ajax request is successful
//IMPORTANT: The variable ajax MUST be in the parameter list of this function
//this function, retrieves the response sent by the PHP program above,  splits the response at the  comma-space character
//and populates the values  of the city and state textboxes with the split values
function displayCityState(ajax) {
  var result = ajax.responseText;
  //Annapolis, MD
  var place = result.split(',');


  $("city").value = place[0];
  $("state").value = place[1];
}

/********************************************************/
// This is how the code is written when Prototype is not used
/********************************************************/
//  action: create the XMLHttpRequest object, register the
//          handler for onreadystatechange, prepare to send
//          the request (with open), and send the request,
//          along with the zip code, to the server
//  includes: the anonymous handler for onreadystatechange, 
//            which is the receiver function, which gets the 
//            response text, splits it into city and state,
//            and puts them in the document


/* function getPlace(zip) {
  var ajax = new XMLHttpRequest();

// Register the embedded handler function
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      var result = ajax.responseText;
      var place = result.split(', ');
      document.getElementById("city").value = place[0];
      document.getElementById("state").value = place[1];
    }
  }
  ajax.open("GET", "getCityState.php?zip=" + zip);
  ajax.send(null);
}
 */