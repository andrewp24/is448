<!DOCTYPE html>
<html lang="EN"><head>
	<title>Everything about Cars</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
</head>
<body>
<?php
#connect to mysql database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "andrewp2", "andrewp2", "andrewp2");

if (mysqli_connect_errno()) {
    exit("Error - could not connect to MySQL");
}

#get the parameter from the HTML form that this PHP program is connected to
#since data from the form is sent by the HTTP POST action, use the $_POST array here
if (isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['comments']) && !empty($_POST['comments']) &&
    isset($_POST['phone']) && !empty($_POST['phone'])) {

    $usersname = $_POST['name'];
    $comments = $_POST['comments'];
    $phone_num = $_POST['phone'];
    echo "<p>Your name: $usersname</p>";
    echo "<p>Your comments: $comments</p>";
    echo "<p>Your phone number: $phone_num</p>";

    #construct a query
    #query should look like this:
    #select * from cars where car_name='accord';
    $constructed_query = "INSERT INTO guestbook (username, comment_text, phone_number) VALUES('$usersname', '$comments', '$phone_num');";

    #sanity check: print query to see if constructued query is correct
    print("<h3>Sanity check print statement:</h3> The query is: $constructed_query</br>");

    #Execute query
    $result = mysqli_query($db, $constructed_query);

    #if result object is not returned, then print an error and exit the PHP program
    if (!$result) {
        print("Error - query could not be executed");
        $error = mysqli_error($db);
        print "<p> . $error . </p>";
        exit;
    }
    ?>
		<!--if program reaches this print statement, it means the query worked-->
		<h3>Sanity check print statement:</h3> If this line is reached in the program, it means that the query worked
		<br />
<?php

} else {
    echo "You must enter a name, comments, and phone number";
    echo "Go back and do so!";
}

?>
</body>
</html>