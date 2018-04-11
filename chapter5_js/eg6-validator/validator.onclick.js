// validator.js
//   An example of input validation using the change and submit 
//   events
     
// The event handler function for the name text box

window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submitButton").onclick=chkNameAndPhone;
}

function chkNameAndPhone() {
  var myName = document.getElementById("custName").value;

	// Test the format of the input name. Expected format is one or more letters, followed by one or more spaces, followed by one or more letters
	//the i after the pattern indicates both upper and lowercase letters will be accepted.

	var pattern1 = /^[a-z]+\s+[a-z]+$/i;
	var result = pattern1.test(myName);
	
	//the variable result will have the value true if the pattern is found in the string myName, and will return false if the pattern is not found in myName
	//therefore, we need to display an error message if result is false
	
	if (result==false) 
	{

		alert("The name you entered (" + myName + ") is not in the correct form. The correct form is: last-name first-name. Please go back and fix your name");
	document.getElementById("custName").select();
    
		return false;
	}


	var myPhone = document.getElementById("phone").value;

	// Test the format of the input phone number

	var pattern2 = /^\(\d{3}\)\d{3}-\d{4}$/;
	var result2 = pattern2.test(myPhone);

	//the variable result2 will have the value true if the pattern is found in the string myPhone, and will return false if the pattern is not found in myPhone
	//therefore, we need to display an error message if result2 is false

	
	if (result2 == false) {
		alert("The phone number you entered (" + myPhone + ") is not in the correct form. The correct form is: (ddd)ddd-dddd. Please go back and fix your phone number");
		document.getElementById("phone").select();
		return false;
	} 
	else{
		return true;
	}
  
}
