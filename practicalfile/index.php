<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
            body {
               background-image: url("IMAGES/bg.jpg");
               background-size: 100% 100%;

            }
            .navbar {
              overflow: hidden;
              background-color: rgb(133, 162, 203, 0.4);
            

            }
            
            .navbar a {
              float: left;
              font-size: 30px;
              color: white;
              text-align: center;
              padding: 15px 17px;
              text-decoration: none;
  
            }
            p {
    
                font-size: 30px;
                font-family: Arial, Helvetica, sans-serif;
                font-style: normal;
                color: white;
                background-color: transparent;    
            }
    </style>
</head>
<body>

	  <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="sessions.php"> TUTE SESSIONS </a>
  <a href="index.php?logout='1'" style="color: red;">LOG OUT</a>
</div>

<br>
<table style="width: 60%;float: left;color: white;background-image: url(IMAGES/atmc4.jpg);width: 680px;height: 500px;">
  <tr>
    <td valign="top"><p><br>The College's strategic vision has been to expand the ATMC's operations into the international sphere and a considerable amount of resources and energy has been dedicated to the pursuit of this goal.</p></td>
  </tr>

</table>
<table style="width: 40%; border-spacing: 35px;float: right;">
  <tr>
    <td><img src="IMAGES/india.png" style="width: 250px ;height: 200px;"></td>
    <td><img src="IMAGES/brazil.jpg" style="width: 250px ;height: 200px;"></td>
  </tr>
  <tr>
    <td><img src="IMAGES/london.jpg" style="width: 250px ;height: 200px;"></td>
    <td><img src="IMAGES/australia.jpg" style="width: 250px ;height: 200px;"></td>
  </tr>
</table>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	
    <?php endif ?>

		
</body>
</html>