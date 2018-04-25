window.onload = pageLoad;

function pageLoad() {
    var bigTextButton = document.getElementById("bigTextButton");
    var checkbox = document.getElementById("blingCheckbox");

    bigTextButton.onclick = enlarger;
    checkbox.onchange = blinger;
}

function enlarger() {
    document.getElementById("placeForText").style.fontSize = "24pt";
}

function blinger() {
    textAreaElem = document.getElementById("placeForText")
    checkbox = document.getElementById("blingCheckbox");

    if (checkbox.checked) {
        textAreaElem.style.color = "green";
        textAreaElem.style.textDecoration = "underline";
        textAreaElem.style.fontWeight = "bold";
    } else {
        textAreaElem.style.color = "black";
        textAreaElem.style.textDecoration = "none";
        textAreaElem.style.fontWeight = "normal";
    }


}