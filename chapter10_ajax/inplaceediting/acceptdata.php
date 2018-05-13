<?php
//With Ajax.InPlaceEditor,
//the server side component gets the new value always
//with the parameter name ‘value’ (POST method)
//you can specify a different parameter name as described here
//http://madrobby.github.io/scriptaculous/ajax-inplaceeditor/

$data = $_POST["value"];
//opening a file for writing
$filevar2 = fopen("/afs/umbc.edu/users/s/a/sampath/pub/text-files/storecommentsonhouse.txt", "a") or die("Error - could not open file");
if (!(file_exists("/afs/umbc.edu/users/s/a/sampath/pub/text-files/storecommentsonhouse.txt"))) {
    print("file does not exist");
}

fwrite($filevar2, "$data\n");
fclose($filevar2);
