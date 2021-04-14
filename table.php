<?php

include('db_conn.php');

$id = $_GET['id'];
$content=$_GET['content'];
//echo $id.$content;
$sql = "SELECT * FROM sem1_notes WHERE id = $id";
$result = $conn->query($sql);
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

	<title>MCA Notes</title>

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


	<h1><center>SUBJECT LIST</center></h1>
	<br>
	<div id="show-table" style="overflow-x:auto;margin-top: 5%;">
	<table>
	<tr>
		<th>Subject Code</th>
		<th>Subject Title</th>
	</tr>

	 <?php
	 while($rows=$result->fetch_assoc())
    {
	    $code = $rows['code'];
			$title=$rows['title'];
			if($content=="syllabus")
			 $url="content_display.php?id=".$code."& content=syllabus";

      else if($content=="books")
       $url="content_display.php?id=".$code."& content=books";

			else if($content=="notes")
			  $url="content_display.php?id=".$code."& content=notes";


			 echo "<tr>";
			 echo "<td>$code </td>";
			 echo "<td><a href='$url'>$title</a></td>";
	  }

		?>
 	</table>
 	</div>

</body>
</html>
