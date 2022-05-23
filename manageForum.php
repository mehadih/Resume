<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="layout.css" type="text/css" />
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




<div class="wrapper col7" style ="background-color:black;">

<br></br>

<h2 style="color:white;font-size: 25px;"> Feedback Forum.......  </h2>
<br></br>

<?php

include("databaseconnection.php");


$sql = "SELECT * FROM comment";

$topiclist= mysqli_query($con,$sql);

while($view=mysqli_fetch_assoc($topiclist))  
{   
	
	echo $view['Name'];
	echo ":";
	echo $view['Comment'];
	echo".............";
	echo"<a href =deleteComment.php?id=".$view['ID']." ".">Delete</a>";
	echo "<br></br>";
}
?>
<br></br>

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