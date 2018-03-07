<!DOCTYPE html>
<html lang="EN">
  <head>
	<title>response to customer satisfaction survey</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
  </head>
  <body>
	<?php
$filevar2 = fopen("/afs/umbc.edu/users/a/n/andrewp2/pub/text-files/ratings.txt", "a") or die("Unable to open file!");
$rating = $_POST["rating"];
$out_data = "$rating \n";

flock($filevar2, LOCK_EX);
if ((isset($rating) && (!empty($rating)))
) {
    $bytes_written = fwrite($filevar2, $out_data);
    flock($filevar2, LOCK_UN);

    if ($bytes_written == false) {
        echo ">write failed <br />";
    }
    ;

}

fclose($filevar2);
?>


	</body>
</html>