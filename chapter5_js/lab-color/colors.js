window.onload = pageLoad;

function pageLoad() {

    document.getElementById("color1").onclick = colorChoice;
    document.getElementById("color2").onclick = colorChoice;
    document.getElementById("color3").onclick = colorChoice;
    document.getElementById("color4").onclick = colorChoice;
    document.getElementById("color5").onclick = colorChoice;

}


// The event handler for a radio button collection
function colorChoice() {
    var selected;
    var name = document.getElementById("nameBox").value;
    var all = document.getElementsByName("colorButton");
    var i;

    for (i = 0; i < all.length; i++) {
        if (all[i].checked) {
            selected = all[i].value;
        }
    }
    //alert(selected);

    // Produce an alert message about the chosen color

    switch (selected) {
        case "red":
            alert(name + ", your favorite color is red");
            break;
        case "blue":
            alert(name + ", your favorite color is blue");
            break;
        case "green":
            alert(name + ", your favorite color is green");
            break;
        case "yellow":
            alert(name + ", your favorite color is yellow");
            break;
        case "orange":
            alert(name + ", your favorite color is orange");
            break;
        default:
            alert("Error in JavaScript function colorChoice");
            break;
    }

}