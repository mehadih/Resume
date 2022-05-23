<?php

include("databaseconnection.php");

$sql = "DELETE FROM comment WHERE ID='$_GET[id]'";

if(mysqli_query($con,$sql))
	header("refresh:1;url=manageForum.php");

?>