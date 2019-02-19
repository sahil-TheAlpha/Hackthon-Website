<?php
include ("connect.php");
include("sessions.php");
$id=$_GET['id'];
$descrip=$_GET['descrip'];
$delete="DELETE from prizes where id='$id'";
$res=mysqli_query($con, $delete);
if ($res) {

  $msg = "The prize  is deleted. ";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='prize.php';</script>";

}
else{

  $msg = "Failed to delete the prize .";
  echo "<script type='text/javascript'>alert('$msg');window.location.href='prize.php';</script>";

}
header("location: prize.php");

?>
