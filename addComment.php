<?php
include("databaseconnection.php");

$Name      = $_POST['name'];
$Comment   = $_POST['comment'];

$sql = "INSERT INTO comment (Name,Comment) VALUES ('$Name','$Comment')";

if($in=mysqli_query($con,$sql))
{
	header("refresh:1;url=forum.php");
}

?>