
<?php
include("sessions.php");
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<!--Meta Tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="CSS/mdb.min.css">
	<title>SignUp</title>
	<style type="text/css">
	html,body{
	margin:0px;
	padding: 0px;
	}
	.col-sm-2{
	background-color: #2F4050;
	width: 100%;
	height: 100vh;
	padding:50px 0px;
	}
	.navbar{
    border: 0;
   	box-shadow: none;
   	width: 15vw;
	}
	.navbar.navbar-default .navbar-collapse {
    border: 0;
    box-shadow: none;
	}
	.col-sm-2 ul{
		display: block;
	}
	.col-sm-2 ul li{
		padding: 10px;
	}
	.col-sm-2 ul li a{
		color: #9FB1C2;
		font-size: 16px;
		font-family: Poppins;
	}
	.col-sm-2 ul li a:hover{
		color: #FFFFFF;
		background-color: #1AB394;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
	}
	.col-sm-2 ul .active a{
		color: #FFFFFF;
		background-color: #27AAE1;
		font-weight: bolder;
	}
	.col-sm-10{
		background-color: #D7D7DF;
		padding: 50px 100px;
	}
	.navbar{
		display: inline-block;
	}

	/* Media Queries */
	@media screen and (max-width: 767px){
	.navbar{
    border: 0;
   	box-shadow: none;
   	width: 100vw;
   	background-color: #2F4050;
	height:50px;
	}
	.col-sm-2{
		width: 0%;
		height: 0px;
	}
	.col-sm-10{
		padding: 250px 0px;
		background-color: #D7D7DF;
		height: 100vh;
	}
	.navbar-toggler{
		z-index: 100;
		float: left;
	}
	.navbar-brand{
		float: right;
	}
	#collapsibleNavbar {
    	height: 100%; /* 100% Full-height */
    	width: 100%; /* 0 width - change this with JavaScript */
    	position: fixed; /* Stay in place */
    	z-index: 1; /* Stay on top */
    	top: 50px; /* Stay at the top */
    	left: 0px;
    	background-color: #111; /* Black*/
    	overflow-x: hidden; /* Disable horizontal scroll */
    	padding-top: 60px; /* Place content 60px from the top */
    	transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
		background-color: black;
	}
	#collapsibleNavbar ul li {
  		border-bottom: 1px solid #dcdcdc;
  		padding: 8px 8px 8px 32px;
    	text-decoration: none;
	}
	#collapsibleNavbar ul li a{
    	display: block;
    	transition: 0.3s;
    	color: white;
		font-size: 16px;
		font-family: Poppins;
	}
	#collapsibleNavbar ul li a:hover{
		color: #FFFFFF;
		background-color: #1AB394;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
	}
}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<nav class="navbar navbar-default navbar-expand-xl fixed-top">
					<a class="text-uppercase font-weight-bold text-white navbar-brand">Dashboard</a>
					<button class="navbar-toggler" onclick="openNav()" onclick="closeNav()" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"><i class="fa fa-bars text-white" aria-hidden="true"></i></span>
  				</button>
  				<div class="collapse navbar-collapse" id="collapsibleNavbar">
  					<ul class="nav nav-pills nav-stacked md-pills " id="main">
						<li class="list-item">
							<a href="ad_dashboard.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-home"></span></i>DASHBOARD</a>
						</li>
						<li class="list-item active">
							<a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
						</li>
						<li class="list-item">
							<a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
						</li>
						<li class="list-item">
							<a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
						</li>
						<li class="list-item">
							<a href="prize.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-award"></i>&nbsp;</span>Prizes</a>
						</li>
						<li class="list-item">
							<a href="rules.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-star"></i>&nbsp;</span> Rules</a>
						</li>
						<li class="list-item">
							<a href="query.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-question-circle"></i>&nbsp;</span>Queries</a>
						</li>
						<li class="list-item">
							<a href="sponsors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-user-tie"></i>&nbsp;</span>Sponsors</a>
						</li>
						<li class="list-item">
							<a href="problem.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span> Problem Statement</a>
						</li>
						<li class="list-item">
							<a href="mentors.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-code"></i>&nbsp;</span>Mentors and Speakers</a>
						</li>
						<li class="list-item">
							<a href="logout.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-out-alt"></i>&nbsp;</span> Logout</a>
						</li>
					</ul>
  				</div>
			</nav>		
		</div>
			<div class="col-sm-10">
	    		<table class="table table-hover table-responsive table-striped table-bordered table-dark" id="makeEditable">
	     			<thead class="font-weight-bold text-center">
	      			<tr>
	        			<th>ID</th>
	        			<th>Team Name</th>
	        			<th>Description</th>
	        			<th>Member 1 Name</th>
	        			<th>Member 1 Email</th>
	        			<th>Member 1 Contact</th>
	        			<th>Member 2 Name</th>
	        			<th>Member 2 Email</th>
						<th>Member 2 Contact</th>
						<th>Member 3 Name</th>
						<th>Member 3 Email</th>
						<th>Member 3 Contact</th>
						<th>Member 4 Name</th>
						<th>Member 4 Email</th>
						<th>Member 4 Contact</th>
						<th>Date of Registration</th>
	      			</tr>
	    			</thead>
					<?php
					$query = $con->query('SELECT * FROM rsvp');
					if($query->num_rows > 0){
						while($row = $query->fetch_assoc()){
							$team_name=$row['team_name'];
							$describes=$row['describes'];
							$m1_name=$row['m1_name'];
							$m1_email=$row['m1_email'];
							$m1_contact=$row['m1_contact'];
							$m2_name=$row['m2_name'];
							$m2_email=$row['m2_email'];
							$m2_contact=$row['m2_contact'];
							$m3_name=$row['m3_name'];
							$m3_email=$row['m3_email'];
							$m3_contact=$row['m3_contact'];
							$m4_name=$row['m4_name'];
							$m4_email=$row['m4_email'];
							$m4_contact=$row['m4_contact'];
							$datime=$row['datime'];
						?>
	    			<tbody>
	      				<tr>
	        			<td><ol><li></li></ol></td>
	        			<td><?php echo $row['team_name']; ?></td>
	        			<td><?php echo $row['describes']; ?></td>
	        			<td><?php echo $row['m1_name']; ?></td>
	        			<td><?php echo $row['m1_email']; ?></td>
	        			<td><?php echo $row['m1_contact']; ?></td>
	        			<td><?php echo $row['m2_name']; ?></td>
	        			<td><?php echo $row['m2_email']; ?></td>
						<td><?php echo $row['m2_contact']; ?></td>
						<td><?php echo $row['m3_name']; ?></td>
						<td><?php echo $row['m3_email']; ?></td>
						<td><?php echo $row['m3_contact']; ?></td>
						<td><?php echo $row['m4_name']; ?></td>
						<td><?php echo $row['m4_email']; ?></td>
						<td><?php echo $row['m4_contact']; ?></td>
						<td><?php echo $row['datime']; ?></td>
	      				</tr>
					<?php }}
							else{ ?>
								<center>  <h1>NO Applicants YET!</h1></center>
							<?php } ?>
	    				</tbody>
	  				</table>
	  			</div>
		</div>
	</div>

	<!-- jQuery --->
	<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
	<!-- Popper JS --->
	<script type="text/javascript" src="JS/popper.min.js"></script>
	<!-- Bootstrap Core JS --->
	<script type="text/javascript" src="JS/bootstrap.min.js"></script>
	<!-- MDB Core JS --->
	<script type="text/javascript" src="JS/mdb.min.js"></script>
	<script type="text/javascript">
		$( '#main a' ).on( 'click', function () {
			$( '#main' ).find( 'li.active' ).removeClass( 'active' );
			$( this ).parent( 'li' ).addClass( 'active' );
		});
		function openNav() {
    		document.getElementById("collapsibleNavbar").style.width = "70vw";
	}
		/* Set the width of the side navigation to 0 */
	function closeNav() {
    		document.getElementById("collapsibleNavbar").style.width = "0";
	}
	</script>
</body>
</html>
