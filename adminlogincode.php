<?php



include("databaseconnection.php");


$USER= $_POST['user'];
$PASSWORD= $_POST['password'];


$sql = "SELECT * FROM admin WHERE user='$USER' AND password='$PASSWORD' ";





$PARTICIPANT= mysqli_query($con,$sql);

if($reg=mysqli_fetch_assoc($PARTICIPANT))
{   
header("refresh:1;url=ViewParticipant.php");
}
else
{   echo"<h2>Wrong UserName or Password........";
	header("refresh:1;url=adminlogin.php");
}
?>