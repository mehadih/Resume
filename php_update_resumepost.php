


  <?php   
  
  include("databaseconnection.php");
  $track=$_POST['track'];
  $name= $_POST ['name'];
  $about= $_POST ['about'];
  $website= $_POST ['website'];
  $email= $_POST ['email'];
  $phone= $_POST ['phone'];
  $location= $_POST ['location'];
  $profile= $_POST ['profile'];
  $skill= $_POST ['skill'];
  $work= $_POST ['work'];
  $award= $_POST ['award'];
  $language= $_POST ['language'];
  $interest= $_POST ['interest'];
  $reference= $_POST ['reference'];
  

      
  

$sql="UPDATE resume SET track='$track',name='$name', about='$about', website='$website', email='$email', phone='$phone', location='$location', profile='$profile', skill='$skill', work='$work', award='$award', language='$language', interest='$interest', reference='$reference' WHERE track='$track'"; 
  
if(!mysqli_query($con,$sql))
{
	echo'Database Update UnSuccessfull';
}
else{
	echo'<h1>Database Updated Successfully</h1>';
}

header("refresh:1;url=createresume.php");




?>