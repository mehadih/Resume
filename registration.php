
<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="layout.css" type="text/css" />

<script type="text/javascript">

     function uni(){
	 
	 var fname = document.getElementById("firnam").value;
	 var lname = document.getElementById("lasnam").value;
	  var ic = document.getElementById("ci").value;
	
	 var fname1 = fname.slice(0,2);
	 var ic1    = ic.slice(8,12);
	
	 var id =fname1+lname+ic1;
	 document.getElementById("unique").innerHTML=id;
	 return false;
	var phpid=id;
	document.getElementById("php").innerHTML=phpid;
	}
</script>

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

<div class="wrapper col3">
<div class='register'>
<br></br>
<br></br>
  <h2>Registration</h2>
 
<form name="regis" action="participantinput.php"   method="post"> 
  <input name='name' placeholder='Your Name' type='text' id='name'>
  <input name='age' placeholder='Enter your Age' type='text' id='ag'>
  <input name='ic' placeholder='Input IC No.' type='text' id='ci'>
  <input name='mobile' placeholder='Phone Number' type='text' id='mob'>
   <input name='email' placeholder='Enter your Email address' type='text' id='email'>
  <input name='password' placeholder='Type a password for Future log in' type='password' id='pass'>
  <br></br>
 <input class='animated' type='submit'value='Register'>
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