
<html>
	<body><center>
	
	<?php
	$con=mysqli_connect('localhost','root','','p11'); 
	$id=$_GET['ID'];
	$sql="select * FROM student WHERE ID='$id'";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($res);
	
?>
	
	<form  action="" method="post" enctype="multipart/form-data">
	<h2>Update information</h2><br />
		<table border="0" cellpadding="10">
			<tr>
				<td><label>ID</label></td>
				<td><input type="text" name="ID" value="<?php echo $row["ID"] ?>" required></td>
			</tr>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="Name" value="<?php echo $row["Name"] ?>" required></td>
			</tr>
			<tr>
				<td><label>Age</label></td>
				<td><input type="number" name="Age" value="<?php echo $row["Age"] ?>" required></td>
			</tr>
			<tr>
				<td><label>Gender</label></td>
				<td><input type="text" name="sex" value="<?php echo $row["sex"] ?>" required></td>
			<tr>
				<td><label>Country</label></td>
				<td><input type="text" name="country" value="<?php echo $row["country"] ?>" required></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" name="sb" value="Update Info"></center></td>
			</tr>
			
			
		</table>
		
		
	</form>
	
	<?php
	
	if(isset($_POST['sb'])){
	$uid=$_POST['ID'];
	$uname=$_POST['Name'];
	$uage=$_POST['Age'];
	$ugender=$_POST['sex'];
	$ucountry=$_POST['country'];
	$sqlupdate="Update student SET ID='$uid', Name='$uname', Age=$uage, sex='$ugender', country='$ucountry' WHERE ID='$uid'";
	$res=mysqli_query($con,$sqlupdate);
	
	if(mysqli_query($con, $sqlupdate)){
        echo 'Information successfully updated!!!';
    } 
	}
	?>
	
	
	
	
	</center>
	</body>
</html>