<?php

	$msg = "";
	
	if (isset($_POST['upload'])){
		
		
	
	
		$db = mysqli_connect("localhost","root","","test");


		
		
		$text = $_POST['text'];
		
		$name = $_POST['name'];
		
		$sql = "INSERT INTO myexp ( text, name) VALUES ('$text','$name')";
		mysqli_query($db,$sql);
		
		
	}


?>

<!DOCTYPE html>
<html><style>
#comment {
   
 style=position: relative;
 border:1px solid #000000;
 padding:20px;
 align:center;
    

}

</style><body>
<div id="hide" style="color:black;border-style:solid; margin: 10px;">

<?php
	$db = mysqli_connect("localhost","root","","test");
	$sql = "SELECT * FROM myexp";
	$result = mysqli_query($db,$sql);
	while ($row = mysqli_fetch_array($result)){
		echo "<p style='color:black;border-style:solid; margin: 10px;'>";"</p>";
			echo "<p style='color:red;position:relative;left:200px;font-size:50px'>".$row['name']."</p>";
			
			echo "<p style='color:red;position:relative;left:200px;font-size:20px'>".$row['text']."</p>";
			echo '<div id=comment>';
			echo " <a  href=index.php>Comment</a>";
			echo '</div >';
echo "<p style='color:black;border-style:solid; margin: 10px;'>";"</p>";			
	}


?>		</div></body></html>