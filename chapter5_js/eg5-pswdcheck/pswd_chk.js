// pswd_chk.js
//   An example of input password checking, using the submit 
//   event

// The event handler function for password checking

window.onload = pageLoad;

function pageLoad() {
  document.getElementById("second").onblur = chkPasswords;
  document.getElementById("submitbutton").onclick = chkPasswords;
}

function chkPasswords() {
  var init_value = document.getElementById("initial").value;
  var sec_value = document.getElementById("second").value;
  if (init_value == "") {
    alert("You did not enter a password. Please enter one now");
    document.getElementById("initial").focus();
    return false;
  }
  if (init_value != sec_value) {
    alert("The two passwords you entered are not the same. Please re-enter both now");
    document.getElementById("initial").focus();
    document.getElementById("initial").select();
    return false;
  } else
    return true;
}