var finalx = 1000;

window.onload = pageLoad;

function pageLoad() {
    var bigTextButton = document.getElementById("bigTextButton");
    var checkbox = document.getElementById("blingCheckbox");

    bigTextButton.onclick = enlarger;
    checkbox.onchange = blinger;
    setInterval("afterInterval()", 400);
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

function afterInterval() {
    dom = document.getElementById('pic');

    /* Get the current position of the text */
    
    //alert(x);
    /* 
	x is a string value like 100px, we need to strip the 'px' out first 
	and get the numeric value of the left and top values.
	To do this, convert the string values of left and top to 
    numbers by stripping off the units of 'px'*/

    //x = parseInt(x);

    //alert(x)
    //Another way to do this stripping is to use the match function
    //x = x.match(/\d+/);
    //y = y.match(/\d+/);

    //if text is not in final position, then increment x by 1 and increment y by 1
    //thus moving it closer to the finalx and finaly positions	
    if (x != finalx) {
        if (x < finalx) x++;
        /* Put the units back on the coordinates before
           assigning them to the properties to cause the 
           move */
        dom.style.left = x + "px";
    }
}