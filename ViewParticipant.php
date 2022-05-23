
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
    <p>Unimas</p>
    <div id="topnav">
      <ul>
        
		<li><a href="ViewParticipant.php">Home</a></li>
        <li><a href="onlineshop/admin.php">Edit Product</a></li>
		 <li><a href="manageForum.php">Manage Forum</a></li>
		<li class="last"><a href="home.php">Logout</a></li>
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

<div class="wrapper col8">
<br></br>
<h1  style="color:white;text-align:center;">Participant Details</h1>
<table class="responstable">

<tr>

<th width="40">ID</th>
<th width="150">Name</th>
<th width="60" >Age</th>
<th width="130">IC</th>
<th width="130">Phone</th>
<th width="250">Email</th>
</tr>


<?php
 include("databaseconnection.php");


$sql = "SELECT * FROM registration";

$PARTICIPANT= mysqli_query($con,$sql);

while($reg=mysqli_fetch_assoc($PARTICIPANT))  
{   
	echo"<tr>";
	echo"<td>".$reg['ID']." "."</td>";
	echo"<td>".$reg['Name']." "."</td>";
	echo"<td>".$reg['Age']." "."</td>";
	echo"<td>".$reg['Ic']." "."</td>";
	echo"<td>".$reg['phone']." "."</td>";
	echo"<td>".$reg['email']." "."</td>";
	echo"<td><a href =delete.php?id=".$reg['ID']." ".">Delete</a></td>";
	echo"</tr>";
	
}

  ?>

</table> 

</div>
 



<div class="wrapper col5">
  <div id="footer">
    
	
    <div id="compdetails">
      <div id="officialdetails">
	  <br></br>
       <?php include("groupinfo.php");?>
      </div
      <div class="clear"></div>
    </div>
    <!-- End Company Details -->
    <div id="copyright">
      <p class="fl_left"><?php include("footer.php");?></p>
     
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>