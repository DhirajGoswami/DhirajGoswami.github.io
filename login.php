<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body  style="background-image: url(assets/images/bg3.jpg);">
<div style="background-color:white;position:relative;margin:2px; border:solid; position:relative; top:200px">
<h1 style="position:relative; left:500px;">Login</h1>

<form action="" method="post">
<label style="position:relative; left:400px;">Username:</label><input type="text" name="user" style="position:relative; left:400px;"><br><br>
<label style="position:relative; left:400px;">Password:</label><input type="password" name="pass" style="position:relative; left:400px;"><br><br>
<input type="submit" value="Login" name="submit" style="position:relative; left:500px;"><br>
<!--New user Register Link -->
<p><a href="register.php" style="position:relative; left:400px;">New User Registeration!</a></p>
</form></div>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //DB Connection
 $conn = new mysqli('localhost', 'root', '') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'test') or die("databse error");
 //Selecting database
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."' AND pass='".$pass."'");
 $numrows = mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $dbusername=$row['user'];
 $dbpassword=$row['pass'];
 }
 if($user == $dbusername && $pass == $dbpassword)
 {
 session_start();
 $_SESSION['sess_user']=$user;
 //Redirect Browser
 header("Location:welcome.php");
 }
 }
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
}
?>
</body>
</html>