<!DOCTYPE html>
<html lang="EN">
<head>
	<title></title>
</head>
<body>
<?php
//opening a file for reading 
$filevar = fopen("testdata.txt", "r") or die ("Error - could not open file");

if(file_exists("testdata.txt")) 
	print("Ouput of file_exists during read operation: file exists <br />"); 
else 
	print ("Ouput of file_exists during write operation: file does not exist <br />");

//file function returns contents of file as an array
$file_content_as_array = file("testdata.txt");
$i = 1;
foreach ($file_content_as_array as $line){
	print("Line $i: $line <br />");
	$i++;
}	
fclose($filevar);



//opening a file for writing. but in this example not actually writing anything to file. just opening the file.
$filevar2 = fopen("/afs/umbc.edu/users/s/a/sampath/pub/text-files/testdata_write.txt", "w") or die ("Error - could not open file");

if(file_exists("/afs/umbc.edu/users/s/a/sampath/pub/text-files/testdata_write.txt")) 
	print("Ouput of file_exists during write operation: file exists<br />"); 
else 
	print ("Ouput of file_exists during write operation: file does not exist<br />");

fclose($filevar2);

?>
</body>
</html>
