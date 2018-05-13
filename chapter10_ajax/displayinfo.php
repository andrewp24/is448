<html>
<head>
<title>Return zip codes given a city name</title>
<link rel="stylesheet" href="form_proc.css">
</head>
<body>
Your address is
<?php

$street = $_POST["street"];
$state = $_POST["state"];
$zip = $_POST["zip"];

echo "$street <br /> $state, $zip <br />";
?>
</body>
</html>