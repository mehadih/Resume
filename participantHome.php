
<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="layout.css" type="text/css" />

<script type="text/javascript">

    
</script>

</head>


<body id="top">
<div class="wrapper col1">
  <div id="head"> 
    <h1><b>Resume<b></h1>
    <p>Builder</p>
    <div id="topnav">
      <ul>
	    <li><a href="onlineshop/index.php">Online Shop</a></li>
        <li><a href="UptadeParticipant.php">Update Information</a></li>
		<li><a href="createresume.php">Make Resume</a></li>
		<li><a href="home.php">Logout</a></li>
      </ul>
    </div>
    
	
	<div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="submit" name="go" id="go" value="GO" />
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
        </fieldset>
      </form>
    </div>
	
	
  </div>
</div>

<div class="wrapper col3">
<br></br>
<table class="responstable">
<?php

include("databaseconnection.php");


$EMAIL= $_POST['Email'];
$PASSWORD= $_POST['Password'];


$sql = "SELECT * FROM registration WHERE email='$EMAIL' AND password='$PASSWORD' ";





$PARTICIPANT= mysqli_query($con,$sql);

if($reg=mysqli_fetch_assoc($PARTICIPANT))
{   

    echo"<tr>";
	echo"<td>Participant ID :</td>";
	echo"<td>".$reg['ID']." "."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>Name :</td>";
	echo"<td>".$reg['Name']." "."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>Age  :</td>";
	echo"<td>".$reg['Age']." "."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>IC   :</td>";
	echo"<td>".$reg['Ic']." "."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>Phone:</td>";
	echo"<td>".$reg['phone']." "."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>Email:</td>";
	echo"<td>".$reg['email']." "."</td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td>Password:</td>";
	echo"<td>".$reg['password']." "."</td>";
	echo"</tr>";
	echo"<Input type=\"submit\" Value =\"View Unique ID\" onclick =\"uni();\">";
}
else {
	echo "<h2>Wrong EMAIL or PASSWORD........</h2> ";
	header("refresh:1;url=participantlogin.php");
}
?>
</table>
<br></br>


<br></br>

<script>
function uni(){
	 
	var fname =  "<?php echo $reg['Name'];?>";

	var ic =     "<?php echo $reg['Ic'];?>";
	
	var i=0;
	
	 var fname1 = fname.split(" ");
	 var j= fname1.length;
	
	
	
	
	while(i<j){
	
	if(fname1[i]=='Bin')
	{
	fname1.splice(i,1);

	}
	else if(fname1[i]=='bin')
	{
	fname1.splice(i,1);

	}
	else if(fname1[i]=='Binti')
	{
	fname1.splice(i,1);

	}
	else if(fname1[i]=='binti')
	{
	fname1.splice(i,1);

	}
	else if(fname1[i]=='Anak')
	{
	fname1.splice(i,1);

	}
	
	else if(fname1[i]=='anak')
	{
	fname1.splice(i,1);

	}
	i++;
	}
	 
	 var k=fname1.length;
	 var id = "";
     i=0;
	 while(i<k-1)
	 
	 {
	 id=id+fname1[i].slice(0,1);
	 i++;
	 }
	 
	 var iclast=ic.length;
	 var icnew = iclast-4;
	 
	 id=id+fname1[k-1]+ic.slice(icnew,iclast);
	 
	 var id1 =id.toLowerCase();
	 
	
	 alert("Your Unique ID is: "+id1);
}
	
</script>


</div>
 

<div class="wrapper col5">
  <div id="footer">
    
	
    <div id="compdetails">
        <?php
include("groupinfo.php");
?>
      
    </div>
    <!-- End Company Details -->
    <div id="copyright">
      <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - Group MD5</p>
     
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>