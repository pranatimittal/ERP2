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
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>View Tests</title>
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

/*.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
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
  width: 90%;
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
     font-size:6px;
     padding-left:1px;
     padding-right:1px;
     padding-top:5px;
     padding-bottom:5px;
   }
   table{
     width:100%;
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

<div class="navbar" id="myTopnav">
        <a class="active" href="fac_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="manageuser.php"><i class="fa fa-users" aria-hidden="true"></i> Manage User</a> 
        <a href="add_quiz.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Quiz</a>

         
        <a href="viewtest.php"><i class="fa fa-eye" aria-hidden="true"></i> View Test</a>
        <a href="f_testresult.php"><i class="fa fa-address-card-o" aria-hidden="true"></i> View Result</a>
       
        <a href="f_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
<h1>List of Tests</h1>
</div>
 <br>
<div class = "manageuser">
  <table align="center">
  <tr>
    <th>SNo.</th>
    <th>Subject Code</th>
    <th>Subject Name</th>
    <th>Test Name</th>
    <th>Total Questions</th>
    <th>Max. Marks</th>
    <th>Time(seconds)</th>
    <th>Date</th>
    <th>Remove Test</th>
    <th>Initiate Test</th>
    <th>Close Window</th>
    <th>Stop Test</th>
    <th>View </th>
  </tr>

  <?php
$idf= $_SESSION['idf'];
  $result = mysqli_query($con,"SELECT * FROM quiz where teacher_id='$idf'") or die('No Entries');
$c=1;

while($row = mysqli_fetch_array($result)) {
  $sn = $row['name'];
  $tn =  $row['title'];
  $sc = $row['subjcode'];
  $tq = $row['totalques'];
  $tm = $row['correct'] * $tq;
  $dat= $row['date'];
  $tl = $row['time'];
  $in=$row['intro'];
  $qid=$row['quizid'];
 
  echo '<tr><td>'.$c++.'</td><td>'.$sc.'</td><td>'.$sn.'</td><td>'.$tn.'</td><td>'.$tq.'</td><td>'.$tm.'</td><td>'.$tl.'</td><td>'.$dat.'</td>
  <td><a title="Delete Test" href="deltest.php?tid='.$qid.'&tname='.$tn.'"><i>Remove</i></a></td>
  <td><a title="Initiate Test" href="viewtest.php?tid='.$qid.'&tname='.$tn.'"><i>Start</i></a></td>
  <td><a title="Close Window" href="closewin.php?tid='.$qid.'&tname='.$tn.'"><i>Close</i></a></td>
  <td><a title="Stop Test" href="hard_stop_test.php?tid='.$qid.'&tname='.$tn.'"><i>Stop</i></a></td>
    <td><a title="View Questions" href="viewques.php?tid='.$qid.'&tname='.$tn.'"><i>View Questions</i></a></td></tr>';
}
$c=0;
echo '</table></div></div>';


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
