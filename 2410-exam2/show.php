<!DOCTYPE html>
<html lang="EN">
  <head>
    <title>Get weather</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css">

  </head>
<body>
<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "andrewp2", "andrewp2", "andrewp2");

if (mysqli_connect_errno()) {
    exit("Error - could not connect to MySQL");
}

if (isset($_POST['city']) && !empty($_POST['city']) &&
    isset($_POST['state']) && !empty($_POST['state']) &&
    isset($_POST['month']) && !empty($_POST['month']) &&
    isset($_POST['year']) && !empty($_POST['year'])) {

    #cleaning the input.
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $month = htmlspecialchars($_POST['month']);
    $year = htmlspecialchars($_POST['year']);
    $city = mysqli_real_escape_string($db, $city);
    $state = mysqli_real_escape_string($db, $state);
    $month = mysqli_real_escape_string($db, $month);
    $year = mysqli_real_escape_string($db, $year);

    $constructed_query = "SELECT average, units FROM weather WHERE city = '$city' AND state = '$state' AND month = '$month' AND year = '$year';";

#sanity check: print query to see if constructued query is correct
    print("<h3>Sanity check print statement:</h3> <p>The query is: $constructed_query</p>");

    #Execute query
    $result = mysqli_query($db, $constructed_query);

    #if result object is not returned, then print an error and exit the PHP program
    if (!$result) {
        print("Error - query could not be executed");
        $error = mysqli_error($db);
        print "<p> . $error . </p>";
        exit;
    }

#Execute query
    $num_rows = mysqli_num_rows($result);

    if ($num_rows != 0) {
        if ($num_rows == 1) {?>
        <div class="header">
            <h1>Weather</h1>
        </div>
        <?php
} else {?>
        <div class="header">
            <h1>You have <?php echo "$num_rows" ?> weather data points. see them below</h1>
        </div>
        <?php
}

        while ($row_array1 = mysqli_fetch_array($result)) {
            print(" <div class='results'>
                    <b>For $city, $state, in $month $year,</b> <br />
                    <i>The average temperature: $row_array1[average]</i> <br />
                    Units are: $row_array1[units]
                    </div>
                    <p></p>");
        }
    } else {
        echo "There are no temperatures matching your query of: state: $state, city: $city, month: $month, year: $year";
    }
} else {
    echo "<p>You did something wrong.</p>";
}

//todo: read in values from the form into PHP variables

//todo: add code to connect to database server

//todo: write and execute the query to select from table

//todo: if query returned 0 rows, display error message

//todo: if query returned a row, display the temperature and units retuned by table

?>
</body>
</html>