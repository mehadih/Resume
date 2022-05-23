<?php


include("databaseconnection.php");


$Name= $_POST['name'];
$Age=  $_POST['age'];
$IC=   $_POST['ic'];
$PHONE=$_POST['mobile'];
$EMAIL= $_POST['email'];
$PASSWORD= $_POST['password'];




$sql = "INSERT INTO registration (Name,Age,Ic,phone,email,password) VALUES ('$Name','$Age','$IC','$PHONE','$EMAIL','$PASSWORD')";

if(!mysqli_query($con,$sql))
{
	echo'Registration UnSuccessfull';
}
else{
	echo'<h1>Registration Successfull</h1>';
}

header("refresh:1;url=registration.php");

?>