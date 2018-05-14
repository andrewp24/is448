window.onload = pageLoad;

function pageLoad() {
    $("dayandtime").onchange = displayAvail;

}

function displayAvail() {
    var daytime = $("dayandtime").value;
    new Ajax.Request("displayavail.php", {
        method: "get",
        parameters: {
            dayandtime: daytime
        },
        onSuccess: displaySuccess
    });
}

function displaySuccess(ajax) {
    var info = ajax.responseText;
    $('show').innerHTML = "Availability for that time is: " + info;
}