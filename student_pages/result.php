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

<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Results</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  }*/
 

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

  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
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
     font-size: 20px;
   }
  th,td{
    font-size:9px;
    padding:3px;
  }
  table{
    width:100%;
    
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
        <a class="active" href="stu_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="stu_viewtest.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Take a test</a> 
        <a href="result.php"><i class="fa fa-certificate"></i> View Result</a>
       
        <a href="logout.php"><i class="fa fa-sign-out  fa-logout"></i> Logout</a>
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

<div class="main">
<h1>Scorecard </h1>
</div>
 
<div class = "manageuser">
  <table align="center">
  <tr>
    <th>SNo.</th>
    <th>Subject Code</th>
    <th>Subject Name</th>
    <th>Test Name</th>
    <th>Date</th>
    <th>Score</th>
    <th>Analyze Result</th>
    <th>Answer Key</th>
  </tr>

    <?php
    $e=$_SESSION['Email'];
  
  $result = mysqli_query($con,"SELECT h.hid,h.score,h.quizid,h.stud_ans,h.date, q.subjcode , q.name, q.title, h.right_ans, h.wrong_ans , h.unattempted  FROM history AS h INNER JOIN quiz AS q on h.quizid=q.quizid INNER JOIN login_student AS s ON s.email=h.email WHERE h.email='$e' ") or die('Error');
$c=1;

while($row = mysqli_fetch_array($result)) {
  $hid=$row['hid'];
  $sn = $row['name'];
  $tn =  $row['title'];
  $sc = $row['subjcode'];
  $s = $row['score'];
  $ans=$row['stud_ans'];
  $qid=$row['quizid'];
  $d=$row['date'];
  $r=$row['right_ans'];
  $w=$row['wrong_ans'];
  $u=$row['unattempted'];

  echo '<tr><td>'.$c++.'</td><td>'.$sc.'</td><td>'.$sn.'</td><td>'.$tn.'</td><td>'.$d.'</td><td>'.$s.'</td><td><a title="View" href="view_response.php?hid='.$hid.'&qid='.$qid.'&ans='.$ans.'&ri='.$r.'&wr='.$w.'&un='.$u.'"><i>Result</i></a></td><td><a title="View Test Answer Key" href="anskey.php?qid='.$qid.'"><i>View</i></a></td></tr> ';

}

echo '</table></div>';

?>


</div> 
    
    <?php
include('../footer.php');
?>

</body>
</html>
