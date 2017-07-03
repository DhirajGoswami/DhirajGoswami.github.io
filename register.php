<!doctype html>
<html>
<head>
<title>User Registration</title>
</head>
<body style="background-image: url(assets/images/bg3.jpg);">
<div style="background-color:white;position:relative;margin:2px; border:solid; position:relative; top:200px">
<h1 style="position:relative; left:500px;">User Registration</h1>
<form action="" method="post">
<label style="position:relative; left:400px;">Fullname:</label><input type="text" name="user" style="position:relative; left:400px;"><br/><br/>
<label style="position:relative; left:400px;">Password:</label><input type="password" name="pass" style="position:relative; left:400px;"><br/><br/>
<label style="position:relative; left:400px;">Confirm Password:</label><input type="password" name="connpass" style="position:relative; left:400px;"><br/><br/>
<label style="position:relative; left:400px;">Email:</label><input type="text" name="email"style="position:relative; left:400px;"><br/><br/>
<label style="position:relative; left:400px;">Phone:</label><input type="text" name="phone"style="position:relative; left:400px;"><br/><br/>




<input type="submit" value="Register" name="submit" style="position:relative; left:400px;"><br/><br/>

<a href="login.php" style="position:relative; left:400px;">Login</a>
</form>
<?php
if(isset($_POST["submit"])){
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 $connpass = $_POST['connpass'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
	
 $conn = new mysqli('localhost', 'root', '') or die (mysqli_error()); 
 $db = mysqli_select_db($conn, 'test') or die("DB Error"); 

 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE user='".$user."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {

 $sql = "INSERT INTO userpass(user,pass,connpass,email,phone) VALUES('$user','$pass','$connpass','$email','$phone')";
 $result = mysqli_query($conn, $sql);
 
 if($result){
 echo "Your Account Created Successfully";
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
 echo "That Username already exists! Please try again.";
 }
 }
 else
 {
 ?>
 <!--Javascript Alert -->
 <script>alert('Required all felds');</script>
 <?php
 }
}
?>
</body>
</html>