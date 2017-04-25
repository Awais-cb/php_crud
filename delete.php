<?php
	include("connection.php");
	
	$del_id=$_GET["del"];
	
	$query="delete from students where id='$del_id'";
	if(mysql_query($query)){
	

	echo "<script>window.open('student.php?deleted=Record deleted. . .','_self') </script>";				//redirecting user
	
	}
	
	



?>