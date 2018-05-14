<?php
header("Cache-Control: no-cache, must-revalidate");
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

if (isset($_GET["animaltype"])) {
    $animalType = $_GET["animaltype"];
    if ($animalType == "kitties") {
        echo
            "<img src=\"images/kitty1.jpg\" alt=\"Kitty\"/> <br/>
      <img src=\"images/kitty2.jpg\" alt=\"Kitty\"/> <br/>
      <img src=\"images/kitty3.jpg\" alt=\"Kitty\"/> <br/>
      <img src=\"images/kitty4.jpg\" alt=\"Kitty\"/> <br/>
      ";

    } else {
        echo "
      <img src=\"images/puppy1.jpg\" alt=\"Puppy\"/><br/>
      <img src=\"images/puppy2.jpg\" alt=\"Puppy\"/><br/>
      <img src=\"images/puppy3.jpg\" alt=\"Puppy\"/><br/>
      <img src=\"images/puppy4.jpg\" alt=\"Puppy\"/><br/>
      ";
    }
} else {
    echo "animal not selected";
}
