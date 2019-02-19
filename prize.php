
<?php
include("sessions.php");
include("connect.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }

     if (isset($_POST['insert'])) {
       $target = "../walmart_web-master/images/prizes/".basename($_FILES["imgpath"]["name"]);
       $fileimg=$_FILES['imgpath']['name'];
       $error = $_FILES['imgpath']['error'];
       $imgtype=$_FILES['imgpath']['type'];
       $ext= GetImageExtension($imgtype);

         $descrip = mysqli_real_escape_string($con, $_POST['descrip']);
      $sql = "INSERT into prizes (descrip, imgpath) VALUES ('$descrip','$fileimg')";
       mysqli_query($con, $sql);

       if (move_uploaded_file($_FILES['imgpath']['tmp_name'],$target)) {

         $msg = "Image was uploaded successfully";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='prize.php';</script>";

       }
       else{

         $msg = "Failed to upload Image";
         echo "<script type='text/javascript'>alert('$msg');window.location.href='prize.php';</script>";

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
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" type="text/css" href="CSS/mdb.min.css">
	<title>PRIZES</title>
	<style type="text/css">
	html,body{
	margin:0px;
	padding: 0px;
	}
	.left{
	background-color: #2F4050;
	width: 100%;
	height: 100vh;
	padding:50px 0px;
	}
	.left h1{
		font-family: Roboto;
		font-size: 30px;
	}
	.left .navbar{
		display: inline-block;
	}
	.left .navbar ul{
		display: block;
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
	.left ul li{
		padding: 10px;
	}
	.left ul li a{
		color: #9FB1C2;
		font-size: 16px;
		font-family: Poppins;
	}
	.left ul li a:hover{
		color: #1AB394;
		background-color: #FFFFFF;
		font-weight: bold;
		display: block;
		transform: scale(1.2);
		transform: translateX(10px);
	}
	.left ul .active a{
		color: #FFFFFF;
		background-color: #27AAE1;
		font-weight: bolder;
	}
	.card-footer button{
		background-color: #2BBBAD;
	}
	.center{
		/*padding: 50px 10px;*/
		background-color: #D7D7DF;
	}
	@media screen and (max-width: 767px){
	.col-sm-2{
		width: 0%;
		height: 0px;
	}
	.navbar{
		background-color: #2F4050;
		height:50px;
    	border: 0;
   		box-shadow: none;
   		width: 100vw;
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
	.center{
		padding: 50px 0px;
		background-color: #D7D7DF;
	}
}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
      <div class="col-sm-2 col-md-2 left">
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
					<li class="list-item">
						<a href="rsvp.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-sign-in-alt">&nbsp;</span></i>Applicants</a>
					</li>
					<li class="list-item">
						<a href="agenda.php" class="text-uppercase font-weight-bold"><spam><i class="fas fa-edit"></i>&nbsp;</span>Agenda</a>
					</li>
					<li class="list-item">
						<a href="judges.php" class="text-uppercase font-weight-bold"><span><i class="fas fa-layer-group"></i>&nbsp;</span>Judges</a>
					</li>
					<li class="list-item active">
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
			<div class="col-sm-4 col-md-4 center">
				<div class="card">
					<div class="card-header h1 font-weight-bold text-uppercase text-center">Prizes</div>
					<div class="card-body">
						<div class="form">
							<form action="prize.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="image">Upload the prize poster:</label>
								<input type="file" name="imgpath" id="image" class="form-control py-1">
							</div>
							<div class="form-group">
								<label for="description">Description:</label>
								<textarea class="form-control" name="descrip" id="description" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="text-center">
							<button class="btn font-weight-bold text-white" name="insert" value="submit">Add Prize</button>
						</div>
					</div>
				</div></form>
			</div>
			<div class="col-sm-6 col-md-6 right">
				<table class="table table-hover table-striped table-bordered table-responsive table-dark">
					<thead class="font-weight-bold text-center">
						<tr>
            <th><b>S.No</th>
						<th><b>Prize Image</th>
						<th><b>Description</th>
						<th><b>Edit</th>
						<th><b>Delete</th>
						</tr>
					</thead>
          		<?php
          		$query = $con->query('SELECT * FROM prizes');
          		if($query->num_rows > 0){
              		while($row = $query->fetch_assoc()){
                  	$imageURL = '../walmart_web-master/images/prizes/'.$row['imgpath'];
                  	$descrip = $row['descrip'];
          		?>
				<tbody>
					<tr>
            <td><ol><li></li></ol></td>
						<td> <img src=" <?php echo $imageURL; ?> " style="height:150px" alt="Posters"> </td>
						<td class="text-justify"><?php echo"$descrip";?></td>
            <td><a href="edit_prize.php?id= <?php echo $row["id"];  ?> " class= "btn btn-sm text-center btn-success text-upppercase"><b>Edit</a></td>
            <td><a href="del_prize.php?id=<?php echo $row["id"];  ?>" class= "btn btn-sm btn-danger text-center text-upppercase"><b>Delete</a></td>
						</tr>
          <?php }
          }
          else{ ?>
            <center>  <h1>NO PRIZES YET</h1></center>
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
	<!-- Bootstable JS --->
	<script type="text/javascript" src="JS/bootstable.js"></script>
	<script type="text/javascript">
		$( '#main a' ).on( 'click', function () {
			$( '#main' ).find( 'li.active' ).removeClass( 'active' );
			$( this ).parent( 'li' ).addClass( 'active' );
		});
	</script>

</body>
</html>
