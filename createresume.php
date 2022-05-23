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
      
            
    <div class="container-dark-resume-info">


      <form  action="php_resumepost.php" method="post">
       

        <h2> Create Your Resume </h2>

        <div class ="level-container">
		    <div>
           <label>Tracking ID<input type="text" name = "track" placeholder="Type a Tracking No" required></label>
          </div>
              
          <div>
           <label>Name<input type="text" name = "name" placeholder="Type your Name" required></label>
          </div>
          <div>
            <label> Email ID<input type = "text" name="email" placeholder="Type your Email" required></label>
          </div>
        
          <div>
            <label>Phone <input type = "text" name="phone" placeholder="Enter your Phone or Mobile Number" required></label>
          </div>     
   
          <div>
           <label>Location <input name = "location" placeholder="Where are you from" required></textarea>
          </div>

          <div>
            <label>Website <input type = "text" name="website" placeholder="Type URL of your Website" required></label>
          </div>

          <div>
           <label>About<textarea name = "about" placeholder="Type something About you" required ></textarea></label>
          </div>

          <div>
           <label>Profile<textarea name = "profile" placeholder="Write something about your Profile" required></textarea>
          </div>
          
          <div>
            <label>Skills<textarea name = "skill" placeholder="What are the Skills you have" required></textarea>
          </div>

          <div>
            <label>Work<textarea name = "work" placeholder="Your history in Working field" required></textarea>
          </div>
          
          <div>
           <label>Awards<textarea name = "award" placeholder="Have you achieved any Awards" required></textarea>
          </div>

          <div>
           <label>Languages<textarea name = "language" placeholder="What are the Languages you know" required></textarea>
          </div>
          
          <div>
            <label>Interest<textarea name = "interest" placeholder=" about Interest" required></textarea>
          </div>
          
          <div>
            <label>References<textarea name = "reference" placeholder="Your Reference of Work" required></textarea>
          </div>

          <div>
            <button type="submit" class="button-resume" name="postresume">SAVE RESUME INFORMATION</button>
          </div>

        </div>
      </form>

    </div>

    <div class="container-dark-resume-theme">
    
	  <form  action="dark-theme.php" method="post">
	     <div>
           <label>ID :&nbsp; &nbsp;<input type="text" name = "track" placeholder="Type Tracking No" required></label>
          </div>
        <button type="submit" class="button-resume-dark" name="dark-theme" >DARK THEME</button>
      </form>
	  <form  action="light-theme.php" method="post">
	     <div>
           <label>ID:&nbsp; &nbsp;<input type="text" name = "track" placeholder="Type Tracking No" required></label>
          </div>
          <button type="submit" class="button-resume-light" name="light-theme" >LIGHT THEME</button>
		  </form>
      </div>  
    
<p class="fl_left">
<?php
include("footer.php");
?>
</p>

  </body>

  
    
    


</html>
