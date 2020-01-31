<html>
<head>
</head>
<body>
<h1>Registered name and profile:</h1>

<table border="1" cellpadding="5" width="90%">

<tr>
	<th> StudentID </th>
	<th> Name </th>
	<th> Age </th>
	<th> Gender </th>
	<th> Country </th>
	<th> Picture </th>
	
	
</tr>


<?php

$con=mysqli_connect('localhost','root','','p11');

if(isset($_POST['sb']))
{
	$id=$_POST['sid'];
	$name=$_POST['sn'];
	$age=$_POST['sa'];
	$sex=$_POST['gender'];
	$country=$_POST['co'];
	$files=$_FILES['image'];
	
	



	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetemp=$files['tmp_name'];
	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));
	$fileextstored= array('png', 'jpg', 'jpeg');
	
	if(in_array($filecheck,$fileextstored)){
		$destinationfile='upload/'.$filename;
		move_uploaded_file($filetemp,$destinationfile);
		
		$displayquary ="select * from student";
		$querydisplay= mysqli_query($con,$displayquary);
		
		while($row = mysqli_fetch_array($querydisplay)){
		if($row["ID"]==$id) {
		
			echo "Given ID already exist in database!!";
			}
			
		else{
		
		$sql="INSERT INTO `student`(`ID`, `Name`, `Age`, `sex`, `country`, `photo`) VALUES ('$id','$name','$age','$sex','$country','$destinationfile')";
		
		}
		
		}
		
		
		
		
		
		
		
		
		
		$query= mysqli_query($con,$sql);
		$displayquary ="select * from student";
		$querydisplay= mysqli_query($con,$displayquary);
		
		
	
	
		
		
		
		while( $result = mysqli_fetch_array($querydisplay)){
		
		
		?>
		
<tr>	
	<td> <?php echo $result["ID"]; ?></td>
	<td> <?php echo $result["Name"]; ?></td>
	<td> <?php echo $result["Age"]; ?></td>
	<td> <?php echo $result["sex"]; ?></td>
	<td> <?php echo $result["country"]; ?></td>
	<td><img src="<?php echo $result['photo']; ?> " height="100px" width="100px" ></td>
</tr>
		
		<?php
	
			} 
		
	}

}
?>
</table>
</body>
</html>
 
  

