<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Array access!</title>
</head>
<body>
	<p>
	<?php

$new = array(2, 3, 4, 5);

foreach ($new as $number) {
    print("$number <br />");
}

$lows = array("Mon" => 45, "Tue" => 35, "Wed" => 56);
foreach ($lows as $day => $temp) {
    print("The min. temperature for $day is $temp <br />");
}

?>
	</p>
<body>
</html>
