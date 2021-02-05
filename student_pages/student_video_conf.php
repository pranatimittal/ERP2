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
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Manage User</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Style the body */
.content {
  flex: 1 0 auto;
}
body {
  font-family: Arial;
  /* margin: 0; */
}

/* Header/Logo Title */
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
/*.footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  }
*/

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
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

.dropdown {
  float: left;
  overflow: hidden;
}

/*.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}*/

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

/*.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgba(165, 161, 161, 0.397);
}

.dropdown:hover .dropdown-content {
  display: block;
}*/

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
.navbar .icon {
  display: none;
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
 .main h1{
     font-size: 20px;
   }
   th,td{
     font-size:12px;
     padding:5px;
   }
   table{
     width:100%;
   }
     .adminpanel p{
       font-size:20px;
     }
     .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
  .navbar.responsive {position: relative;}
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar a:hover{
  background-color: #ddd;
  color: black;
}

  .navbar a.active {
  background-color: #4CAF50;
  color: white;
}

 }
</style>
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
<br>
<div class="main">
<h1>Student Classes</h1>
</div>
 <br>
<div class = "manageuser">
  <table align="center">
  <tr>
    <th>Subject Code</th>
    <th>Subject Name</th>
    <th>Faculty Name</th>
    <th>Meeting URL</th>
  </tr>

<?php

$sId=$_SESSION['email'];


// SELECT tid FROM course_details WHERE email='$sId'

//login_faculty.tname FROM ((login_student INNER JOIN coursedetails ON login_student.branch = coursedetails.branch AND login_student.program = coursedetails.program AND login_student.semester = coursedetails.semester) INNER JOIN login_faculty ON login_faculty.id = coursedetails.tid)

  $result = mysqli_query($con,"SELECT tid from coursedetails, login_student WHERE login_student.branch = coursedetails.branch AND login_student.program = coursedetails.program AND login_student.semester = coursedetails.semester AND login_student.email='$sId'") or die('Error');

while($row = mysqli_fetch_array($result)) {
  $name = $row['tid'];

  $r = mysqli_query($con, "SELECT subject.subjcode, subject.subjname, login_faculty.tname, login_faculty.meeting_url from login_faculty, subject WHERE login_faculty.id = subject.tid AND login_faculty.id='$name'") or die('Error');
  while($ro = mysqli_fetch_array($r)){
    $a1 = $ro['subjcode'];
    $a2 = $ro['subjname'];
    $a3 = $ro['tname'];
    $a4 = $ro['meeting_url'];

      echo '<tr><td>'.$a1.'</td><td>'.$a2.'</td><td>'.$a3.'</td><td><a target="_blank" href="'.$a4.' ">'.$a4.'</td></tr>';
  }

}
echo '</table></div>';


?>
</table>

</div>
<br>
<br>
</div>

    <?php
include('../footer.php');
?>
</body>
</html>
