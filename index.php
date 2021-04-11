<?php
include('db_conn.php');
$sql = "SELECT * FROM notifications";
$result = $conn->query($sql);
$conn->close();
 ?>


 <?php

 	include('db_conn.php');
 	if(isset($_POST['send']))
 	{
 		// echo "<script> window.location.href = 'https://github.com/riyagoel192/webD_project_SemIV';</script>";
 		$name = $_POST['name'];
 		$email = $_POST['email'];
 		$url= $_POST['url'];
 		$upload= $_POST['upload'];

 		// if(empty($url))
 		// {
 		// 	// echo "URL empty";
 		// }

 		$sql = "INSERT INTO contact_form VALUES('$name','$email','$url','$upload')";

 		if(mysqli_query($conn, $sql))
 		{
 			// echo "values inserted successfully";
 		}
 		else
 		{
 			// echo "values not inserted successfully";
 		}

 	}

 ?>


<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Studymate</title>

	<link rel="stylesheet" type="text/css" href="styling.css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" rel="stylesheet"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<style>

		a:hover
		{
			text-decoration: none;
		}

	</style>

</head>
<body>

	<!--  Container Start -->
	<div class="container-fluid">

		<!--  Header Section Start -->
		<div class="row">

			<div class="col-md-12" id="header">

				<h1><center>STUDYMATE</center></h1>

			</div>

		</div>
		<!-- Header Section End -->

		<br>

		<!--  Navbar Start -->
		<div class="gallery_container">

		   <div class="slides">
		<img src=images/image3.jpg class="myslides">
       	<img src=images/image2.jpg class="myslides">

		   </div>

				 <div class="prev"  onclick="plusSlides(-1)"><</div>
				 <div class="next" onClick="plusSlides(1)">></div>


		</div>

		<!--  Navbar End -->

		<br>

		<!--  Main Body Start -->
		<div class="row">

			<div class="col-md-3">

				<!-- # Div for important notifications -->
				<h3>IMPORTANT NOTICE/EVENTS</h3>

				 <marquee direction = 'up', height = 80% scrolldelay="200">
				<ul>
          <?php
        	while($rows=$result->fetch_assoc())
            {
              $url=$rows['link'];
              $title=$rows['Title'];

              echo "<li><a href='$url'> $title</a></li>";



            }

          ?>

               </ul>
                </marquee>

			</div>

			<div class="col-md-8">

				<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/notes.png" alt="Avatar" style="width:300px;height:350px;">
    </div>
    <div class="flip-card-back">
      <h2>MCA NOTES</h2>
      <h3><a href="semI_notes.php?id=1">Sem I</a></h3>
      <h3><a href="semI_notes.php?id=2">Sem II</a></h3>
      <h3><a href="semI_notes.php?id=3">Sem III</a></h3>
      <h3><a href="semI_notes.php?id=4">Sem IV</a></h3>
      <h3><a href="semI_notes.php?id=5">Sem V</a></h3>
      <h3><a href="semI_notes.php?id=6">Sem VI</a></h3>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/pq.jpg" alt="Avatar" style="width:300px;height:350px;">
    </div>
    <div class="flip-card-back">
      <h2>Previous Years Question Papers</h2>
      <h3><a href="semI_notes.php?id=1">Sem I</a></h3>
      <h3><a href="semI_notes.php?id=2">Sem II</a></h3>
      <h3><a href="semI_notes.php?id=3">Sem III</a></h3>
      <h3><a href="semI_notes.php?id=4">Sem IV</a></h3>
      <h3><a href="semI_notes.php?id=5">Sem V</a></h3>
      <h3><a href="semI_notes.php?id=6">Sem VI</a></h3>
    </div>
  </div>
</div>

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/pdf.png" alt="Avatar" style="width:300px;height:350px;">
    </div>
    <div class="flip-card-back">
      <h2>Books</h2>
      <h3><a href="semI_notes.php?id=1">Sem I</a></h3>
      <h3><a href="semI_notes.php?id=2">Sem II</a></h3>
      <h3><a href="semI_notes.php?id=3">Sem III</a></h3>
      <h3><a href="semI_notes.php?id=4">Sem IV</a></h3>
      <h3><a href="semI_notes.php?id=5">Sem V</a></h3>
      <h3><a href="semI_notes.php?id=6">Sem VI</a></h3>
    </div>
  </div>
