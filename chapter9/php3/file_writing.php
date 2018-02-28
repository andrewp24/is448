<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Showing several write functions and flock</title>
</head>
<body>
<?php

//opening a file for writing
$filevar2 = fopen("/afs/umbc.edu/users/s/a/sampath/pub/text-files/testdata_write.txt", "w") or die ("Error - could not open file");
if(file_exists("/afs/umbc.edu/users/s/a/sampath/pub/text-files/testdata_write.txt")) 
	print("file exists"); 
else 
	print ("file does not exist");
?>

<h3>Using the flock and fwrite functions </h3>

<?php

	//lock file before writing
	if(flock($filevar2,LOCK_EX))
	{
		print("<p>Lock successful</p>");
	}
	else{
		print("<p>Lock unsuccessful</p>");
	}


	$out_data = "The message/content that you want to write the file should be in these double quotes\n";

	$bytes_written = fwrite($filevar2, $out_data);
					

	print("Number of bytes written to output file are: $bytes_written <br />");

	//unlock file after finishing write operation
	flock($filevar2, LOCK_UN);
	
	//close the file
	fclose($filevar2);

?>
</body>
</html>
