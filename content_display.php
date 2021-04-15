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
  $content=$_GET['content'];

  if($content=="syllabus")
	{
		$sql = mysqli_query($conn, "SELECT syllabus_pdf FROM sem1_notes WHERE code='$id'");
		$result = mysqli_fetch_array($sql);
		$url="pdf/syllabus/".$result['syllabus_pdf'];
	}
 else if($content=="books")
 {
	 $sql = mysqli_query($conn, "SELECT books_pdf FROM sem1_notes WHERE code='$id'");
	 $result = mysqli_fetch_array($sql);
	 $url="pdf/books/".$result['books_pdf'];

 }
 else if($content=="notes")
 {
	 $sql = mysqli_query($conn, "SELECT notes_pdf FROM sem1_notes WHERE code='$id'");
	 $result = mysqli_fetch_array($sql);
	 $url="pdf/notes/".$result['notes_pdf'];
 }

 else if($content == "papers")
 {
       $sql = mysqli_query($conn, "SELECT pdf FROM papers WHERE pdf='$id'");
	   $result = mysqli_fetch_array($sql);
	   $url="pdf/papers/".$result['pdf'].".pdf";
       //echo $url;
 }

	 echo "<embed src='$url' style = 'margin-left: 10%;' width='1200' height='730' type='application/pdf'>"
 

   //echo $result['syllabus_pdf'];

	?>

<?php
/*
	$sql = mysqli_query($conn, "SELECT notes_pdf FROM sem1_notes WHERE code='$id'");

	$result = mysqli_fetch_array($sql);

	//echo $result['pdf_name'];
	?>

	<embed src="notes_pdf_docs/<?php echo $result['notes_pdf'];?>" style = "margin-left: 10%;" width="1200" height="730" type="application/pdf">
*/?>
</body>
</html>
