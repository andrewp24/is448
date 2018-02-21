<!DOCTYPE html>
<html lang="EN">
<head><title>Showing the various string functions in PHP</title></head>
<body>
<p>
<?php
/*
Illustrates use of Strings in PHP
 */

//a simple string
$txt = "Hello World";

$txt2 = 'Hello World';

echo "$txt <br/>";

//changing the value of $txt2
$txt2 = "1234";

$txt3 = $txt . ',' . $txt2;
echo "$txt3 <br />";

//using strlen function
$len = strlen($txt3);
echo "length of string is: $len <br />";

//using strcmp function
//strcmp returns 0 if the two strings are identical
$txt4 = "1234";
$num = strcmp($txt2, $txt4);
echo "Value returned by strcmp: $num";
echo "<br />";

//because strcmp returns 0 when the strings are identical
//you have to be careful when using it in an if-statement
if (!(strcmp($txt2, $txt4))) {
    echo "Strings are identical <br />";
} else {
    echo "Strings are not identical <br />";
}
?>
</p>
</body>
</html>
