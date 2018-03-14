<?php
	session_start();
	$animals = array ("bee","llama","octopus");
	
	if(!isset($_SESSION["poweranimal"]) 
		||  !isset($_SESSION["views"])){

		$_SESSION["poweranimal"] = 
				$animals[rand(0,count($animals)-1)];
		$_SESSION["views"] = 1;
	}
	else{
		$_SESSION["views"]++;
	}
?>
<!DOCTYPE html>
<html lang="EN">
<head><title>Power animal</title></head>
<body>
<p>
Your power animal is <?php echo $_SESSION["poweranimal"] ?> <br />
This is your visit number <?php echo $_SESSION["views"] ?>
</p>
</body>