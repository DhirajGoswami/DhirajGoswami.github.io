<?php
session_start();
if(!isset($_SESSION["sess_user"])){
 header("Location: login.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome </title>
</head>
<body style="background-image: url(assets/images/bg3.jpg);">
<div style="background-color:white;position:relative;margin:2px; border:solid; position:relative; top:200px">
<h1  style="position:relative; left:400px;">Welcome to Guwahati Refinery Blogging Website</h1>
<p  style="position:relative; left:400px;">You have been logged in.</p>

<h1  style="position:relative; left:400px;">Click below to go to home page</h1>
<a href="index-Copy.html"  style="position:relative; left:500px;">HOME</a>


<br><br><br>
<p  style="position:relative; left:400px;"><?=$_SESSION['sess_user'];?>!</p><a href="logout.php" style="position:relative; left:400px;">Logout</a>
</div>
</body>
</html>
<?php
}
?>