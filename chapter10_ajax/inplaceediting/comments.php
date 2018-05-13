<html>
<head>
	<link rel="stylesheet" type="text/css" href="comments.css" />
</head>
<body>
<?php
$filevar = fopen("/afs/umbc.edu/users/s/a/sampath/pub/text-files/storecommentsonhouse.txt", "r") or die("Error - could not open file");
$file_content_string2 = file("/afs/umbc.edu/users/s/a/sampath/pub/text-files/storecommentsonhouse.txt");
print("<div id=\"info\">");
print("<h2>All the comments on my image</h2>");
print("<br />");
foreach ($file_content_string2 as $line) {
    if ($line != "\n") {
        print("<b>Comment:</b> $line <br />");
    }
}
print("</div>");
fclose($filevar);
?>
</body>
</html>