<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>sign in</title>

  <script>

      //javascrit function code
    function validateForm() // this function validaptes the inputs from Form
  {  
    //checking wether name is left blank
    var username = document.forms["details"]["username"].value;
    if (username == "")  
    {
      alert("Please enter your Name");
      return false;
    }
    //checking wether password is left blank
    var password= document.forms["details"]["password"].value;
    if (password == "") 
    {
      alert("Please enter your password");
      return false;
    }
    
  }
    </script>
    <style> 
            body {
                background-image: url("IMAGES/loginBG.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                
            }
            .navbar{
              float: left;
              font-size: 30px;
              color: white;
              text-align: center;
              padding: 15px 17px;
              text-decoration: none;
            }
            table.decor{
                background-color: rgba(2, 83, 126, 0.5);
                color: rgb(255, 241, 241);
                width: 50%;
                margin-top: 100px;
           
                margin-left: auto;
                margin-right: auto;
                margin-top: 15px;
                overflow: hidden;
                padding:2px;
                border-spacing:20px;     
            }
           
            .design{
                padding: 13px 30px;
                color: rgb(247, 246, 250);
                background-color: transparent;
                font-size: 25px;
                font-weight: bold;
                }
            input.box{
                padding: 5px 45px;
                border: 2.5px solid rgb(255, 255, 255);
                background-color: rgba(156, 205, 228, 0.719);
                color: black;
            }
            select.content{
              font-family: inherit;
              color: inherit;
              font-size: inherit;
            }
            
            ul{
              list-style-type: none; 
              padding: 12px 30px;
              overflow: hidden;
              background-color: rgb(135, 66, 199, 0.3);
              margin-left: 250px;
            }
            li{
            
              margin-left: 20px;
              padding: 10px 30px;
              font-size: 24px;
              float: left;
            }
            li a{
              display: block;
              color: cornsilk;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }
            .text1{
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
              text-align: right;
              font-size: 25px;
            }
            .tabletext {
              text-align: center;
              text-transform: uppercase;
              color: rgb(27, 68, 36, 0.5);
              color: white;
            }
            .heading{
              text-transform: uppercase;
              color: rgb(255, 255, 255);
              font-weight: bold;
              font-size: 40px;
              padding: 20px;
              background-color: rgb(133, 162, 203, 0.4);
            }
    </style>
</head>
<body>
<div class="navbar">
  ATMC  
</div>
<br>
<br>
<br>

<!--<h1 class="heading">ATMC</h1>-->	 
  <form method="post" action="login.php" id="details" onsubmit="return validateForm()">
  <table class="decor text1"  > 
  <tr>
     <td colspan="2">
        <h1 class="tabletext">LOGIN</h1>
     </td>
    </tr>
    <tr>
  		<td><label>Username</label></td>
        <td><input type="text" name="username" class="box" 
        pattern="[A-Za-z]{1,}" title="No numbers are allowed" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
    </tr>
    <tr>
  		<td><label>Password</label></td>
  		<td><input type="password" name="password" class="box"
          pattern="[A-Za-z0-9]{6,6}" title="6 characters" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
  	</tr>
    <tr>
  		<td colspan="2" style="text-align: center;"><input type="submit" class="btn design" name="login_user" value="Login" ></td>
  	</tr>
    <tr>        
    </table>
    </form>
    <table class="decor text1">
    <tr >
  		<td style="text-align: center;">Not yet a member?&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: center;"> <a href="register.php"><input type="submit" class="design" value="SignUP">  </a></td>
    </tr>
    </table>

</body>
</html>