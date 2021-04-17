<?php

include('db_conn.php');

$sql = "SELECT count(*) FROM project_table WHERE project_name!='NA' order by code"; 
$result = $conn->query($sql); 

$row = mysqli_fetch_array($result);

$total = $row[0];
// echo "Total rows: ".$total;

// $conn->close(); 

?>






<!DOCTYPE html>
<html>
<head>
	<title>Project Ideas</title>

	<style>
		a{
			text-decoration: none;
		}	
	</style>

</head>
<body>

	<h1><center>INNOVATIVE PROJECT IDEAS</center></h1>

	<div class="container-fluid" style="height: 100%;">

		<?php

			$var=1;

			$sql = "SELECT id,project_name,project_link FROM sem1_notes s,project_table p WHERE project_name!='NA' AND s.code=p.code ORDER BY id";
			$result = $conn->query($sql) or die($conn->error);

			while($var<=$total)
			{

				while($rows=$result->fetch_assoc())
				{
					$id=$rows['id'];
					$name=$rows['project_name'];
					$link=$rows['project_link'];

	
					echo "<div class='col-md-4' style='float:left;margin: 3% 2%;border:1px solid black;border-width:2px;border-style:ridge;'>";

					// echo "<div class='col-md-4' style='border:2px solid green;width:50%;height:10%;margin:2% 25%;'>";
					// echo "<img src='https://previews.123rf.com/images/blackstork/blackstork1507/blackstork150700049/43766219-handwritten-page-of-draft-calculations.jpg' style='width:5%;height:10%;position:absolute;'></img>";
					// echo "</div>";
					
					echo "<h4><center>Sem-$id</center></h4>";
					echo "<h4><center>$name</center></h4>";
					echo "<a href='$link'><p><center>$link</center></p></a>";

					echo "</div>";

				}

				// echo "string";
				$var++;
			}

		?>

		
	</div>

</body>
</html>




