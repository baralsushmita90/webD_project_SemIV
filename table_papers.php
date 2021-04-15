<?php

include('db_conn.php');

$code = $_GET['code'];
$id=$_GET['id'];
//echo $id.$content;
$sql = "SELECT papers.title,pdf from papers,sem1_notes where sem1_notes.code = papers.code and id ='$id' and papers.code ='$code'";
$result = $conn->query($sql);
// if ($result->num_rows > 0){
// 	echo "entries there";

// }
// else{
// 	echo "No entries";
// }
// if(mysqli_num_rows($result)>0)
// {
// 		echo "<script>table.style.display=visible</script>";
// }
// if(mysqli_num_rows($result)>0)
// {
	// echo "string";

	// <!-- <script language="javascript">
	// 	document.getElementById("show-table").style.display="block";
	// </script>
 // -->
	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Question Papers</title>

	<style>
		table
		{
			width: 60%;
			border: 1px solid black;
			border-collapse: collapse;
			margin-left: auto;
  			margin-right: auto;
		}

		th, td {
  					text-align: center;
  					padding: 15px;
  					border: 1px solid black;
  					border-collapse: collapse;
  					font-size: 20px;
				}

		a
		{
			text-decoration: none;
		}

		h1
		{
			margin-top: 5%;
		}

	</style>

</head>
<body>


	<h1><center>PAPERS LIST</center></h1>
	<br>
	<div id="show-table" style="overflow-x:auto;margin-top: 5%;">
	<table>
	<tr>
		
		<th>PAPER TITLE</th>
		<th> PDF </th>
	</tr>

	 <?php
	 $content = "papers";
	 while($rows=$result->fetch_assoc())
    {
	        $title = $rows['title'];
			$pdf=$rows['pdf'];

			
			$url = "content_display.php?id=$pdf&content=$content";


			 echo "<tr>";
			 echo "<td>$title</td>";
			 echo "<td><a href='$url'>$title</a></td>";
	  }
	
	

		?>
 	</table>
 	</div>

</body>
</html>
