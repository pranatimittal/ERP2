<?php
include('config.php');
session_start();
?>


<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      
body {
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;
  
}

p{
color:black;
font-size:25px;
}

 .header img {
  float: left;
  width: 150px;
  height: 120px;
  background: #555;
  margin-right:15px;
}
.navbar {
  overflow: hidden;
  background-color:#555;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}



.main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 25px;
    color:#5e0c17;
    text-align: center;
  }
  .manageuser{
			font-family: "Times New Roman", Times, serif;
      font-size: 20px;
      
		}
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
.content {
  flex: 1 0 auto;
}  
@media (max-width: 576px) {
  
  .header{
    font-size:8px;
  }
  .header p{
    font-size:12px;
  }
  .header img{
    width:100px;
    height:80px;
  }
  .navbar a {
   float: left;
   font-size: 12px;
   color: white;
   text-align: center;
   padding: 8px 10px;
   text-decoration: none;
 }
 .main h1{
     font-size: 18px;
   }
   th,td{
     font-size:9px;
   }
   table{
     width:100%;
   }
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Faculty View Feedback</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar">
    <a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="fac_fb_home.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="fac_view_fb.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback</a>
    <a href="graph.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Visualize Feedback</a>
  </div>
  <div class="main">
        <h1>VIEW ALL FEEDBACKS GIVEN FOR YOU</h1>
        </div>
         <br>
        <div class = "manageuser">
          <table align="center">
          <tr>
            <th>SNo.</th>
            <th>Subject Name</th> 
            <th>Date (D-M-Y)</th>
            <th>View Feedback</th>
            <th>No. of Feedbacks Received</th>
          </tr>

   <?php
   $id=$_SESSION['idf'];
  
  $result = mysqli_query($con,"SELECT count(*),f_name,f_subject, date FROM teacher_fb WHERE fac_id='$id' GROUP BY f_subject,date ORDER BY date DESC");
  
  $c=1;

while($row = mysqli_fetch_array($result)) {
  
  $subj = $row['f_subject'];
  $d= $row['date'];
  $fn=$row['f_name'];
  $fbcnt=$row['count(*)'];

  echo '<tr><td>'.$c++.'</td><td>'.$subj.'</td><td>'.$d.'</td>
  <td><a title="View" href="fac_view_fb1.php?s='.$subj.'&d='.$d.'&fn='.$fn.'"><i>View Feedback</i></a></td><td>'.$fbcnt.'</td></tr>';

}
$c=0;
echo '</table></div>';
//SELECT f_name, f_subject, AVG(teaching_skill), AVG(personal_attributes),date FROM `teacher_fb` WHERE fac_id=1 GROUP BY f_subject,date ORDER BY date DESC
?>
   </div> 
    
    <?php
include('../footer.php');
?>       

<body>
  </html>