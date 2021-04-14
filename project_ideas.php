<?php

include('db_conn.php');

$sql = "SELECT count(*) FROM sem1_notes WHERE project_name!='NA' order by id"; 
$result = $conn->query($sql); 

$row = mysqli_fetch_array($result);

$total = $row[0];
echo "Total rows: ".$total;

// $conn->close(); 

?>






<!DOCTYPE html>
<html>
<head>
	<title>Project Ideas</title>
</head>
<body>

	<h1><center>INNOVATIVE PROJECT IDEAS</center></h1>

	<div class="container-fluid" style="border: 1px solid green;height: 600px;">
		<div class="row" style="border: 1px solid green;height: 50%; width: 100%;">

		<?php

			$var=1;

			$sql = "SELECT * FROM sem1_notes WHERE project_name!='NA' order by id";
			$result = $conn->query($sql);

			while($var<=$total)
			{

				while($rows=$result->fetch_assoc())
				{
					$id=$rows['id'];
					$name=$rows['project_name'];

					echo "<div class='col-md-4' style='float:left;border:1px solid red;margin: 3% 4%;'>";

					echo "<h4><center>$name</center></h4>";
					echo "<h4><center>Sem-$id</center></h4>";

					echo "</div>";

				}

				// echo "string";
				$var++;
			}

		?>

		</div>
	</div>

</body>
</html>