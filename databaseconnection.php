<?php

$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'Check Server to Reconnect';
}
if(!mysqli_select_db($con,'dk'))
{
	echo'Can not Select Refered Database';
}

?>