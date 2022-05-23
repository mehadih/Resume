


<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="layout.css" type="text/css" />


</head>


<body id="top">
<div class="wrapper col1">
  <div id="head"> 
    <h1><b>RESUME<b></h1>
    <p>Builder</p>
    <div id="topnav">
      <ul>
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

<div class="wrapper col3">

<div class='register'>
<br></br>
<br></br>
<h2 style="color:black;font-size: 25px;"> Update Information </h2>
 <form action="update.php" method="post"> 
 <input name='id' placeholder='Input Participant ID to be Updated' type='text' id='id'>
 <input name='ic' placeholder='Input Your IC No.' type='text' id='ci'>
  <input name='name' placeholder='Input to Update your Name' type='text' id='name'>
  <input name='age' placeholder='Input to Update your Age' type='text' id='ag'>
  <input name='mobile' placeholder='Input to update Phone Number' type='text' id='mob'>
   <input name='email' placeholder='Input to Update Email address' type='text' id='email'>
  <input name='password' placeholder='Type new password' type='password' id='pass'>
  <br></br>
 <input name='Update' class='animated' type='submit'value='Update'>
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