</div>

			</div>

		</div>
		<!--  Main Body End -->

		<br>

		<!--  Footer Section Start -->
		<div class="row">

			<div class="col-md-12" id="footer">

				<!-- # Footer Section -->
				<div class="col-md-4" id="map-div">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.928043186579!2d77.16326551503424!3d28.541882482453612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dc476d79b4d%3A0xa2365e11e7b695fd!2sSchool%20of%20Computer%20and%20Systems%20Sciences!5e0!3m2!1sen!2sin!4v1616519034285!5m2!1sen!2sin" width="100%" height="275" style="border:0;margin-left: -13px; " allowfullscreen="" loading="lazy"></iframe>

				</div>

				<div class="col-md-3" id="about-us">

					<h4 id="abt-us">ABOUT US</h4>
					<br>

					<span class="dot">
						<i class="fa fa-map-marker" aria-hidden="true" style="margin: 0 29%;"></i>
						<span class="details">Jawaharlal Nehru University. New Mehrauli Road, New Delhi 110067</span>
					</span>

					<br>
					<br>

					<span class="dot">
						<i class="fa fa-envelope" aria-hidden="true" style="margin: 0 18%;"></i>
						<span class="details" style="margin: 1% 3%;">jnu_scss@jnu.ac.in</span>
					</span>

					<br>
					<br>

					<span class="dot">
						<i class="fa fa-phone" aria-hidden="true" style="margin: 0 27%;"></i>
						<span class="details-other">+91 9623445290</span>
					</span>

					<br>
					<br>

					<span class="dot">
						<i class="fa fa-linkedin" aria-hidden="true" style="margin: 0 25%;"></i>
						<span class="details-other">Studymate</span>
					</span>

				</div>

				<div class="col-md-2" id="pages">
					<h4 id="abt-us">NAVIGATE</h4>
					<br>

					<ul style="list-style-type: none;">
						<li class="navigate-items"><a href="#">Home</a></li>
						<li class="navigate-items"><a href="#">Home</a></li>
						<li class="navigate-items"><a href="#">Home</a></li>
						<li class="navigate-items"><a href="#">Home</a></li>
						<li class="navigate-items"><a href="#">Home</a></li>
					</ul>
				</div>


				<div class="col-md-3" id="contact-form">
					<h4 id="abt-us">STAY CONNECTED</h4>

					<p>Connect with us by sharing your resources and contributing to the community.</p>

					<div class="row">

						<div class="col-md-4" style="height: 60px;"></div>

						<div class="col-md-4">
						<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal">CONTACT US</button>
						</div>

						<!-- Modal -->
  						<div class="modal fade" id="myModal" role="dialog">
    						<div class="modal-dialog">

      					<!-- Modal content-->
      					<div class="modal-content">
        					<div class="modal-header">
           						<h4 class="modal-title">CONTACT FORM</h4>
          						<button type="button" class="close" data-dismiss="modal">&times;</button>
        					</div>
        				<div class="modal-body">
          					<!-- <p>Some text in the modal.</p> -->
          					<form method="POST" action="index.php">
          						<!--Grid row-->
                				<div class="row">

                    			<!--Grid column-->
                    			<div class="col-md-12" style="border: none;">

                        		<div class="md-form mb-0">
                            		<label for="name" class=""><b>Enter Name</b></label>
                            		<input type="text" id="name" name="name" class="form-control" required>
                        		</div>

                        		<br>

                        		<div class="md-form mb-0">
                            		<label for="email" class=""><b>Enter Email</b></label>
                            		<input type="text" id="email" name="email" class="form-control" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required>
                        		</div>

                        		<br>

                        		<div class="md-form mb-0">
                            		<label for="upload" class=""><b>Enter URL (if any)</b></label>
                            		<input type="text" id="url" name="url" class="form-control">
                        		</div>

                        		<br>

                        		<div class="md-form mb-0">
                            		<label for="upload" class=""><b>Upload attachment (if any)</b></label>
                            		<input type="text" id="upload" name="upload" class="form-control">
                        		</div>

                    			</div>
                    			<!--Grid column-->

                    			</div>

                    			<br>
                    			<input type="submit" class="btn btn-success" id="send" name="send" value="SEND INFORMATION">
                    			<!-- End of Grid row -->

          					</form>
        				</div>
        				<div class="modal-footer">
          					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        				</div>
      					</div>

    						</div>
  						</div>

						<div class="col-md-4"></div>

					</div>


					<p>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

				</div>

			</div>

		</div>
		<!--  Footer Section End -->



	</div>
	<!--  Container End  -->

</body>
<script src="myjavascript.js" ></script>
</html>
