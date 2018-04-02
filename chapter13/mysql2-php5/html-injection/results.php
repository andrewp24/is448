<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Example of HTML Injection</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
</head>
<body>
<?php
	if(isset($_GET['name']) && !empty($_GET['name']))
	{
		$username = $_GET['name'];
?>
		<p> Thank you, <?php echo $username ?>, for visiting our web site. We appreciate your business </p>
<?php
	}
	else{
?>

		<p>
			Please enter a user name. <br/> 
			Go <a href="form_username.html">back</a> and do so!

		</p>
<?php
	}
?>
</body>
</html>