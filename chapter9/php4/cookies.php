<?php
//Note: Setting a cookie MUST occur before any other HTML code is processed/printed by the PHP code
//if cookie by the name 'user' is set, then retrieve the name of user from cookie
//and print welcome message
if(isset($_COOKIE["user"]))
{
	$username = $_COOKIE["user"];
    
}
//else, if cookie is not set, it means the user is a first time visitor. 
//so, set the cookie and print a welcome message
else
{
    setcookie("user","Jay Leno", time()+86400);
    $username = 'guest';
        
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>
</head>
<body>Welcome <?php echo $username ?> 
<br /> 
</body></html>
