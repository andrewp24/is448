<br />
<b>Notice</b>:  Undefined index: product_id in <b>/afs/umbc.edu/users/s/a/sampath/pub/swe2018/is448/chap9-examples/php4/form2.php</b> on line <b>3</b><br />


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
