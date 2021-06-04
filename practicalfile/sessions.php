<?php 

include('server.php'); 

?>
<html>
    <head>
        <title>Sessions</title>
        <script>

          //javascrit function code
        function validateForm() // this function validaptes the inputs from Form
      {  
        //checking wether username is left blank
        var username = document.forms["booking"]["username"].value;
        var date= document.forms["booking"]["date"].value;
        if (username == "")  
        {
          alert("Please enter your username");
          return false;
        }
        //checking wether date is not specified
        else(date == "") 
        {
          alert("Please select a date");
          return false;
        }
      
      }
        </script>
        <style>
            body {
               background-image: url("IMAGES/sessionsbg.jpg");
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
            div.left{
              margin-top: 20px;
        
              background-color: rgb(133, 162, 203, 0.5);
              float: left;
    
            }
            div.booking{
              margin-top: 20px;
              margin-left: 5px;
              margin-right:0%;
              float: right;
              
            }
            
            p.course{
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                font-style: normal;
        
                color: rgb(231, 236, 150);
            }
            p.booking{
              font-size: 23px;
                font-family: Arial, Helvetica, sans-serif;
                font-style: normal;
                color: rgb(255, 255, 255); 
            }
            h1.heading{
              font-size: 40px;
              font-family: 'Times New Roman', Times, serif;
              font-weight: bold;
            }
            h1.course{
              font-size: 30px;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              font-weight: bolder;
              color: rgb(245, 121, 99);
         
            }
            table.booking{
              text-align: left;
              float: right;
              font-family: 'Times New Roman', Times, serif;
              font-size: 20px;
              font-weight: bold;
              color: white;
             
            }
            .text1{
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
              text-align: right;
              font-size: 25px;
              font-weight: bold;
            }
            input.box{
                padding: 5px 45px;
                border: 2.5px solid rgb(255, 255, 255);
                background-color: rgba(156, 205, 228, 0.719);
                color: black;
            }
            table.decor{
                background-color: rgba(2, 83, 126, 0.5);
                color: rgb(255, 241, 241);
                overflow: hidden;
                padding:2px;
                border-spacing:20px;     
                margin-right: 45px;
                
            }
            .design{
                padding: 13px 30px;
                color: rgb(247, 246, 250);
                background-color: transparent;
                font-size: 25px;
                font-weight: bold;
                }
                #sessions {
                  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
                  margin-left: 40px;
                  margin-right: 40px;
                  margin-bottom: 40px;
                  font-size: 20px;
                  text-transform: capitalize;
                }

                #sessions td, #sessions th {
                  border: 1px solid #ddd;
                  padding: 15px;
                  font-weight: bold;
                }

                #sessions tr:nth-child(even){background-color: #f2f2f2;}

                #sessions th {
                  padding-top: 16px;
                  padding-bottom: 16px;
                  text-align: left;
                  background-color: red;
                  color: white;
             
                }

            </style>
</head>
<body>
<div class="navbar">
  <a href="index.php">HOME</a>
  <a href="sessions.php"> TUTE SESSIONS </a>
</div>
<!--<div class="left">
  <br>
<h1 class="heading">BOOK TUTE SESSIONS ONLINE</h1>
<p class="course">Students can now book their TUTE sessions online<br></p>
<h1 class="course">ICTWEB501</h1>
<P class="course">This unit describes the skills and knowledge required to analyse<br>  and design websitesto meet technical requirements. 
It applies to <br>individuals working as web developers who are responsible for <br>the analysis, design, implementation, and testing of websites</P>
</div>-->
<div class="left">
  <h1 class="heading"> &nbsp;&nbsp;&nbsp;&nbsp; All avaliable sessions</h1>
  <table id="sessions">
    <tr>
      <th>
        Date
      </th>
      <th>
          Day
      </th>
      <th>
        Start Time
      </th>
      <th>
        End Time
      </th>
      <th>
        Totur
      </th>
    </tr>
  <?php

    $m=mysqli_query($db,"select * from sessionz");
  
  while($rows=mysqli_fetch_array($m))
  {
    ?>

    <tr>
    <td>
        <?php echo $rows['sdate'];?>
      </td> 
      <td>
        <?php echo $rows['day'];?>
      </td>
      <td>
        <?php echo $rows['start_time'];?>
      </td>
      <td>
        <?php echo $rows['end_time'];?>
      </td>
      <td>
        <?php echo $rows['tutor'];?>
      </td>
    
    
      <?php
  }
  ?></tr>
  </table>
</div>
<div class="booking">
  <form name="booking" id="booking" onsubmit="return validateForm()" action="sessions.php" method="POST"> <!--<form> tag accepts all the user information to the specififed URL-->
 
  <table class="decor text1"  > 
        <tr>
            <td colspan="2">
                <h1 class="tabletext">BOOKING</h1>
            </td>
        </tr>
        <tr>
         <td colspan="2" style="text-align: left"><h1 class="course">ICTWEB501</h1>
         <P class="course">This unit describes the skills and <br>knowledge required to analyse and design<br> websites  </P>
       </td>
        </tr>
        <tr>
          <td>Name </td>
          <td><input type="text" class="box" name="username" id="username"
           pattern="[A-Za-z]{1,}" title="No numbers are allowed" value="<?php echo $_SESSION['username']; ?>" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
      </tr>  
      <tr>
        <td>Date</td>
        <td><input type="date" class="box" name="sdate" id="sdate"  value="<?php echo date('Y-m-d'); ?>" style="color: rgb(255, 255, 255); font-size: 20px;"></td>
      </tr>
      <tr style="text-align: center;">
        <td colspan="2" ><button type="submit" class="design"  name="add_date">SUBMIT</button></td> 
      </tr>
        
    </table>

</form>
<img src="IMAGES/webinar.jpeg" alt = "webinar" height="450" width="550">
</div>
<?php
$username = 	$_SESSION['username'];


if (isset($_POST['add_date'])) 
{
  
    
    $new_date = $_POST['sdate'];
    $_SESSION['sdate'] = $new_date;
    $query1 =mysqli_query($db,"SELECT * FROM sessionz WHERE sessionz.sdate='$new_date'");
    $row=mysqli_fetch_array($query1);
    if (!$row)
     {

       echo '<script> alert("There is no session registered in this date, please select a date given in the table"); </script>';
       
    }
    else
    {
   
      $query = mysqli_query($db,"SELECT sessionID FROM sessionz WHERE sessionz.sdate = '$new_date'");
      if($row = mysqli_fetch_array($query))
      {$sessionID = $row['sessionID'];

    }
    $query = mysqli_query($db,"SELECT ID FROM users WHERE users.username = '$username'");
      if($row = mysqli_fetch_array($query))
      {$ID = $row['ID'];}

    if (isset($ID) && isset($sessionID)) 
    {
      $query = "INSERT INTO booking (studentID, sessionID) 
            VALUES('$ID','$sessionID')";

    }
    if ($db->query($query) === TRUE) {
      echo '<script>location.href = "success.php";</script>';
    }
        else {
      echo "Error: " . $query . "<br>" . $db->error;}
    }
    
    
}

?>
</body>
</html>
