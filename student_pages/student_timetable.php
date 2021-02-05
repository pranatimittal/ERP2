<?php
include('config.php');
session_start();
?>


<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
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

.img{
  display: block;
    margin: 0 auto;
}

.content1 {
  flex: 1 0 auto;
}  
.right {
    text-align: right;
    float: right;
    
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
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}

.title {
  color: grey;
  font-size: 15px;
}
.card p{
  font-size:12px;
}
.card h1{
  font-size:20px;
}
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Student Profile</title>
</head>
<body>
<a name="top"></a>
    <div class="content1">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
<div class="navbar">
    <a href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="classroom_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="student_video_conf.php"><i class="fa fa-download" aria-hidden="true"></i> Attend Class</a> 
    <a href="student_attendance_page.php"><i class="fa fa-files-o" aria-hidden="true"></i>View Attendance</a>
    <a href="student_download_learning.php"><i class="fa fa-files-o" aria-hidden="true"></i>Download Learning Material</a>
    <a href="student_timetable.php"><i class="fa fa-files-o" aria-hidden="true"></i>Class Timetable</a>   
  </div>
      <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>

  <?php
  
  $E=$_SESSION['Email'];
  $result = mysqli_query($con,"SELECT program, branch, semester FROM login_student WHERE email='$E' " ) or die('Error1');
  while($row = mysqli_fetch_array($result)) {
    $p = $row['program'];
    $b = $row['branch'];
    $s = $row['semester'];
$res = mysqli_query($con,"SELECT img FROM student_timetable WHERE program='$p' AND branch='$b' AND semester='$s'" ) or die('Error2');
while($r = mysqli_fetch_array($res))
    $img= $r['img'];
      echo '<center><img src="upload/'.$img.'" alt="xyz" style="width:50%"></center>';
      
   }  

    ?>

    
    <?php
include('../footer.php');
?>
<body>
  <html>
