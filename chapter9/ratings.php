<!DOCTYPE html>
<html lang="EN">
  <head>
	<title>response to customer satisfaction survey</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
  </head>
  <body>


	<?php

$movieName = $_POST["movie_name"];
$movieRating = $_POST["rating"];

if ((isset($movieName) && (!empty($movieName))) &&
    (isset($movieRating) && (!empty($movieRating)))
) {
    ?>
			<p>
			Thank you for the feedack. The movie you reviewed was:
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