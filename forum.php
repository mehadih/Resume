<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="head"> 
    <h1><b>Karaoke<b></h1>
    <p>Unimas</p>
    <div id="topnav">
      <ul>
        
		<li><a href="home.php">Home</a></li>
        <li><a href="onlineshop/index.php">Online Shop</a></li>
        <li><a href="registration.php">Registration</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li class="last"><a href="#">Login</a>
          <ul>
            <li><a href="adminlogin.php">Admin</a></li>
            <li><a href="participantlogin.php">Participant</a></li>
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




<div class="wrapper col7" style ="background-color:#af7ac5
;">

<br></br>

<h2 style="color: #17202a;font-size: 25px;"> Feedback Forum.......  </h2>
<form action="addComment.php" method="post">
                    <br></br>
				    <textarea  name ="name" placeholder="Write your name!" class="pb-name-textarea"></textarea>
					<br></br>
                    <textarea name="comment" placeholder="Write your comment here!" class="pb-cmnt-textarea"></textarea>
					<br></br>
                    <button  type="submit">Comment</button>
                    
</form>
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
	echo".";
	echo "<br></br>";
}
?>
<br></br>

</div>

<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 60px;
        width: 60%;
        border: 2px dotted #000;
        border-radius:5px;
        float-left:40px;
        
        
    }
	.pb-name-textarea {
        resize: none;
        padding: 10px;
        height: 40px;
        width: 40%;
        border: 2px dotted #000;
        border-radius:5px;
        float-left:40px;
    }
</style>


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