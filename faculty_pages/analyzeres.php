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
<title>Test Result</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Style the body */
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
}
*/
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
  width: 55%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even){background-color: #ddd;}
tr:hover {background-color: #E9F0ED  ;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #fff;
  color: white;
}
.content {
  flex: 1 0 auto;
}
.navbar .icon {
  display: none;
}
.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; */
}

.tooltip .tooltiptext {
  visibility: hidden;
  font-size:15px;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
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
.tooltip .tooltiptext {
  font-size:12px;
  width: 150px;
  padding: 5px 5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
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

<?php
  
  if(@$_GET['tid']) 
  {
    $testid=$_GET['tid'];
    $p=$_GET['p'];
    $b=$_GET['b'];
    $s=$_GET['s'];
    $idf= $_SESSION['idf'];
    $tq=$_GET['tq'];
    $tn=$_GET['tn'];
  }
?>

<div class="main">
<h1>Result of <?php echo $tn; ?></h1> 
</div>
 <br>


<?php

$sql2 = mysqli_query($con,"SELECT sum(h.right_ans), sum(h.wrong_ans) , sum(h.unattempted), avg(h.score), max(h.score) , min(h.score) ,stddev(h.score), variance(h.score), count(*) from quiz as q INNER JOIN history as h ON q.quizid = h.quizid INNER JOIN login_student as s on s.email=h.email WHERE q.teacher_id='$idf' AND h.quizid='$testid' AND s.program='$p' AND s.branch='$b' AND s.semester='$s' ") or die('No Entries');

while($row1=mysqli_fetch_array($sql2) ) {

      $ra=$row1['sum(h.right_ans)'];
      $wa=$row1['sum(h.wrong_ans)'];
      $ua=$row1['sum(h.unattempted)'];
      $avg=$row1['avg(h.score)'];
      $sd=$row1['stddev(h.score)'];
      $var=$row1['variance(h.score)'];
      $cnt=$row1['count(*)'];
      $maxm=$row1['max(h.score)'];
      $minm=$row1['min(h.score)'];
      //echo $c;
      
      //pertcent of correct responses
      $pc=($ra/(($tq)*($cnt)))*100;
      //echo $pc;echo " %  - correct %";
      //pertcent of wrong responses
      $pw=($wa/(($tq)*($cnt)))*100;
      //echo $pw;echo " %  - wrong %";
      //pertcent of unattempted responses
      $pu=($ua/(($tq)*($cnt)))*100;
      //echo $pu;echo " %  - unattempted %";

      //echo $tq;echo " "; //totalques

      // echo $ra;echo " ";
      // echo $wa;echo " ---";
      // echo $ua;echo " ---";
      //echo $avg;echo " "; //average marks
      //echo $sd;echo " ";  // standard deviation

      //max marks 
      // echo $maxm;

      //min marks
      //echo $minm;
      
      //echo $cnt;  //total no. of responses
      
      $pc1=round($pc,2);
      $pw1=round($pw,2);
      $pu1=round($pu,2);
      $avg1=round($avg,2);
       $sd1=round($sd,2);
      $var1=round($var,2);

  }
   
?>
 <div class = "manageuser">
  <table align="center">
  <tr>
  
    <th style="color:green;"><div class="tooltip">Percentage of correct answers <i class='fa fa-check' style='color:green'></i><span class="tooltiptext">It shows the percentage of the correct answers</span>
    </div></th>
    <td><?php echo $pc1."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:red'><div class="tooltip">Percentage of wrong answers <i class='fa fa-times' style='color:red'></i><span class="tooltiptext">It shows the percentage of the wrong answers</span>
    </div></th>
    <td><?php echo $pw1."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:blue'><div class="tooltip">Percentage of unattempted answers <span class="tooltiptext">It shows the percentage of the unattempted answers</span>
    </div></th>
    <td><?php echo $pu1."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:#E453F9  '><div class="tooltip">Average Marks <span class="tooltiptext">It shows the average marks of the class test.</span>
    </div></th>
    <td><?php echo $avg1; ?></td> 
  </tr>
  <tr>
    <th style='color:#D19C0C'><div class="tooltip">Standard Deviation <span class="tooltiptext">It shows the standard deviation of the scores of the test.It is a statistic that measures the dispersion of a dataset relative to its mean.</span>
    </div></th>
    <td><?php echo $sd1; ?></td> 
  </tr>
   <tr>
    <th style='color:#ff9933'><div class="tooltip">Variance <span class="tooltiptext">It shows the variance of the scores of the test.It is a statistic that measures the dispersion between the values in a dataset.</span>
    </div></th>
    <td><?php echo $var1; ?></td> 
  </tr>
  <tr>
    <th style='color:#268965'><div class="tooltip">Maximum Marks <span class="tooltiptext">It shows the maximum marks secured by students.</span>
    </div></th>
    <td><?php echo $maxm; ?></td> 
  </tr>
  <tr>
    <th style='color:blue'><div class="tooltip">Minimum Marks <span class="tooltiptext">It shows the minimum marks secured by the students.</span>
    </div></th>
    <td><?php echo $minm; ?></td> 
  </tr>
  </table>
  </div>

<br>
</div> 



    <?php
include('../footer.php');
?>
</body>
</html>
