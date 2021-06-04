<?php 

include('server.php'); 

?>
<html>
<head>
<title>CONFIRMATION PAGE</title>
<style>
            body{
                background-image: url("IMAGES/success.jpg");
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
    
                font-size: 27px;
                font-family: Arial, Helvetica, sans-serif;
                font-style: normal;
                background-color: transparent;    
            }
            #sessions {
                  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
                  margin-left: auto;
                  margin-right: auto;
                  margin-top: auto;
                  margin-bottom: auto;
                  font-size: 20px;
                  text-transform: capitalize;
                }

                #sessions td, #sessions th {
                  border: 1px solid #ddd;
                  padding: 15px;
                  font-weight: bold;
                }


                #sessions th {
                  padding-top: 16px;
                  padding-bottom: 16px;
                  text-align: left;
                  background-color: red;
                  color: white;
                
                }
                #confirmation{
                  
                  background-color: rgba(255, 209, 245, 0.5);
                  margin-top: 70px;
                  margin-left: 110px;
                  margin-right: 110px;
                  
                }
                .text1{
                  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                  text-align: right;
                  font-size: 25px;
                  font-weight: bold;
                }
                h1.heading{
                  font-size: 40px;
                  font-family: 'arial';
                  font-weight: bold;
                  
                }
               h2.course{
                  font-size: 30px;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                  font-weight: bold;
                  
         
                }

    </style>
</head>
<body>

	  <div class="navbar">
  <a href="index.php">HOME</a>
  <a href="sessions.php"> TUTE SESSIONS </a>
  <a href="index.php?logout='1'" style="color: red;">LOG OUT</a>
</div>
<div id="confirmation">
<h1 style="text-align: center" class = "heading">BOOKING CONFIRMATION</h1>
<h2 class="course">COURSE NAME :ICTWEB501</h2>
<h2 class="course">COURSE DETAILS :</h2><p >This unit describes the skills and knowledge required to analyse  and design websitesto meet technical requirements. 
It applies to individuals working as web developers who are responsible for the analysis, design, implementation, and testing of websites</P>

<table id="sessions">
    <tr>
      <th>
        Student Name
      </th>
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
    $new_date = $_SESSION['sdate'];
    $m=mysqli_query($db,"SELECT * FROM sessionz WHERE sessionz.sdate='$new_date'");
    
  while($rows=mysqli_fetch_array($m))
  {
    ?>
    <tr>
      <td>
        <?php echo $_SESSION['username']; ?>
      </td>
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
  <br>
</div>
</body>
</html>


		