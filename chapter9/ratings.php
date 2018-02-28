<!DOCTYPE html>
<html lang="EN">
  <head>
	<title>response to customer satisfaction survey</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
  </head>
  <body>


	<?php

$userName = $_POST["user_name"];
$movieName = $_POST["movie_name"];
$movieRating = $_POST["rating"];

if ((isset($movieName) && (!empty($movieName))) &&
    (isset($movieRating) && (!empty($movieRating))) &&
    (isset($userName) && (!empty($userName)))
) {
    if (preg_match("/^[a-zA-Z .]+$/", $userName)) {
        echo "Valid username. <br />";
    } else {
        echo "Invalid username <br />";
    }
    ?>
			<p>
			Thank you
			<strong> <?php echo $userName ?></strong>
			for the feedack. The movie you reviewed was:
			<strong><?php echo $movieName ?></strong>.
			You you gave it a
			<strong> "<?php echo $movieRating ?>" </strong>
			out of 5. <br />
			</p>



		<?php
} else {
    echo "<p>You haven't entered all information in the form.
			Please go back and re-enter</p>.";
}

?>


	</body>
</html>