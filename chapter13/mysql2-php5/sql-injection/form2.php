<!DOCTYPE html>
<html lang="EN">
<head>
	<title>Protecting against SQL injection attacks</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
</head>
<body>
<?php
	#connect to mysql database
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","sampath","sampath","sampath");

	if (mysqli_connect_errno())
		exit("Error - could not connect to MySQL");

	if ( isset($_POST['username'])  && !empty($_POST['username']) &&
		 isset($_POST['password'])  && !empty($_POST['password'])
		 )
	{
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		$constructed_query = "SELECT * FROM users WHERE username='$username' AND password= '$password'";

		//Regular input query: select * from users where username =  'tom' and password = 'tom234';
		//Malicious input query: select * from users where username = 'tom' and password = '' OR '1' = '1'

		print("<b>Query is: $constructed_query</b><br />");
		#Execute query
		$result = mysqli_query($db,$constructed_query);

		#if result object is not returned, then print an error and exit the PHP program
		if(! $result){
			print("Error - query could not be executed");
			$error = mysqli_error();
			print "<p>$error</p>";
			exit;
		}
		#check how many rows have been returned by the query
		$num_rows = mysqli_num_rows($result);
		print("<br /> Number of rows returned: $num_rows <br />");
		#check how many fields are returned by the query
		$num_fields = mysqli_num_fields($result);
		#for all the rows as returned by the query, go through each row
		#and use the mysql_fetch_array function to return an array of the next row
		#field values can be obtained by subscripting the returned aray with the column names
		for($row_num = 1; $row_num <= $num_rows; $row_num++){
			$row = mysqli_fetch_array($result);
			print("<p><b>Username:</b> $row[username]. ");
			print("<b>Password:</b> $row[password]</p>");
		}
	}
	else{
?>
		<p>
			You have to enter a username and password. 
			Go <a href="form2.html"> back </a> and do so.
		</p>
<?php
	}
?>
</body>
</html>