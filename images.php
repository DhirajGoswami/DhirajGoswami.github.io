


<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
</head>
<body style="background-image: url(assets/images/bg3.jpg);">

	<div id="content" >

	<form  action= "showimage.php" method="post"  enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
	<div style="position: relative; border:4px solid #000000;top:200px; background-color:white">
		
		<div align="center">
				<br>Your Name:<input type="text" name="name" placeholder="Your Name"> 
		
		</div>
		<div align="center">
				<br><input type="file" name="image"/>
		</div>
		<div align="center">
				<br><textarea name="text" cols="40" rows="4" placeholder="Say something about this image..."></textarea>
		</div >
		
		<div align="center">
				<br><input type="submit" name="upload" value="upload"/><br>
		</div>
		
		</div>
</form>
</div>
</body>
</html>