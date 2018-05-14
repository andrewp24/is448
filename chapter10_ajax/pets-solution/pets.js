"use strict";
window.onload = pageLoad;

function pageLoad() {
    $("kitties").onclick = updatePictures;
    $("puppies").onclick = updatePictures;
}

function updatePictures() {
    var animal = "";
    if ($("kitties").checked) {
        animal = "kitties";
    } else {
        animal = "puppies";
    }
    new Ajax.Request("getPictures.php", {
        method: "get",
        parameters: {
            animaltype: animal
        },
        onSuccess: showPictures
    });
}

function showPictures(ajax) {
    $("pictures").innerHTML = ajax.responseText;
}