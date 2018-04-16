<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<!-- dynamic.html 
 -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title>Registering for the event</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css">

  </head>
<body>
<?php

$name = $_POST["userN"];
$word = $_POST["word"];

echo "Thank you $name for your question. <br />";
echo "The definition of $word is <br/>";

//todo: add code to connect to database server

//todo: add code to select the database

//todo: write and execute the query to select from table dict

//todo: display definition retrieved from database table to user

//todo: write and execute query to insert the user's name into the table visitedusers
?>
</body>
</html>