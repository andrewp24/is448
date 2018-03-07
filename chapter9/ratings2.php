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
    echo "Your score of $rating has been recorded. <br />";
    if ($bytes_written == false) {
        echo "write failed <br />";
    }
    ;

}

//now we will read the file.
$readFile = file("/afs/umbc.edu/users/a/n/andrewp2/pub/text-files/ratings.txt");
$i = 1;
$totalRating = 0;

foreach ($readFile as $line) {
    print "Line $i: $line <br />";
    $totalRating += $line;
    $i++;
}
$totalLines = $i - 1;
$avg = $totalRating / $totalLines;
echo "There are $totalLines total ratings given. The average rating is: $avg";

fclose($filevar2);
?>


	</body>
</html>