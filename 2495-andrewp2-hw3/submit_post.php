<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>View Posts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" title="style" />
</head>
<body>
<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "andrewp2", "andrewp2", "andrewp2");

if (mysqli_connect_errno()) {
    exit("Error - could not connect to MySQL");
}

if (isset($_GET['title_name']) && !empty($_GET['title_name']) &&
    isset($_GET['blog_content']) && !empty($_GET['blog_content']) &&
    isset($_GET['tags']) && !empty($_GET['tags'])) {

    #cleaning the input.
    $title = htmlspecialchars($_GET['title_name']);
    $content = htmlspecialchars($_GET['blog_content']);
    $tags = htmlspecialchars($_GET['tags']);
    $title = mysqli_real_escape_string($db, $title);
    $content = mysqli_real_escape_string($db, $content);
    $tags = mysqli_real_escape_string($db, $tags);

    $constructed_query = "INSERT INTO blog_posts (title, content, tags) VALUES('$title', '$content', '$tags');";

#sanity check: print query to see if constructued query is correct
    #print("<h3>Sanity check print statement:</h3> <p>The query is: $constructed_query</p>");

    #Execute query
    $result = mysqli_query($db, $constructed_query);

    #if result object is not returned, then print an error and exit the PHP program
    if (!$result) {
        print("Error - query could not be executed");
        $error = mysqli_error($db);
        print "<p> . $error . </p>";
        exit;
    }
    $constructed_query = "SELECT * FROM blog_posts;";

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
        <!--if program reaches this print statement, it means the query worked-->
        <form action="create_post.html">
            <div class="buttons">
                <input type="submit" value="Click here to write another."/>
            </div>
        </form>
        <div class="valid">
        <p>
            <a href="http://validator.w3.org/check?uri=https%3A%2F%2Fswe.umbc.edu%2F~andrewp2%2Fis448%2F2495-andrewp2-hw3%2Fsubmit_post.php%3Ftitle_name%3Dreal%2Btest%26blog_content%3Dthis%26tags%3Dtag"><img
            src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
        </p>
    </div>
<?php

} else {
    echo "<p>You must enter a blog title, content, and tag. <a href='create_post.html'>Please go back and fix it.</a></p>";
}
?>
</body>
</html>