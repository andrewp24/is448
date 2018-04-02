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
    $constructed_query = "INSERT INTO guestbook (username, comment_text, phone_number) VALUES($usersname, $comments, $phone_num);";
    
    #sanity check: print query to see if constructued query is correct
    print("<h3>Sanity check print statement:</h3> The query is: $constructed_query</br>");

    #Execute query
    $result = mysqli_query($db, $constructed_query);

    #if result object is not returned, then print an error and exit the PHP program
    if (!$result) {
        print("Error - query could not be executed");
        $error = mysqli_error();
        print "<p> . $error . </p>";
        exit;
    }
    ?>
		<!--if program reaches this print statement, it means the query worked-->
		<h3>Sanity check print statement:</h3> If this line is reached in the program, it means that the query worked
		<br />
<?php
#check how many rows have been returned by the query
    $num_rows = mysqli_num_rows($result);
    print("<h3> Sanity check print statement:</h3>
			Number of rows returned for select query: $num_rows <br />");
    #check how many fields are returned by the query. not used in this program but shown here for example usage of function mysqli_num_fields
    #$num_fields = mysqli_num_fields($result);

    if ($num_rows != 0) {

        #for all the rows as returned by the query, go through each row
        #and use the mysql_fetch_array function to return an array of the next row
        #field values can be obtained by subscripting the returned aray with the column names
        ?>

			<h3>
				Displaying from database using a for loop
			</h3>
			<table border="1">
				<tr>
					<th> User comments </th>
					<th> Description </th>
				</tr>
<?php
for ($row_num = 0; $row_num < $num_rows; $row_num++) {
            print("<tr>");
            $row_array = mysqli_fetch_array($result);
            print("<td>$user </td> <td>$row_array[car_description]</td>");
            print("</tr>");
        }
        ?>
			</table>
<?php
} else {
        echo "No information about car $usersname is in table.";
    }

    ?>
		<!-- Can also write the fetcharray using a while loop as shown below -->

		<h3>
		Displaying from database using a while loop
		</h3>

<?php
#Execute query
    $result = mysqli_query($db, $constructed_query);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows != 0) {
        ?>
				<table border="1">
					<tr>
						<th> Car name </th>
						<th> Description </th>
					</tr>
<?php
while ($row_array2 = mysqli_fetch_array($result)) {
            print("<tr>");
            print("<td>$row_array2[car_name] </td>
						   <td>$row_array2[car_description]</td>");
            print("</tr>");
        }

        ?>
				</table>
<?php
} else {
        echo "No information about car $carname is in table.";
    }

} else {
    echo "You must enter a car name";
    echo "Go back and do so!";
}

?>
</body>
</html>