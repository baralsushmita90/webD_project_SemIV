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


	<link rel="stylesheet" href="Css/tablestyle_new.css">

</head>
<body>
	<div class="nav" style="background-color: #5F9EA0;margin-top: -4%;">
		<!-- <ul>
		 <li><a href="index.php">Home</a></li>
		 <li><a href="about.html">Books</a></li>
		 <li><a href="contact.html">Notes</a></li>
		 <li><a href="contact.html">Previous Year </a></li>
		 <li><a href="contact.html">Syllabus</a></li>
		 <li><a href="contact.html">Practical</a></li>
		 <li><a href="contact.html">Project Ideas</a></li>
	 </ul> -->

	 <h1 style="text-align: center;color: white;padding: 12px 0px;">STUDYMATE</h1>

	</div>

	<h1><center>SUBJECT LIST</center></h1>
	<br>
	<div id="show-table" style="overflow-x:auto;margin-top: 0%;">
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
