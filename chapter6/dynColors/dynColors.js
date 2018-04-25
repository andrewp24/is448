window.onload = pageLoad;

function pageLoad() {
    document.getElementById("submitB").onclick = setColor;
}


// dynColors.js
//   Illustrates dynamic foreground and background colors

// The event handler function to dynamically set the 
//  color of background or foreground 

function setColor() {
    var bColor = document.getElementById("background").value;
    var fColor = document.getElementById("foreground").value;

    document.body.style.backgroundColor = bColor;
    document.body.style.color = fColor;
    return false;
}