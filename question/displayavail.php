<?php
if (isset($_GET["dayandtime"])) {
    $selected = $_GET["dayandtime"];
} else {
    $selected = "";
}

if ($selected == "") {
    $returnvalue = "you must select a day and time";
}

$availability = array(
    "1-11" => "available",
    "1-13" => "busy",
    "2-11" => "available",
    "2-13" => "available",
    "3-11" => "busy",
    "3-13" => "busy",
    "4-11" => "in  meeting",
    "4-13" => "available",
    "5-11" => "available",
    "5-13" => "busy",
);

if (array_key_exists($selected, $availability)) {
    $returnvalue = $availability[$selected];
} else {
    $returnvalue = "not a valid day and time";
}

echo $returnvalue;
