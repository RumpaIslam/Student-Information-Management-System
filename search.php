<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `student` WHERE CONCAT(`ID`, `Name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `student`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "p11");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>

<html>
  <body>
        
        <h1>Result:</h1>
	
            <table border="1" cellpadding="10">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
					<th>Age</th>
                    <th>Gender</th>
					<th>Country</th>
					<th> Picture </th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Age'];?></td>
                    <td><?php echo $row['sex'];?></td>
					<td><?php echo $row['country'];?></td>
					<td><img src="<?php echo $row['photo']; ?> " height="100px" width="100px"></td>
                </tr>
                <?php endwhile;?>
            </table>
    
        
    </body>
</html>