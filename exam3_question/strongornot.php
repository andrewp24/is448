<?php

//strongornot.php
//takes a password and
//returns 'strong' if password has
//at least one upper case letter, at least one lower case letter,
//at least one number and is at least 6 characters long
//else returns 'weak'

$password = $_GET["pass"];

//source: stackoverflow
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);

//Uncomment the line below if you want to see if the password is coming correctly into the PHP program
//echo "$password <br />";

if (!$uppercase || !$lowercase || !$number || (strlen($password) < 6)) {
    echo "weak password";
} else {
    echo "strong password";
}
