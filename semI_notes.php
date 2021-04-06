<?php

include('db_conn.php');

$id = $_GET['id'];
$sql = "SELECT * FROM sem1_notes WHERE id = $id"; 
$result = $conn->query($sql); 
$conn->close(); 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>SUBJECTS</th>
	</tr>
<?php
while($rows=$result->fetch_assoc()) 
                { 
?>
<tr>
      
      <td><b><?php echo $rows['code'];?></b></td>
      <td><b><?php echo $rows['title'];?></b></td>
 </tr>
<?php 
          } 
     ?>
 </table>
</body>
</html>
