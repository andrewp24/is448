<?php

/*The server-side will receive the typed string as a parameter with the same name as the name of the text field element of the autocompletion (its name attribute). You can override it by setting the option paramName.
 */
//PHP using the paramName set up in JavaScript when creating an Ajax request
$dataentered = $_POST["bandsearchquery"];

//PHP using the name attribute set in the form for the text box (use this if paramName option is not set in JS).
//$dataentered = $_POST["bands"];

$a[] = "ABBA";
$a[] = "AC/DC";
$a[] = "Blah";
$a[] = "Blah2";
$a[] = "Cat2";
$a[] = "Cow";
//lookup all hints from array if length of q>0
if (strlen($dataentered) > 0) {
    $hint = "";

    for ($i = 0; $i < count($a); $i++) {
        if (strtolower($dataentered) == strtolower(substr($a[$i], 0, strlen($dataentered)))) {
            if ($hint == "") {
                $hint = $a[$i];

            } else {
                $hint = $hint . " , " . $a[$i];
            }
        }
    }

    $choices = explode(",", $hint);
    echo "<ul>";
    foreach ($choices as $option) {
        echo "<li> $option </li>";
    }
    echo "</ul>";
}
