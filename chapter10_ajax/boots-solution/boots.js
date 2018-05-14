"use strict";
window.onload = pageLoad;

function pageLoad() {
    $("load").onclick = updateBoot;
}

function updateBoot() {
    new Ajax.Request("boots.php", {
        method: "get",
        parameters: {},
        onSuccess: showPictures
    });
}

function showPictures(ajax) {
    $("boot").innerHTML = ajax.responseText;
}