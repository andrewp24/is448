<?php
	session_start();
	if(isset($_SESSION['username'])){
		$flag = 1;
		$message = "Welcome ".$_SESSION['username'];
	}
	else{
		$flag = 0;
		if (isset($_GET['username']))
		{
			$_SESSION['username'] = $_GET['username'];
		}
	}

?>

<!DOCTYPE html>
<html lang="EN">
<head>
<title>Personalize</title>
</head>
<body>

	<?php
		if($flag == 0){
	?>
		<form action="identify.php" method="GET">
		Enter your name: 
			<input type="text" name="username"/> <br/>
			<input type="submit" value="submit"/>
		</form>
	<?php
		}
		else{
			print($message);
		}
	?>
	
	

</body>