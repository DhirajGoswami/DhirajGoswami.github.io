<?php

include'db.inc.php';
include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>COMMENTSYSTEM</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
echo "<form method='POST' action='".setComments($conn)."'>
<label>EMPID:<input type = 'text' name='empid'  ><br><br></label>
<label>NAME:<input type = 'text' name='empname'><br><br></label>
<label>COMMENT:<textarea name='message'></textarea><br><br></label>
<button type='submit' name='submitSubmit'>submit</button>
</form>";
?>
</body>
</html> 