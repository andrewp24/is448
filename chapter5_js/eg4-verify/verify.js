window.onload = pageLoad;

function pageLoad() {
  document.getElementById("verify_button").onclick = display_verify_message;
}

//the onclick event handler
function display_verify_message() {
  var firstName = document.getElementById("firstName").value;
  var lastName = document.getElementById("lastName").value;
  var houseNum = document.getElementById("houseNumber").value;
  var streetName = document.getElementById("streetName").value;
  var cityName = document.getElementById("cityName").value;
  var stateName = document.getElementById("stateName").value;


  //document.write(firstName);
  //confirm("Is this ok");

  var reply = confirm("This is the info you entered." +
    "\nFirst name: " + firstName +
    " \n Last name: " + lastName +
    "\nApt/House Number: " + houseNum +
    "\nStreet name: " + streetName +
    "\nCity name: " + cityName +
    "\nState: " + stateName +
    "\n\nIs this correct");

  if (reply == true) {
    alert("Ok.. Thank you!");
  } else {
    document.info.reset();
  }



}