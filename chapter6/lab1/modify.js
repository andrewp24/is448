window.onload = pageLoad;

function pageLoad() {
    var bigTextButton = document.getElementById("bigTextButton");
    bigTextButton.onclick = enlarger;
}

function enlarger() {
    alert("button was clicked");
    document.getElementById("placeForText").style.fontSize = "24pt";
}