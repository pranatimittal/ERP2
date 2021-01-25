<?php
include('config.php');
session_start();
$emails=$_SESSION['Email'];
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};

$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});

</script>
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
 .main h1{
     font-size: 17px;
   }
   th,td{
     font-size:13px;
   }
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>View Given Feedback</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar" id="myTopnav">
    <a class="active" href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="student_home_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="add_fb_for_teacher.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Feedback</a> 
    <a href="view_fb_given.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback given for faculty</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
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
        <h1>View Feedbacks Given</h1>
        </div>
         <br>
        <div class = "manageuser">
          <table align="center">
          <tr>
            <th>SNo.</th>
            <th>Faculty Name</th>
            <th>Subject Name</th> 
            <th>Date</th>
            <th>View Feedback</th>
          </tr>

          <?php

  $result = mysqli_query($con,"SELECT * FROM teacher_fb as t INNER JOIN login_student as s on t.s_rollno=s.rollno WHERE s.email='$emails'") or die('Error');
  
  $c=1;

while($row = mysqli_fetch_array($result)) {
  $fn = $row['f_name'];
  $subj = $row['f_subject'];
  $d= $row['date'];
  $id=$row['f_id'];

  echo '<tr><td>'.$c++.'</td><td>'.$fn.'</td><td>'.$subj.'</td><td>'.$d.'</td>
  <td><a title="View" href="view_fb_by_you.php?fid='.$id.' "><i>View Feedback</i></a></td></tr>';

}
$c=0;
echo '</table></div>';

?>
   </div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>      

