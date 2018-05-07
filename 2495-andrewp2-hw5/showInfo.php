<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<title>response to customer satisfaction survey</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>


<?php
$userName = htmlspecialchars($_GET["userName"]);
$streetAdr = htmlspecialchars($_GET["streetAdr"]);
$city = htmlspecialchars($_GET["city"]);
$state = htmlspecialchars($_GET["state"]);
$email = htmlspecialchars($_GET["email"]);
$phoneNumber = htmlspecialchars($_GET["phoneNumber"]);

?>
    <div class="content_area">
      <p>
      Thank you for the entering this information,
      <strong><?php echo $userName ?></strong>. <br />
      Your street address, city, state:
      <strong> <?php echo " $streetAdr, $city, $state." ?> </strong>
      <br />
      Your email address:
      <strong> <?php echo $email ?> </strong>
      <br />
      Your phone number:
      <strong> <?php echo $phoneNumber ?> </strong>
      <br />
      </p>
    </div>
	</body>
</html>