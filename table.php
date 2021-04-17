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
		/*table
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
				}*/
				.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
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
	<center>
	<table class="styled-table">
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

			else if($content == "papers")
				$url = "table_papers.php?code=$code&id=$id";


			 echo "<tr class=active-row>";
			 echo "<td>$code </td>";
			 echo "<td><a href='$url'>$title</a></td>";
	  }

		?>
 	</table></center>
 	</div>

</body>
</html>
