
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
    <p>Builder</p>
    <div id="topnav">
      <ul>
        
		<li><a href="home.php">Home</a></li>
        <li><a href="registration.php">Registration</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li class="last"><a href="#">Login</a>
          <ul>
            <li><a href="adminlogin.php">Admin</a></li>
            <li><a href="participantlogin.php">User</a></li>
          </ul>
        </li>
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


<div class="wrapper col2"> 
<p>Welcome to Resume Builder</p>
    <img src="img/banner2.gif"/>
    

</div>


<div class="wrapper col4">
  <div id="container1">
   
   <h4>Here you can create your resume by giving your details and it will generate a automatically web-based resume. You can update your resume with your tracking id. You can choose two different themes for your resume. You have to pay for the professional services of resume proof-reader. In this website have a forum option where you can post announcements and advertisements on job vacancies, information on resume writing. 
Thank You
</h4>
  </div>
  
  
<div id="container2">

    <img src="img/Proofreading-3.jpg"/>
	
</div>
</div>
<div class="wrapper col5">
  <div id="footer">
    
	
    <div id="compdetails">
      <div id="officialdetails">
	  <br></br>

<?php
include("groupinfo.php");
?>
      </div
      <div class="clear"></div>
    </div>
    <!-- End Company Details -->
    <div id="copyright">
      <p class="fl_left">
<?php
include("footer.php");
?></p>
     
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>