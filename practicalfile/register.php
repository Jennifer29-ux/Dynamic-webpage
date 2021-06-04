<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
  <script>

//javascrit function code
function validateForm() // this function validaptes the inputs from Form
{  
//checking wether First name is left blank
var username = document.forms["details"]["uesrname"].value;
if (username == "")  
{
alert("Please enter your Name");
return false;
}
//checking Email address is left blank 
var mail = document.forms["details"]["email"].value;
if (mail == "") 
{
alert("Please enter your Email ID");
return false;
}
//checking if password is left blank 
var password1 = document.forms["details"]["password_1"].value;
if (password1 == "") 
{
alert("Please enter your Password");
return false;
}
//checking if confirm Password is left blank 
var password2 = document.forms["details"]["password_2"].value;
if (password2 == "") 
{
alert("Please confirm your Password");
return false;
}
//checking if confirm Password is left blank 

if (password1 !== password2) 
{
alert("Passwords aren't matching");
return false;
}
}
</script>
<!--the <style> tag specifies all the CSS-->
  <style> 
      body {
          background-image: url("IMAGES/signupbg.jpg");
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
          background-color: rgba(32, 65, 92, 0.623);
          color: rgb(255, 241, 241);
          width: 60%;
          margin-top: auto;
          margin-bottom: auto;
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
  <form method="post" action="register.php" onsubmit="return validateForm()">
  	<?php include('errors.php'); ?>
      <table class="decor text1"  >
<tr>
  	  <td><label>Username</label></td>
  	  <td><input type="text" class="box" name="username" value="<?php echo $username; ?>"
        pattern="[A-Za-z]{1,}" title="No numbers are allowed" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
  	</tr>
<tr>
  	  <td><label>Email</label></td>
  	  <td><input type="email" class="box" name="email" value="<?php echo $email; ?>"></td>
  	</tr>
<tr>
  	  <td><label>Password</label></td>
  	  <td><input type="password" class="box" name="password_1"
        pattern="[A-Za-z0-9]{6,6}" title="6 characters" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
  	</tr>
<tr>
  	  <td><label>Confirm password</label></td>
  	  <td><input type="password" class="box" name="password_2"
        pattern="[A-Za-z0-9]{6,6}" title="6 characters" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
  	</tr>
<tr>
  	  <td style="text-align: center" colspan="2"><button type="submit" class="btn design" name="reg_user">Register</button></td>
  	</tr>
</form>

<tr>
  <form action="login.php">
  	<td style="text-align: center">Already a member?</td>
    <td style="text-align: center"><a href="login.php"><input type="submit" class="design" value="SignIN" ></a></td>
  </form>
</tr>
</table>

</body>
</html>