<!DOCTYPE html>
<html lang="EN">
<head><title>Showing switch statement in PHP</title></head>
<body>
<p>
<?php

//can switch on integer or double values
$x = 2;

switch ($x) {
    case 1:
        echo "Number 1";
        break;
    case 2:
        echo "Number 2";
        echo "today is a holiday";
        break;
    case 3:
        echo "Number 3";
        break;
    default:
        echo "No number between 1 and 3";
}

echo "<br />";
//can switch of string values
$y = "john";

switch ($y) {
    case "john":
        echo "Welcome $y";
        break;
    case "henry":
        echo "Welcome henry";
        break;
    default:
        echo "Please enter a valid username";
        break;
}
?>
</p>
</body>
</html>
