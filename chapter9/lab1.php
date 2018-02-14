<!DOCTYPE html>
<html lang="EN">
<head>
<title>Background Colors change based on the day of the week</title>
</head>
<body bgcolor= 
    <?php 
    $dayofweek = date("l");

    if($dayofweek == "Monday"){
        echo("red");
       }
    elseif($dayofweek == "Tuesday"){
        echo("orange");
    }
    elseif($dayofweek == "Wednesday"){
        echo("yellow");
    }
    elseif($dayofweek == "Thursday"){
        echo("green");
    }
    elseif($dayofweek == "Friday"){
        echo("blue");
    }
    elseif($dayofweek == "Saturday"){
        echo("navy");
    }
    elseif($dayofweek == "Sunday"){
        echo("purple");
    }

?>
>
<h1>Welcome to my home page</h1>
<p>
<?php
    print("Today is $dayofweek.");

?>
</p>
<p>
    Monday will be red.
    <br />Tuesday will be orange.
    <br />Wednesday will be yellow.
    <br />Thursday will be green.
    <br />Friday will be blue.
    <br />Saturday will be navy.
    <br />Sunday will be purple.
</body>
</html>
