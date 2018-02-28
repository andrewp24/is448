<?php
$myfile = fopen("/afs/umbc.edu/users/a/n/andrewp2/pub/text-files/test.txt", "w") or die("Unable to open file!");

$favSong = $_POST["fav_song"];
$comp = $_POST["composer"];
$musicianName = $_POST["musician_name"];
//write to file
$out_data = "$favSong, $comp, $musicianName";
$bytes_written = fwrite($myfile, $out_data);

if ($bytes_written == false) {
    echo ">write failed <br />";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>Homework 2: submit.php</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>

<body>
    <div class="intro">
        <h1>Thanks for submitting your answers.</h1>
        <p>They have been recorded.</p>

        <p>
            Favorite song:
            <strong> <?php echo $favSong ?></strong>
        </p>
        <p>
            Composer:
            <strong> <?php echo $comp ?></strong>
        </p>
        <p>
            Musician Name:
            <strong> <?php echo $musicianName ?></strong>
        </p>
	<p>
        <a href="music.html">Click here to go back to the main page.</a>
    </p>
    </div>
</body>

</html>
