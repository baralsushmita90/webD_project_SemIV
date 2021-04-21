<?php

include('db_conn.php');

$code = $_GET['code'];
$id=$_GET['id'];
//echo $id.$content;
$sql = "SELECT papers.title,pdf from papers,sem1_notes where sem1_notes.code = papers.code and id ='$id' and papers.code ='$code'";
$result = $conn->query($sql);
if($result->num_rows==0)
{
	echo "<center><h1 style=color:#2980B9;margin-top:3%;font-size:40px;>Oops! No Results Found</h1><center>";
	echo"<img src=images/try.gif alt=Sorry style='height:70%;width:50%;'>";
}

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

	<link rel="stylesheet" href="Css/tablestyle.css">

</head>
<body>

    <?php
    if($result->num_rows>0)
    {
    	echo"<h1><center>PAPERS LIST</center></h1>";
    }

	
	?>
	<br>
	<div id="show-table" style="overflow-x:auto;margin-top: 0%;">
	<center>
	<table class="styled-table">
	<?php
	   if($result->num_rows>0)
	   {
	   	echo"<tr>";

		echo"<th>PAPER TITLE</th>";
		echo"<th> PDF </th>";
	    echo"</tr>";

	   }
	    
      ?>
	 <?php
	 $content = "papers";
	 while($rows=$result->fetch_assoc())
    {
	        $title = $rows['title'];
			$pdf=$rows['pdf'];


			$url = "content_display.php?id=$pdf&content=$content";


			 echo "<tr class=active-row>";
			 echo "<td>$title</td>";
			 echo "<td><a href='$url'>$title</a></td>";
	  }



		?>
 	</table></center>
 	</div>

</body>
</html>
