<?php
session_start();
if (!isset($_SESSION["views"])) {
    $_SESSION["views"] = 1;
} else {
    $_SESSION["views"]++;
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>
<title>My Home Page</title>
</head>

<body>



<h1> My name is Sreedevi.</h1>
<p>
	Welcome to my page.
	I am on the faculty in the IS Department at UMBC.
</p>
<p>
	My hobbies include
</p>
<ul>
	<li>art </li>
	<li>watching sci-fi</li>
</ul>
<p>
This is your visit number <?php echo $_SESSION["views"] ?>
</p>

</body>
</html>