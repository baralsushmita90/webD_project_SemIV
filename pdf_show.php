<?php

include('db_conn.php');

$id = $_GET['id'];
// echo $id;
 // $sql = "SELECT pdf_link FROM sem1_notes WHERE code = $id"; 
 // $result = $conn->query($sql); 
 // $conn->close(); 

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	$id = $_GET['id'];

	$sql = mysqli_query($conn, "SELECT pdf_name FROM sem1_notes WHERE code='$id'");

	$result = mysqli_fetch_array($sql);

	//echo $result['pdf_name']; 
	?>

	<embed src="pdf_docs/<?php echo $result['pdf_name'];?>" style = "margin-left: 10%;" width="1200" height="730" type="application/pdf">

</body>
</html>