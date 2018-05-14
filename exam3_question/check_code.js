window.onload = pageLoad;

function pageLoad() {
    $("password").onchange = checkPassword;
    usernameText = $("usernameLabel");
    passwordText = $("passwordLabel");
    usernameText.onmouseover = mouseOver;
    usernameText.onmouseout = mouseOut;
    passwordText.onmouseover = mouseOverpw;
    passwordText.onmouseout = mouseOutpw;
}

function checkPassword() {
    var password = $("password").value;
    new Ajax.Request("strongornot.php", {
        method: "get",
        parameters: {
            pass: password
        },
        onSuccess: displayStrength
    });
}

function displayStrength(ajax) {
    var r = ajax.responseText;
    $('comment').innerHTML = r;
}

function mouseOver() {
    usernameText.style.color = "green"
}

function mouseOut() {
    usernameText.style.color = "black"
}

function mouseOverpw() {
    passwordText.style.color = "green"
}

function mouseOutpw() {
    passwordText.style.color = "black"
}