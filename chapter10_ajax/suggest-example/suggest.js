window.onload = pageLoad;

function pageLoad() {
  $("txt1").onkeyup = showHint;
}
//Javascript function that takes a string that user is entering
//in suggest.html and makes an asynchronous request to getHint.pho
//to find matching substrings. 
//Uses Prototype's Ajax model
function showHint() {
  var inputString = $("txt1").value;
  if (inputString.length == 0) {
    $("txtHint").innerHTML = "";
    return;
  }

  new Ajax.Request("getHint.php", {
    method: "get",
    parameters: {
      uname: inputString
    },
    onSuccess: ajaxSuccess
  });
}
//function to execute when ajax request is successful
function ajaxSuccess(ajax) {
  $("txtHint").value = ajax.responseText;
}
//function to execute when ajax request is unsuccessful
function ajaxFailure() {
  alert("Ajax request failed");
}
/* //the code below is how the code looks without Prototype
  ajax=new XMLHttpRequest();
  if (ajax==null)
  {
     alert ("Your browser does not support AJAX!");
     return;
  } 
  var url="getHint.php";
  url=url+"?q="+str;
  url=url+"&sid="+Math.random();
  ajax.onreadystatechange=function(){
	if(ajax.readyState == 4){ //4 means request complete
		document.getElementById("txtHint").value = ajax.responseText;
	}
  
  }
  ajax.open("GET",url,true);
  ajax.send(null);
  }
  */