<?php
$myfile = fopen("/afs/umbc.edu/users/a/n/andrewp2/pub/text-files/test.txt", "a") or die("Unable to open file!");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>Homework 2: display_results.php</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>

<body>
    <div class="intro">
        <h1>Here are the results for popular songs, composers, and artists.</h1>

        <p> Song, Composer, Musician/Artist <br /> <br />
<?php
$readFile = file("/afs/umbc.edu/users/a/n/andrewp2/pub/text-files/test.txt");
$i = 1;
foreach ($readFile as $line) {
    print("<strong>Submission #$i: $line</strong> <br />");
    $i++;
}
fclose($myfile);

?>
        </p>

	    <p>
            <a href="music.html">Click here to go back to the main page.</a>
        </p>
    </div>
</body>

</html>
