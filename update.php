<?php


	   include("databaseconnection.php");

$newID = $_POST['id'];
$newName = $_POST['name'];
$newAge = $_POST['age'];
$newIC = $_POST['ic'];
$newMobile = $_POST['mobile'];
$newEmail = $_POST['email'];
$newPassword = $_POST['password'];
$sql = "UPDATE registration SET ID= '$newID',Name='$newName',Age='$newAge',Ic='$newIC',phone='$newMobile',email='$newEmail',password='$newPassword'  WHERE ID='$newID' AND Ic='$newIC'";

if(!mysqli_query($con,$sql))
{
	echo'Update UnSuccessfull';
}
else{
	echo'<h1>Successfully Updated......Please Re-Login.....</h1>';
}

header("refresh:5;url=Relogin.php");



?>