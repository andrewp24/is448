<?php
// Fill up array with names
//Program extracts parameter-value from query and looks to see if value is already in the array
//if value is already in array, program echoes 'taken' as the response
//if value does not exist in array, program echoes 'available' as the response
$arr[]="mike";
$arr[]="jane";
$arr[]="tom";
$arr[]="jill";

#retrieve value of parameter by name 'username' and store the value in the local variable $q
$q=$_GET["name"];

if (in_array($q,$arr)) 
{
	$message="taken";
}
else{
	$message = "available";
}
echo $message;
