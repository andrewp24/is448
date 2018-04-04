<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Your posts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>
<body>

<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "andrewp2", "andrewp2", "andrewp2");

if (mysqli_connect_errno()) {
    exit("Error - could not connect to MySQL");
}
$constructed_query = "SELECT * FROM blog_posts;";

#Execute query
$result = mysqli_query($db, $constructed_query);
#Execute query
$result = mysqli_query($db, $constructed_query);
$num_rows = mysqli_num_rows($result);

if ($num_rows != 0) {
    if ($num_rows == 1) {?>
        <h1>View your first blog post below!</h1>
        <?php
} else {?>
        <h1>You have <?php echo "$num_rows" ?> blog posts. Read them below!</h1>
        <?php
}

    while ($row_array1 = mysqli_fetch_array($result)) {
        print(" <div class='results'>
                    <b>$row_array1[title]</b> <br />
                    $row_array1[content]<br /> <br />
                    <i>tags: $row_array1[tags]</i>
                    </div>
                    <p></p>");
    }
} else {
    echo "There is nothing in the table.";
}
?>
<form action="create_post.html">
    <div class="buttons">
        <input type="submit" value="Write more blog posts."/>
    </div>
</form>
    <div class="valid">
        <p>
            <a href="http://validator.w3.org/check?uri=https%3A%2F%2Fswe.umbc.edu%2F~andrewp2%2Fis448%2F2495-andrewp2-hw3%2Fshow_posts.php%3F"><img
            src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
        </p>
    </div>
</body>


</html>