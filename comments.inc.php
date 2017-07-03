<?php

function setComments($conn){
if(isset($_POST['submitSubmit'])){

$empname=$_POST['empname'];
	$comment =$_POST['message'];
	
	$sql="INSERT INTO comments(empname,message) VALUES ('$empname','$comment')";
	$result=$conn->query($sql);
	echo'<div  border-style: solid;>';
	
	echo'<br>';echo $empname;echo'<br>';
    echo $comment;echo'<br>';
	echo'</div>';
	}

	
}
