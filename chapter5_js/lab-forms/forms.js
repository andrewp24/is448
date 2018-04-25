window.onload = pageLoad;

function pageLoad() {
    document.getElementById("submit_button").onclick = chkInput;
}

function chkInput() {

    //input value variables
    var f_name = document.getElementById("first_name").value;
    var l_name = document.getElementById("last_name").value;
    var initial = document.getElementById("initial").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;

    //test variables for name info
    var name_pattern = /^[a-z]+$/i;
    var resultF = name_pattern.test(f_name);
    var resultL = name_pattern.test(l_name);

    //test variables for middle initital
    var initial_pattern = /^[A-Z]$/;
    var resultI = initial_pattern.test(initial);

    //test variables for the address
    var address_pattern = /^\d+\s+[A-z]+\s+[A-z]+$/i;
    var resultA = address_pattern.test(address)

    //test variables for the city

    //These two if statements check the first name box.
    if (f_name == "") {
        alert("You did not enter a first name. Please enter one.")
        document.getElementById("first_name").focus();
        document.getElementById("first_name").select();
        return false;
    }
    if (resultF == false) {
        alert("The first name you entered does is not in the correct form. Please fix it.")
        document.getElementById("first_name").focus();
        document.getElementById("first_name").select();
        return false;
    }

    //These two if statements check the last name box.
    if (l_name == "") {
        alert("You did not enter a last name. Please enter one.")
        document.getElementById("last_name").focus();
        document.getElementById("last_name").select();
        return false;
    }
    if (resultL == false) {
        alert("The last name you entered does is not in the correct form. Please fix it.")
        document.getElementById("last_name").focus();
        document.getElementById("last_name").select();
        return false;
    }

    //These two if statements check the middle inital box.
    if (initial == "") {
        alert("You did not enter a middle initial. Please enter one.")
        document.getElementById("initial").focus();
        document.getElementById("initial").select();
        return false;
    }
    if (resultI == false) {
        alert("The middle initial you entered does is not in the correct form. Please fix it.")
        document.getElementById("initial").focus();
        document.getElementById("initial").select();
        return false;
    }

    //These two if statements check the address line
    if (address == "") {
        alert("You did not enter an address. Please enter one.")
        document.getElementById("address").focus();
        document.getElementById("address").select();
        return false;
    }
    if (resultA == false) {
        alert("The address you entered does is not in the correct form. Please fix it.")
        document.getElementById("address").focus();
        document.getElementById("address").select();
        return false;
    }
}