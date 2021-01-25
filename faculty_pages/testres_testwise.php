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
<title>Testwise Results</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<script type="text/javascript" src="tableExport.js"></script> 
<script type="text/javascript" src="jquery.base64.js"></script> 
<!-- <script type="text/javascript">  
 $(document).ready(function(){  
      $("#excel").click(function(){  
           $("#score_table").tableExport({
            type:'excel',
            escape:'false' ,
      });  
    });
 });  
 </script>   -->
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
/* .footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  } */
 

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

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}

.dropdown-content {
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

.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 15px;
  text-align: center;
  border-radius: 5px;
  width:15%;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: #3e8e41;
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
.btn {
  padding: 10px 14px;
  font-size: 12px;
  width:30%;
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

<div class="main">

<?php
  
  if(@$_GET['tid']) 
  {
    $tid=$_GET['tid'];
    $test=$_GET['t'];
  }
?>

<h1>Result of <?php echo $test ?> Test</h1>
</div>
 <br>
<div class = "manageuser">
  <table align="center" id="score_table">
  <tr>
    <th>SNo.</th>
    <th>RollNo.</th>
    <th>Name</th>
    <th>Date</th>
    <th>Score</th>
    <th>Response</th>
  </tr>
  
  <?php
  $sno=1;
  
    $sql1 = mysqli_query($con,"SELECT * FROM history AS h INNER JOIN login_student AS s ON h.email=s.email WHERE h.quizid='$tid' ORDER BY s.rollno ");
    
     while($row=mysqli_fetch_array($sql1) ) {

      $rn=$row['rollno'];
      $n=$row['name'];
      $s=$row['score'];
      $ans=$row['stud_ans'];
      $qid=$row['quizid'];
      $d=$row['date'];
      
      echo '<tr><td>'.$sno++.'</td><td>'.$rn.'</td><td>'.$n.'</td><td>'.$d.'</td><td>'.$s.'</td><td><a title="View" href="view_response_f.php?qid='.$qid.'&ans='.$ans.'"><i>View Response</i></a></td></tr>';

      }

echo '</table></div><br><br>';

echo '<div align="center">
    <button class="btn"><i class="fa fa-download"></i><a style= "color : white ;" href="export.php?tid='.$tid.'"><u><b> Download PDF </b></u></a></button>
    </div>';

?>

<br>
</div> 
    
    <?php
include('../footer.php');
?>

</body>
</html>
