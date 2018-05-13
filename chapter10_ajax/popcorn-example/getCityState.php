<?php
// getCityState.php
//  Gets the form value from the "zip" widget, looks up the
//  city and state for that zip code, and prints it for the
//  form

//array that holds some city and state values
$cityState = array(
    "21401" => "Annapolis,MD",
    "21402" => "Annapolis,MD",
    "21044" => "Columbia,MD",
    "21045" => "Columbia,MD",
    "21221" => "Baltimore,MD",
    "21222" => "Baltimore,MD",
);

//retrieve value of get parameter
$zip = $_GET["zip"];

//check if zip value exists in array above, and retrieve the city, state values corresponding to the matching zip value
if (array_key_exists($zip, $cityState)) {
    echo $cityState[$zip];
} else
//if doesn't exist, just give an error message
{
    echo "no matching entry, no matching entry";
}
