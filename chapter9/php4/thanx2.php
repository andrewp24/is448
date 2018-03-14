<?php
session_start();
$product_id = $_SESSION['product_selected'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
<title>Thanks</title>
</head>

<body>

<h1>THANK YOU</h1>
<p>Data from the previous form page is <strong><?php echo $product_id ?></strong></p>
<h2>Please visit us again.</h2>
</body>
</html>
