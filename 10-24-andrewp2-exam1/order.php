<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Homework 2: submit.php</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="form_proc.css" title="style" />
</head>
<body>

<?php
$myfile = fopen("/afs/umbc.edu/users/a/n/andrewp2/pub/text-files/orders.txt", "a+") or die("Unable to open file!");

$concertName = $_POST["c_name"];
$concertLoc = $_POST["c_location"];
$concertDate = $_POST["c_date"];
$ticketNum = $_POST["ticket_num"];
$specialReq = $_POST["spec_req"];
//write to file
flock($myfile, LOCK_EX);

$out_data = "$concertName, $concertLoc, $concertDate, $ticketNum, $specialReq \n";

if ((isset($concertName) && (!empty($concertName))) &&
    (isset($concertLoc) && (!empty($concertLoc))) &&
    (isset($concertDate) && (!empty($concertDate))) &&
    (isset($ticketNum) && (!empty($ticketNum)))
) {
    if (preg_match("/^^(([0-9][1-9])|([1-9][0-9])|[1-9])$/", $ticketNum)) {
        $bytes_written = fwrite($myfile, $out_data);

        if ($bytes_written == false) {
            echo "write failed <br />";
        }
        flock($myfile, LOCK_UN)
        ?>
            <p>Thanks for your order for <?php echo $concertName ?>. We will process it soon.</p>
    </body>

    </html>
    <?php
} else {
        echo "Enter a value between 1 and 99 for number of tickets. Cannot order more than 99 tickets.  <br />";
        ?>
            <a href="order.html">Go back and re-enter info.</a>
    <?php
}

} else {
    ?>

        <h1>Your answers have not been recorded.</h1>
        <p>You did not put text into all the text boxes. Go back and re enter answers.</p>
        <a href="order.html">Click here to go back to the main page.</a>
    </p>
</body>

</html>

<?php
}

?>


