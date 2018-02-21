<!DOCTYPE html>
<html lang="EN">
<body>
<p>
<?php
$d = date("D");

//if ("21" == 21) --> TRUE

//if ("21" === 21)  ---> FALSE

//Question: if age > 16 and < 21, then print, eligible to drive
//CORRECT
//if (  ($age > 16)   && ($age < 21) )
//{
//    echo "eligible to drive";
//}

/////WRONG
//if (  (16 < $age < 21))
//{
//    echo "eligible to drive";
//}

///WRONG
//if ($age > 16  && < 21)

if ($d == "Fri") {

    echo "Weekend is coming up";
}

if (($d == "Fri") && ($age > 21)) {
    echo "Hello!<br />";
    echo "Have a nice weekend!";
    echo "See you on Monday!";
    echo "Bars are waiting for you!";
    echo "HAVE A GREAT DAY";
} else {
    print("A few more days to go for the weekend");
}
?>
</p>
</body>
</html>
