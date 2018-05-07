// validator.js
//   An example of input validation using the change and submit 
//   events

// The event handler function for the name text box
window.onload = pageLoad;

function pageLoad() {
    document.getElementById("userForm").onsubmit = checker;
}

function checker() {
    var userName = document.getElementById("userName").value; //no check for username
    var streetAdr = document.getElementById("streetAddress").value; //no check for street addr
    var city = document.getElementById("city").value; //no check for city
    var state = document.getElementById("state").value; //check for state
    var email = document.getElementById("email").value; //check for email
    var pNumber = document.getElementById("phoneNumber").value; //check for phone number

    //checking to see if a field is empty
    if (userName == null) {
        alert("You left the User Name field blank. Please fill it in.");
        document.getElementById("userName").select;
        return false;
    }
    if (streetAdr == "") {
        alert("You left the Street Address field blank. Please fill it in.");
        document.getElementById("streetAddress").select;
        return false;
    }
    if (city == "") {
        alert("You left the City field blank. Please fill it in.");
        document.getElementById("city").select;
        return false;
    }
    if (state == "") {
        alert("You left the State field blank. Please fill it in.");
        document.getElementById("state").select;
        return false;
    }
    if (email == "") {
        alert("You left the Email field blank. Please fill it in.");
        document.getElementById("email").select;
        return false;
    }
    if (pNumber == "") {
        alert("You left the Phone Number field blank. Please fill it in.");
        document.getElementById("phoneNumber").select;
        return false;
    }

    // Test the format of the input name. Expected format is one or more letters, followed by one or more spaces, followed by one or more letters
    //the i after the pattern indicates both upper and lowercase letters will be accepted.

    var statePattern = /^MD|NJ|NY|DC|PA$/;
    var stateResult = statePattern.test(state);

    var emailPattern = /^\w+@[a-zA-z]+\.com$/;
    var emailResult = emailPattern.test(email);

    var phonePattern = /^\d{3}-\d{3}-\d{4}$/;
    var phoneResult = phonePattern.test(pNumber);

    //testing state
    if (stateResult == false) {
        alert("The state you entered (" + state + ") is not in the correct form. The correct form is: MD or NJ or NY or DC or PA . Please go back and fix your state");
        document.getElementById("state").select();
        return false;
    }

    //testing email
    if (emailResult == false) {
        alert("The email you entered (" + email + ") is not in the correct form. You can only use .com domains. Please go back and fix your email");
        document.getElementById("email").select();
        return false;
    }

    //testing phone number
    if (phoneResult == false) {
        alert("The email you entered (" + pNumber + ") is not in the correct form. Must be in the 222-333-4444 format. Please go back and fix your phone number.");
        document.getElementById("phoneNumber").select();
        return false;
    }
}