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
  

      
  $sql = "INSERT INTO resume (track,name, about, website, email, phone, location, profile, skill, work, award, language, interest, reference) VALUES('$track','$name', '$about', '$website','$email',
   '$phone', '$location','$profile', '$skill', '$work', '$award', '$language', '$interest', '$reference')";
  //$query = mysql_query($con,$sql)


     
  
if(!mysqli_query($con,$sql))
{
	echo'Database Input UnSuccessfull';
}
else{
	echo'<h1>Database Input Successfull</h1>';
}

header("refresh:1;url=createresume.php");




?>