<?php
header("Cache-Control: no-cache, must-revalidate");
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

$number = floor(rand(1, 10));

$imagename = "boot" . $number . ".jpg";

//echo $imagename;

echo "<img src=\"images/$imagename\" alt=\"boot\"/>";
