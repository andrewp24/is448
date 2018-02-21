<!DOCTYPE html>
<html lang="EN">
<!-- An example to illustrate a function in a php document -->
  <head> <title> global scope.php </title>
  </head>
  <body>
    <p>
	<?php
/* By declaring $a and $b global within the function, all references to either variable will refer to the global version. There is no limit to the number of global variables that can be manipulated by a function.
 */

$a = 1;
$b = 2;

function Sum()
{
    global $a; # <-- this is using the global $a defined in line#11
    global $b; # <-- this is using the global $b defined in line#12
    $b = $a + $b; # <-- global $a and $b variables are being used and global $b is being changed here
}

Sum();
echo "Value of global variable b is: $b"; # <-- echoing the global variable $b

echo "<br /> <br />";

function tryinglocalsum()
{
    $a = 5;
    $b = 10;
    $b = $a + $b; # <-- this is using local variables $a and $b
    echo "Value of local variable b is: $b"; # <-- echoing the local variable $b
}

tryinglocalsum();
?>
    </p>
  </body>
</html>
