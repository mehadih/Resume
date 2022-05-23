


<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Resume Maker">
    <meta name="author" content="Mehedi">
    <title>Resume Maker | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/a.js"></script>  
  </head>

  <body>    
 
    <header> 

      <div id="branding">
        <img src="./img/logo.png">  
      </div>

      <nav>
        <ul>
		  <li><a href="updateresume.php">Update Resume</a></li>
          <li><a href="home.php">Logout</a></li>
          
        </ul>
      </nav>

    </header>
      
      <?php

         include("databaseconnection.php");

         
        $track=$_POST['track'];
      

         $sql = "SELECT * FROM resume WHERE track= '$track'";

         $query = mysqli_query($con, $sql) or die(mysqli_error());

                    

        while($row = mysqli_fetch_assoc($query)) :?>

        <div id="resume-name">          
          <h2> <?php echo $row['name'];?></h3>
        </div>
      
        <div class="container-light-resume">
      
          <form method="post" action="index.php">                      
            <div class ="resume-container">
              
              
              <hr> 
              <h2>Contact</h3>      
              <h3>Email ID <span><?php echo $row['email'];?></span></h3>
              <h3>Phone <span><?php echo $row['phone'];?></span></h3>
              <h3>Location <span><?php echo $row['location'];?></h3>
              <h3>Website <span><?php echo $row['website'];?></span></h3><br>

              
              <hr>
              <h2>About Myself</h3>
              <h3>About <span><?php echo $row['about'];?></span></h3>
              <h3>Profile <span><?php echo $row['profile'];?></span></h3><br>

              
              <hr>
              <h3>Skills and Experiences</h3>
              <h3>Skills <span> <?php echo $row['skill'];?></span></h3>
              <h3>Work <span><?php echo $row['work'];?></span></h3><br>

              
              <hr>
              <h2>Language and Accomplishment</h3>
              <h3>Awards <span><?php echo $row['award'];?></span></h3>
              <h3>Languages <span><?php echo $row['language'];?></span></h3>

            
              <hr>
              <h2>Interest and Hobbies</h3>
              <h3>Interest <span><?php echo $row['interest'];?> </span></h3> 

              
              <hr>
              <h3>References</h3>
              <h3>References <span><?php echo $row['reference'];?> </span></h3>
             
            </div>

          </form>
        </div>
      <?php endwhile;?> 
	  <div class="container-dark-resume-theme">
    
	  <form  action="dark-theme.php" method="post">
	     <div>
           <label>ID:&nbsp;&nbsp;<input type="text" name = "track" placeholder="Type Tracking No" required></label>
          </div>
        <button type="submit" class="button-resume-dark" name="dark-theme" >DARK THEME</button>
      </form>
      </div>  

    </div>

  </body>


<?php
include("footer.php");
?></p>
</html>
