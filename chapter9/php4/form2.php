<?php
session_start();
$item_selected = $_GET['product_id'];
$_SESSION['product_selected'] = $item_selected;
?>


<!DOCTYPE html>
<html lang="EN">
<head>
<title>Data from previous page</title>
</head>

<body>

<h1>ORDER FORM</h1>

<form method="get" action="thanx2.php">
  <table>
  <tr>
  <td>Name: </td>
  <td><input type="text" name="nameTextField" /> </td>
  </tr>
  <tr>
	<td>Phone: </td>
    <td><input type="text" name="phoneTextField" /></td>
	</tr>
  <tr>
  <td>Credit Card #: </td>
   <td><input type="text" name="ccTextField" /></td>
  </tr>
  <tr>
     <td>
   <input type="submit" name="submitButton" value="Submit" /> </td>

    <td>
	<input type="reset" name="resetButton" value="Reset" /> </td>
	</tr>
</table>

</form>
</body>
</html>
