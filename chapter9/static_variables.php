<!DOCTYPE html>
<html lang="EN">
  <head> <title> global scope.php </title>
  </head>
  <body>
    <p>
		<?php
/*every time function is called, it will
print the current value of $a and
increment it*/
function test()
{
    //$a is initialized only first time this
    //function is called
    static $a = 1;
    echo "Value of variable <b>a</b> inside the function is: $a <br />";
    $a++;
}

//invoking the test method
echo "calling the test() method first time <br />";
test();
echo "calling the test() method second time <br />";
test();
echo "calling the test() method third time <br />";
test();
?>

	</p>
  </body>
</html>