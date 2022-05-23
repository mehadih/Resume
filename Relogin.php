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
		<li><a href="">Forum</a></li>
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

<div class="wrapper col7">
<div class='register'>
<br></br>
<br></br>
  <h2 id="login">Re-Log In</h2>
  <form action="participantHome.php" method="post">
  <input name='Email' placeholder='Email' type='text'>
  <input name='Password' placeholder='Password' type='password'>
  <br></br>
  <input class='animated' type='submit' value='Log In'>
 </form>
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
?>
</p>
     
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>