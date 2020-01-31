<?php
	$con=mysqli_connect('localhost','root','','p11');  //p11 is database name
	$Did=$_GET['id'];
	$sql="DELETE FROM student WHERE ID='$Did'";
	
	if(mysqli_query($con,$sql))
	{
	echo "Deleted successfully!!";
	}
	
?> 

