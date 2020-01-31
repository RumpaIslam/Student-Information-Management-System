<?php

	$con=mysqli_connect('localhost','root','','p11');  //p11 is database name
	$sql="select * FROM student";
	$res=mysqli_query($con,$sql); 	
?> 

<html>
<body>
<table border="1" cellpadding="5">
<tr>
	<th> StudentID </th>
	<th> Name </th>
	<th> Age </th>
	<th> Gender </th>
	<th> Country </th>
	<th> Picture </th>
	<th> Action </th>
	
	
</tr>

<?php
	
	while($row=mysqli_fetch_assoc($res)) //here mysqli_fetch_assoc() function calling for the table because we don't know the size of table;
	{
?>
<tr>
	<td> <?php echo $row["ID"]; ?></td>
	<td> <?php echo $row["Name"]; ?></td>
	<td> <?php echo $row["Age"]; ?></td>
	<td> <?php echo $row["sex"]; ?></td>
	<td> <?php echo $row["country"]; ?></td>
	<td><img src="<?php echo $row['photo']; ?> " height="100px" width="100px"></td>
	
	
	<td> <a href="deletesave.php?id=<?php echo $row["ID"]?>">Delete</a></td>
</tr>

<?php

	}

?>
</table>
</body>
</html> 