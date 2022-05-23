<?php

include("databaseconnection.php");

$sql = "DELETE FROM registration WHERE ID='$_GET[id]'";

if(mysqli_query($con,$sql))
	header("refresh:2;url=ViewParticipant.php");

?>