<?php
$studentName = $_POST["name"];
$campusID = $_POST["campus_id"];

if ((isset($studentName) && (!empty($studentName))) &&
    (isset($campusID) && (!empty($campusID)))
) {
    if (preg_match("/^\d*$/", $phoneNumber)) {
        echo "Valid Campus ID <br />";
    } else {
        echo "Invalid Campus ID, go back and fix. needs to be in the following format: AB1234 <br />";
    }

    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>Homework 2: Name and Campus ID</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>

<body>
    <div class="intro">
        <h1>Thanks for submitting your answers.</h1>

        <p>
            Name:
            <strong> <?php echo $studentName ?></strong>
        </p>
        <p>
            Campus ID:
            <strong> <?php echo $campusID ?></strong>
        </p>
	<p>
        <a href="studentID.html">Click here to go back to the main page.</a>
    </p>
    </div>
</body>

</html>

<?php
} else {
    //a variable was empty or not set.
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>Homework 2: Name and Campus ID</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>

<body>
    <div class="intro">
        <h1>Your answers have not been recorded.</h1>
        <p>You did not put text into all the text boxes. Go back and re enter answers.</p>
        <a href="studentID.html">Click here to go back to the main page.</a>
    </p>
    </div>
</body>

</html>

<?php
}

?>


