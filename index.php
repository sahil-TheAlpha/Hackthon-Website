<?php

include("connect.php");
 if (isset($_POST['send'])) {
$name=$_POST['qName'];
$email=$_POST['qEmail'];
$sub=$_POST['qSubject'];
$qquery=$_POST['qQuery'];

$query="insert into query(qfrom,qto,sub,qsn,name,email) values('ADMIN','$name','$sub','$qquery','$name','$email')";
$result=mysqli_query($con,$query);
if ($result) {
  echo "<script>alert('Success!');</script>";
}else {
  echo "<script>alert('Failed!');</script>";
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<!--Meta Tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!--- Custom CSS --->
  <link rel="stylesheet" type="text/css" href="CSS/custom.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="CSS/mdb.min.css">
	<!-- TimeLine CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/timeline.min.css">
	<!--- Owl Carousel CSS --->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!--- Maps --->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />

	<title>WalmartLabs Hacktathon</title>

</head>
<body>
	<!-- Section Number One: Landing Module -->
	<section class="header">
		<div class="video-container">
			<video class="fullscreen-video-wrap" src="Videos/code.mp4" autoplay="true" loop="true" muted="true"></video>
		</div>
		<div class="header-overlay"></div>
		<nav class="navbar navbar-default  fixed-top">
			<div class="container">
				<a href="#" class="navbar-brand"><h1 class="font-weight-bold text-white">Walmart</h1></a>
  				<div class="navbar-form navbar-right">
  						<a href="#" class="btn  text-white text-center btn-primary font-weight-bold" data-toggle="modal" data-target="#modalLRForm">RSVP</a>
  				</div>
			</div>
		</nav>
		<div class="header-content">
      <div class="box">
        <h2 class="text-white" id="days"></h2>
        <h6 class="text-uppercase text-white">Days</h6>
      </div>
      <div class="box">
        <h2 class="text-white" id="hours"></h2>
        <h6 class="text-uppercase text-white">Hours</h6>
      </div>
      <div class="box">
        <h2 class="text-white" id="minutes"></h2>
        <h6 class="text-uppercase text-white">Minutes</h6>
      </div>
      <div class="box">
        <h2 class="text-white" id="seconds"></h2>
        <h6 class="text-uppercase text-white">Seconds</h6>
      </div>
		<!--Modal: Login / Register Form-->

    <?php
    include("connect.php");
    // //Local DB
    // $con=mysqli_connect("localhost","root","123456") or die("unable to connect");
    // mysqli_select_db($con,'hackathon');
    if(isset($_POST['reg'])){

      if(isset($_POST['team_name'])){
          $_SESSION['team_name']=$_POST['team_name'];
          $team_name=$_SESSION['team_name'];
              }
              if(isset($_POST['describes'])){
                  $_SESSION['describes']=$_POST['describes'];
                  $describes=$_SESSION['describes'];
                      }

        if(isset($_POST['m1_name'])){
            $_SESSION['m1_name']=$_POST['m1_name'];
            $m1_name=$_SESSION['m1_name'];
                }
                if(isset($_POST['m1_email'])){
                    $_SESSION['m1_email']=$_POST['m1_email'];
                    $m1_email=$_SESSION['m1_email'];
                        }
                        if(isset($_POST['m1_contact'])){
                            $_SESSION['m1_contact']=$_POST['m1_contact'];
                            $m1_contact=$_SESSION['m1_contact'];
                                }
                                if(isset($_POST['m2_name'])){
                                    $_SESSION['m2_name']=$_POST['m2_name'];
                                    $m2_name=$_SESSION['m2_name'];
                                        }

                                        if(isset($_POST['m2_email'])){
                                            $_SESSION['m2_email']=$_POST['m2_email'];
                                            $m2_email=$_SESSION['m2_email'];
                                                }

                                                        if(isset($_POST['m2_contact'])){
                                                            $_SESSION['m2_contact']=$_POST['m2_contact'];
                                                            $m2_contact=$_SESSION['m2_contact'];
                                                                }
                                                                if(isset($_POST['m3_name'])){
                                                                    $_SESSION['m3_name']=$_POST['m3_name'];
                                                                    $m3_name=$_SESSION['m3_name'];
                                                                        }
                                                                        if(isset($_POST['m3_email'])){
                                                                            $_SESSION['m3_email']=$_POST['m3_email'];
                                                                            $m3_email=$_SESSION['m3_email'];
                                                                                }
                                                                                if(isset($_POST['m3_contact'])){
                                                                                    $_SESSION['m3_contact']=$_POST['m3_contact'];
                                                                                    $m3_contact=$_SESSION['m3_contact'];
                                                                                        }
                                                                                        if(isset($_POST['m4_name'])){
                                                                                            $_SESSION['m4_name']=$_POST['m4_name'];
                                                                                            $m4_name=$_SESSION['m4_name'];
                                                                                                }
                                                                                                if(isset($_POST['m4_email'])){
                                                                                                    $_SESSION['m4_email']=$_POST['m4_email'];
                                                                                                    $m4_email=$_SESSION['m4_email'];
                                                                                                        }
                                                                                                        if(isset($_POST['m4_contact'])){
                                                                                                            $_SESSION['m4_contact']=$_POST['m4_contact'];
                                                                                                            $m4_contact=$_SESSION['m4_contact'];
                                                                                                                }

    $sql="INSERT INTO rsvp (team_name,describes,m1_name,m1_email,m1_contact,m2_name,m2_email,m2_contact,m3_name,m3_email,m3_contact,m4_name,m4_email,m4_contact)
     VALUES
     ('$team_name','$describes','$m1_name','$m1_email','$m1_contact','$m2_name','$m2_email','$m2_contact','$m3_name','$m3_email','$m3_contact','$m4_name','$m4_email','$m4_contact')";
    $res=mysqli_query($con,$sql);
    if($res){

        echo "<script>alert('Your details have been registered.')</script>";
        echo "<script type='text/javascript'>window.location.href = 'index.php'    </script>";
    }
    else{
      echo "<script>alert('Your details have not been registered.')</script>";
      echo "<script type='text/javascript'>window.location.href = 'index.php'    </script>";
    }
    }
    // }
    ?>
    <!--Modal: Login / Register Form-->
  		<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    			<div class="modal-dialog" role="document">
      			<div class="modal-content py-2">
              		<div class="text-center">
              			<h4 class="font-weight-bold black-text text-uppercase">rsvp</h4>
              		</div>
              		<hr>
              		<div class="modal-body">
              			<form action="index.php" method="post">
                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
    								</div>
    								<input type="text" class="form-control" name="team_name" placeholder="Team Name" aria-label="Name" aria-describedby="basic-addon1">
  							</div>

                				<div class="form-group mb-3">
                 	 				<select name="describes" class="custom-select">
  									<option name="describes" selected>What describes your team best?</option>
  									<option name="describes"value="Students">Students</option>
  									<option name="describes"value="Professionals">Professionals</option>
  									<option name="describes" value="Freelancers">Freelancers</option>
  								</select>
                				</div>

               				<h4 class="font-weight-bold black-text text-left">Member Details</h4>
                				<hr>
                				<p class="font-weight-bold black-text text-left">Member 1</p>
                				<hr>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
    								</div>
    								<input type="text" name="m1_name"class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
    								</div>
    								<input type="email" class="form-control" name="m1_email" placeholder="Email id" aria-label="Email" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
    								</div>
    								<input type="tel" pattern="[789][0-9]{9}" class="form-control" name="m1_contact"placeholder="Contact Number" aria-label="Email" aria-describedby="basic-addon1">
  							</div>

                				<p class="font-weight-bold black-text text-left">Member 2</p>
                				<hr>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
    								</div>
    								<input type="text" class="form-control" name="m2_name" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
    								</div>
    								<input type="email" class="form-control" name="m2_email"placeholder="Email id" aria-label="Email" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
    								</div>
    								<input type="tel" pattern="[789][0-9]{9}" class="form-control" name="m2_contact" placeholder="Contact Number" aria-label="Contact Number" aria-describedby="basic-addon1">
  							</div>

                				<p class="font-weight-bold black-text text-left">Member 3</p>
                				<hr>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
    								</div>
    								<input type="text" class="form-control" name="m3_name"placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
    								</div>
    								<input type="email" class="form-control" name="m3_email"placeholder="Email id" aria-label="Email" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
    								</div>
    								<input type="tel" pattern="[789][0-9]{9}" class="form-control" name="m3_contact" placeholder="Contact Number" aria-label="Contact Number" aria-describedby="basic-addon1">
  							</div>

                				<p class="font-weight-bold black-text text-left">Member 4</p>
                				<hr>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-male"></i></span>
    								</div>
    								<input type="text"  class="form-control" name="m4_name"placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope-square"></i></span>
    								</div>
    								<input type="email" class="form-control" name="m4_email"placeholder="Email id" aria-label="Email" aria-describedby="basic-addon1">
  							</div>

                				<div class="input-group mb-3">
            						<div class="input-group-prepend">
      								<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
    								</div>
    								<input type="tel" pattern="[789][0-9]{9}" class="form-control" name="m4_contact" placeholder="Contact Number" aria-label="Contact Number" aria-describedby="basic-addon1">
  							</div>

              		</div>
              		<hr>
              		<div class="text-center">
             				<button class="btn btn-info btn-lg font-weight-bold text-uppercase" name="reg" type="submit">Register</button>
             			</div>
      			</div>
    			</div></form>
  		</div>
	</section>
	<!--- End of Section Number One: Landing Module --->

	<!-- Section Number Two: About Company --->
	<div id="about">
	<section class="container-fluid about">
		<div class="container pt-5 pb-5">
			<h1>Are you ready to hack?</h1>
      <h3 class="text-muted">Meet & collaborate with some of the engineers who are the great minds behind developing walmart's online global business.</h3>
			<div class="row">
				<div class="col-sm-12 col-lg-4 text-center">
					<img class="img-responsive" src="https://he-s3.s3.amazonaws.com/media/cache/e0/c4/e0c4590742e822bc20aed2a2e7e39b85.png">
				</div>
				<div class="col-md-12 col-lg-8">
					<h4 class="font-weight-bold black-text">Walmart India Private Limited is a wholly owned subsidiary of Walmart Inc.</h4>
					<p class="text-muted text-justify">WalmartLabs is inviting all the technologists out there to participate in a hackathon themed around different domains. Here’s your chance to unleash your creative instincts and build a revolutionary new hack around any of the themes given below:</p>
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body text-center">
									<i class="fas fa-users"></i>
									<h5 class="font-weight-bold black-text text-uppercase">Partcipants</h5>
									<p class="text-muted text-justify">Every year thousands of coders from all walks of life attend this event. </p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body text-center">
									<i class="far fa-calendar-alt"></i>
									<h5 class="font-weight-bold black-text text-uppercase">Annual</h5>
									<p class="text-muted text-justify">The hackathon event is conducted anually which lasts for 1-2 days.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body text-center">
									<i class="fas fa-ticket-alt"></i>
									<h5 class="font-weight-bold black-text text-uppercase">Tickets</h5>
									<p class="text-muted text-justify">You can participate individually or as a team by registering yourself.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header font-weight-bold black-text text-uppercase h1 text-center">Why Should you attend?</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body mask rgba-black-light text-center">
											<h5 class="black-text font-weight-bold"><!-- <span><i class="fas fa-medkit"></i></span>&nbsp;Health & Fitness -->Get Found</h5>
											<p class=text-justify>"Hackathon is buzzing with action. You never know who’ll you meet. Your potential customer, employee or co-founder might be sitting just behind the corner!<!-- How about coding your way to a healthier lifestyle? Sounds motivating? Build an app that makes it easy and encourages women to keep their health in check! -->"</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body mask rgba-black-light text-center">
											<h5 class="black-text font-weight-bold"><!-- <span><i class="fas fa-tablet"></i></span>&nbsp;Wearables(IOT) -->Take Up Challenges</h5>
											<p class=text-justify>"We create challenges in collaboration with leading industries and organizations. Your solution could help to pave way for better future.."</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body mask rgba-black-light text-center">
											<h5 class="black-text font-weight-bold"><!-- <span><i class="fas fa-globe"></i></span>&nbsp;Travel -->Perfect your skills</h5>
											<p class=text-justify>Whether it’s your coding skills or you strive to sharpen your business instinct hackathon helps to take your skills to a new level.</p>
										</div>
									</div>
								</div>
								<!-- <div class="col-sm-4">
									<div class="card">
										<div class="card-body mask rgba-black-light text-center">
											<h5 class="black-text font-weight-bold"><span><i class="fas fa-hotel"></i></span>&nbsp;Re-inventing Retail</h5>
											<p class=text-justify>Build an app changing the existing retail technology! We’re looking forward to the amazing things you can do with tons of data!</p>
										</div>
									</div>
								</div> -->
							</div>
						</div>
						<div class="card-footer">
							<div class="text-center">
								<a href="#" class="btn btn-danger font-weight-bold text-uppercase" data-toggle="modal" data-target="#modalLRForm">Register Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- </div> -->
	<!--- End of Section Number Two: About Company --->

	<!-- Start of Section Number Three: Agenda --->
	<div id="agenda">
	<section class="container-fluid agenda pt-5 pb-5">
    <h1 class="font-weight-bold text-center mb-5">AGENDA OF THE EVENT</h1>
		<div class="row main mb-5">
			<div class="col-sm-12">
				<div class="timeline" style="transform: translateY(-50px);">
            <div class="timeline__wrap">
              <div class="timeline__items">

                <?php
                $query = $con->query('SELECT * FROM agenda');
              if($query->num_rows > 0){
                  while($row = $query->fetch_assoc()){

                      $name = $row['name'];
                      $dat = $row['dat'];
                      $tim = $row['tim'];
                      $descrip=$row['descrip'];
              ?>
                  <div class="timeline__item">
                    <div class="timeline__content">
                      <h2 class="font-weight-bold black-text"><span><i class="fas fa-clock"></i></span>&nbsp;<?php echo $dat; ?></h2>
                      <h5 class="font-weight-bold"><?php echo $name; ?>&nbsp;<span class="text-muted small"><?php echo $tim; ?></span></h5>
                      <p class="text-justify"><?php echo $descrip; ?></p>
                    </div>
                  </div><?php }} ?>
              </div>
            </div>
        </div>
			</div>
		</div>

    <h2 class="text-uppercase text-white text-center black">Photos of the event</h2>
    <div class="row photos">
      <div class="col-sm-12">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="img/hack1.jpg" class="img-responsive">
          </div>
          <div class="item">
            <img src="img/hack2.jpeg" class="img-responsive">
          </div>
          <div class="item">
            <img src="img/hack3.jpg" class="img-responsive">
          </div>
          <div class="item">
            <img src="img/hack4.jpg" class="img-responsive">
          </div>
        </div>
    </div>
    </div>
	</section>
	</div>
	<!-- End of Section Number Three: Agenda --->

	<!--- End of Section Number Four: Mentors --->
	<div id="mentors">
	<section class="container-fluid mentors">
		<div class="container pt-5 pb-5">
			<h1 class="font-weight-bold text-white text-uppercase text-center">Mentors & Speakers</h1>
			<div class="row">
                <?php
                $query = $con->query('SELECT * FROM mentors');
                if($query->num_rows > 0){
                while($row = $query->fetch_assoc()){
                  $imageURL = '../walmart_web-master/images/mentors/'.$row['imgpath'];
                  $name = $row['name'];
                  $desig = $row['desig'];
                  $comp = $row['comp'];
                  $radio = $row['pos'];
                ?>
				<div class="col-sm-3 table">
					<div class="view overlay card">
						<img src="<?php echo $imageURL; ?>">
						<div class="card-body mask rgba-stylish-strong py-5">
							<h4 class="font-weight-bold text-white text-uppercase text-center"><?php echo $name; ?></h4>
							<h6 class="text-white text-center font-weight-bold"><?php echo $desig; ?></h6>
              <h5 class="text-white text-center"><?php echo $comp; ?></h5>
              <p class="text-white text-center"><?php echo $radio; ?></p>
						</div>
					</div>
				</div>
			 <?php }}?>
		  </div>
		</div>
	</section>
	<!-- </div> -->
	<!--- End of Section Number four:mentors --->

	<!--- Start of Section Number five:partners -->
  <!--Start of Section Number Three: Carousel-->
  <div id="problem">
	<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    		<li data-target="#carousel-example-2" data-slide-to="1"></li>
    		<li data-target="#carousel-example-2" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner" role="listbox">
    		<div class="carousel-item active problem"  style="background: linear-gradient(rgba(0,0,0,0.7) , rgba(0,0,0,0.7)), url('https://images.pexels.com/photos/355988/pexels-photo-355988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-position: center; background-attachment: fixed; background-size: cover; object-fit: cover;">
      			<div class="container">
      				<h2 class="font-weight-bold text-white text-uppercase text-center mb-3">Problem statement</h2>
      				<div class="row">
                <!--PHP Part for problem statement-->
                <?php
                $query = $con->query('SELECT * FROM problem');

                if($query->num_rows > 0){
                    while($row = $query->fetch_assoc()){

                        $category = $row['category'];
                        $descrip=$row['descrip'];
                ?>
      					<div class="col-sm-3">
      						<div class="card">
      							<div class="card-header h6 text-center font-weight-bold text-uppercase"><?php echo"$category"; ?></div>
      							<div class="card-body">
      								<h6 class="font-weight-bold">Problem Description</h6>
      								<p class="text-muted text-justify card-text"><?php echo"$descrip"; ?></p>
      							</div>
      						</div>
      					</div> <?php }} ?>
      				</div>
      			</div>
    		</div>
    		<div class="carousel-item hack" style="background: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)) , url('https://images.pexels.com/photos/7111/couch-conference-startup-bro-concentration.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'); background-position: center; background-attachment: fixed; background-size: cover; object-fit: cover;">
    			<div class="container">
    				<h2 class="font-weight-bold text-white mb-3 text-center">Hackathon Rules of the EVENT</h2>
    				<div class="row">
              <?php
              $query = $con->query('SELECT * FROM rules');

              if($query->num_rows > 0){
                  while($row = $query->fetch_assoc()){


                      $id=$row['id'];
                      $rules=$row['rules'];
              ?>
    					<div class="col-sm-12">
							<p class="text-white"><?php echo $rules;?></p>
              </div><?php }} ?>

   					</div>
   				</div>
    		</div>
    		<div class="carousel-item judges" style="background-color: black; ">
      			<div class="container">
      				<h2 class="font-weight-bold text-white text-center text-uppercase">Judges</h2>
      				<div class="row">
      					<div class="col-lg-12">
                  			<div class="owl-carousel owl-theme photos">
                  						<?php
                  							$query = $con->query('SELECT * FROM judges');
                  							if($query->num_rows > 0){
                      						while($row = $query->fetch_assoc()){
                          					$imageURL = '../walmart_web-master/images/judges/'.$row['image'];
                         	 				$name = $row['name'];
                          					$desig = $row['desig'];
                          					$comp = $row['comp'];
                  						?>
            							<div class="item">
      										  <div class="view overlay">
						   						   <img src="<?php echo $imageURL; ?>" class="img-responsive">
						  						    <div class="card-body mask rgba-stylish-strong">
					   	       						<h5 class="font-weight-bold text-white text-uppercase text-center"><?php echo "$name"; ?></h5>
													       <p class="text-white text-justify text-center"><?php echo "$desig"; ?></p>
                        				<p class="text-white text-justify text-center"><?php echo "$comp";  ?></p>
												    </div>
					    					  </div>
      									</div><?php }} ?>      			
                  					
                			</div>
      					</div>
      				</div>
      			</div>
      		</div>	
  			<a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    			<span aria-hidden="true"><i class="fas fa-arrow-circle-left fa-2x text-white"></i></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    			<span aria-hidden="true"><i class="fas fa-arrow-circle-right fa-2x text-white"></i></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</div>
  </div>
</div>
</div>
</div>
	<!--- End of Section Number Three : Carousel --->
  
  <!-- Start of Prizes Section --->
  <section class="prizes">
    <div class="container">
      <h2>Participate & win big prizes</h2>
      <div class="row">
        <?php
          $query = $con->query('SELECT * FROM prizes');
            if($query->num_rows > 0){
              while($row = $query->fetch_assoc()){
              $imageURL = '../walmart_web-master/images/prizes/'.$row['imgpath'];
               $descrip = $row['descrip'];
            ?>
            <div class="col-lg-3 col-sm-6 text-center">
              <img src="<?php echo"$imageURL";?>" style="width:200px; height:200px;">
                <h6 class="text-justify text-center text-white font-weight-bold text-uppercase"><?php echo"$descrip";?></h6>
            </div>
          <?php }} ?>
      </div>
    </div>
  </section>
  <!-- End of Prizes Section --->

	<!--- Start of Section Number Seven: Rules --->
	<div id="rules">
	<section class="container-fluid rules">
		<div class="container">
			<h3 class="font-weight-bold text-uppercase">Frequently Asked Questions</h3>
			<hr>
			<div class="row">
        		<?php
        		$query = $con->query('SELECT * FROM query where faq=1;');
       	 		if($query->num_rows > 0){
          		$anything=0;
          		$thing=0;
            	while($row = $query->fetch_assoc()){
            	$anything++;
            	$thing++;
           		$qsn=$row['qsn'];
            	$ans=$row['ans'];
            	if ($anything%2==0) { ?>
               		<div class="col-sm-6">
                    	<div class="card mb-lg-3 table">
            				<div class="card-header" id="heading<?php echo $thing; ?>">
            					<span class="mb-0">
            						<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $thing; ?>" aria-expanded="true" aria-controls="collapse<?php echo $thing; ?>"><span><i class="fas fa-plus-square mr-sm-2"></i></span><?php echo $qsn; ?></button>
            					</span>
            				</div>
            				<div id="collapse<?php echo $thing; ?>" class="collapse" aria-labelledby="heading<?php echo $thing; ?>">
            					<div class="card-body">
            						<div class="card-text p font-weight-bold"><?php echo $ans; ?></div>
            					</div>
            				</div>
            			</div>
       				</div>
       	       		<?php    }else { ?>
               		<div class="col-sm-6">
                    	<div class="card mb-lg-3 table">
           					<div class="card-header" id="heading<?php echo $thing; ?>">
            					<span class="mb-0">
            						<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $thing; ?>" aria-expanded="true" aria-controls="collapse<?php echo $thing; ?>"><span><i class="fas fa-plus-square mr-sm-2"></i></span><?php echo $qsn; ?></button>
            					</span>
            				</div>
            				<div id="collapse<?php echo $thing; ?>" class="collapse" aria-labelledby="heading<?php echo $thing; ?>">
            					<div class="card-body">
            						<div class="card-text p font-weight-bold"><?php echo $ans; ?></div>
            					</div>
            				</div>
            			</div>
        			</div>
              		<?php    }
             		}} ?>
      			</div>
    		    <h3 class="font-weight-bold text-center mt-2"><em>Still have a question in mind?</em><a href="#" data-toggle="modal" data-target="#modalContactForm" class="btn btn-danger text-uppercase">Ask Us</a></h3>

        </div>
		</div>
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3"><form action="index.php" method="post">
              <div class="md-form mb-5">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="form34" name="qName" class="form-control validate">
                <label data-error="wrong" data-success="right" for="form34">Your name</label>
               </div>
              <div class="md-form mb-5">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="form29" name="qEmail"class="form-control validate">
                <label data-error="wrong" data-success="right" for="form29">Your email</label>
              </div>
              <div class="md-form mb-5">
                <i class="fa fa-tag prefix grey-text"></i>
                <input type="text" id="form32" name="qSubject"class="form-control validate">
                <label data-error="wrong" data-success="right" for="form32">Subject</label>
              </div>
              <div class="md-form">
                <i class="fa fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form8" name="qQuery"class="md-textarea form-control" rows="4"></textarea>
                <label data-error="wrong" data-success="right" for="form8">Your message</label>
              </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button class="btn btn-success" name="send"type="submit"><i class="fa fa-paper-plane-o ml-1"></i>Send </button>
            </div>
          </div>
        </div>
    </div>
	</section>
	</div>
	<!--- End of Section Number Seven:Rules --->

	<!--- Start of Section Number five:partners -->
	<div id="partners">
	<section class="container-fluid partners">
		<div class="container">
		  <h1 class="font-weight-bold text-uppercase text-center">Our Partners</h1>
			<div class="row">
				<div class="col-sm-12">
					<div class="owl-carousel owl-theme">
            <?php
            $query = $con->query('SELECT * FROM sponser');
            if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = '../walmart_web-master/images/sponsors/'.$row['s_image'];
                $name = $row['name'];
                $contact = $row['contact'];
                $email = $row['email'];
                $s_id = $row['s_id'];
            ?>
						<div class="item">
							<img src="<?php echo $imageURL; ?>" class="img-responsive" style="height: 200px;">
						</div><?php }} ?>
					</div>
				</div>
			</div>
		</div>
	</section>

  <section class="container-fluid maps">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div id="mapid"></div>
          <!--<button onclick="getLocation()">Try It</button>-->
          </div>
        <div class="col-sm-3">
          <div class="card text-center">
            <div class="card-header">
              <h6 class="font-weight-bold black-text text-uppercase">Venue Details</h6>
            </div>
            <div class="card-body" style="background-color: #D5D5D5;">
              <p class="card-text">#1300, 13th Cross Road</p>
              <p class="card-text">Indiranagar</p>
              <p class="card-text">Bangalore</p>
              <p class="card-text">560038</p>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>

  <!--- Start of Footer Section --->
  <footer class="container-fluid footer black">
    <div class="container pt-3 pb-3">
      <a href="#"><h2 class="font-weight-bold text-white">Walmart</h2></a>
      <hr class="white">
      <div class="row pt-3 pb-3">
        <div class="col-sm-12 col-lg-10">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a href="#home" class="text-white text-uppercase">Home</a></li>
            <li class="list-inline-item"><a href="#about" class="text-white text-uppercase">About</a></li>
            <li class="list-inline-item"><a href="#agenda" class="text-white text-uppercase">Agenda</a></li>
            <li class="list-inline-item"><a href="#problem" class="text-white text-uppercase">Problem Statement</a></li>
            <li class="list-inline-item"><a href="#mentors" class="text-white text-uppercase">Mentors & Speakers</a></li>
            <li class="list-inline-item"><a href="#sponsors" class="text-white text-uppercase">Sponsors</a></li>
            <li class="list-inline-item"><a href="#rules" class="text-white text-uppercase">FAQ</a></li>
          </ul>
        </div>
        <div class="col-sm-12 col-lg-2 social-media">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter-square"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div class="footer-copyright text-center white">
    <p class="black-text font-weight-bold py-1">Copyrights@Ragi&Sahil 2018</p>
  </div>
  <!--- End of footer section --->

	<!-- jQuery --->
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<!-- Popper JS --->
	<script type="text/javascript" src="JS/popper.min.js"></script>
	<!-- Bootstrap Core JS --->
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<!-- MDB Core JS --->
	<script type="text/javascript" src="JS/mdb.min.js"></script>
	<!-- Timeline JS --->
	<script type="text/javascript" src="JS/timeline.min.js"></script>
	<!-- Owl Carousel JS --->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!--- Maps JS --->
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   	crossorigin=""></script>
   	<script src='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>

	<script type="text/javascript">
		// Set the date we're counting down to
		var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {
    	// Get todays date and time
    	var now = new Date().getTime();
    	// Find the distance between now and the count down date
    	var distance = countDownDate - now;
    	// Time calculations for days, hours, minutes and seconds
    	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    	// Output the result in an element with id="demo"
    	document.getElementById("days").innerHTML = days;
    	document.getElementById("hours").innerHTML = hours;
    	document.getElementById("minutes").innerHTML = minutes;
    	document.getElementById("seconds").innerHTML = seconds;
    	// If the count down is over, write some text
    	if (distance < 0) {
        	clearInterval(x);
        	document.getElementById("demo").innerHTML = "EXPIRED";
    	}
	}, 1000);
		$( '#list a' ).on( 'click', function () {
			$( '#list' ).find( 'li.active' ).removeClass( 'active' );
			$( this ).parent( 'li' ).addClass( 'active' );
		});
    $('#carousel-example-2').hover(function () { 
        $(this).carousel('pause') 
    }, function () { 
        $(this).carousel('cycle') 
    });
		$(function(){
  			jQuery('.timeline').timeline({
  				mode: 'horizontal',
  				forceVerticalMode: '600',
  				visibleItems: 3,
  				horizontalStartPosition: 'top'
  			});
		});
		$(window).scroll(function() {
  			if ($(document).scrollTop() > 200) {
    			$('.navbar').addClass('black');
  			} else {
    			$('.navbar').removeClass('black');
  			}
		});
		$('.owl-carousel').owlCarousel({
    		loop:true,
    		margin:10,
    		nav:true,
    		navText: true,
    		rewindNav:true,
    		autoplay:true,
    		autoplayTimeout:1500,
    		autoHeight:true,
    		dots:false,
    		autoplayHoverPause:true,
    		center: false,
    		rtl:false,
    		responsive:{
        		0:{
            		items:1,
            		nav:true,
            		loop:true,
            		navText:true
        		},
        		600:{
            		items:2,
            		nav:true,
            		loop:true,
            		navText:true
        		},
        		1000:{
            items:3,
          	nav:true,
    				navText: true,
    				rewindNav:true,
    				loop:true
        		}
    		}
		});
		var x = document.getElementById("demo");
    	var mymap = L.map('mapid').setView([12.9475, 77.5802], 50);
    	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}',
    	{
      	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox.streets',
      accessToken: 'pk.eyJ1IjoieGFpb2RyZTA5NiIsImEiOiJjam5wcG9tdHkwMXZqM2xvZWxvbXIzazVnIn0.Mz_b1iR6Q9t7aksAv_C_Yw'
    	}).addTo(mymap);
    	var marker = L.marker([12.9475, 77.5802]).addTo(mymap);
    	marker.bindPopup("Lalbagh West Gate").openPopup();
	</script>
   
</body>
</html>
