<!DOCTYPE html>
<html lang="EN">
<!-- An example to illustrate reading directories in PHP -->
  <head> 
	<title>image of your choice</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css" />
  </head>
  <body>
  <p>
  <br />
<b>Notice</b>:  Undefined index: searchKeyword in <b>/afs/umbc.edu/users/s/a/sampath/pub/swe2018/is448/chap9-examples/php2/ret_image.php</b> on line <b>13</b><br />
<br />
<b>Warning</b>:  opendir(images): failed to open dir: No such file or directory in <b>/afs/umbc.edu/users/s/a/sampath/pub/swe2018/is448/chap9-examples/php2/ret_image.php</b> on line <b>19</b><br />
<br />
<b>Warning</b>:  readdir() expects parameter 1 to be resource, boolean given in <b>/afs/umbc.edu/users/s/a/sampath/pub/swe2018/is448/chap9-examples/php2/ret_image.php</b> on line <b>22</b><br />
  <!-- display   the image matching the keyword, which is stored in the $image variable on to the HTML page using the <img> tag -->
  <img src= "images/notfound.jpg" />
  </p>
  </body>
  </html>