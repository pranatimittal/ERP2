<?php
include('config.php');
session_start();
?>
<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='index.php'</script>";
}
//$fid=$_GET["id"];

$fid=$_GET["id"];
$did=$_SESSION["did"];
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <style>

        body {
          font-family: Arial, Helvetica, sans-serif;
          background: white;
        }   
   .header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;
  
}
.header p{
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

.sidebar {
  float:left;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 0px;
  margin-top:0px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  /* position: fixed; */
  /* height: 100%; */
  /* overflow: auto; */
  height: 80%;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

.contentx {
  margin-top:0px;
  margin-left: 200px;
  padding: 1px 16px;
  /* height: 1000px; */
}

.content {
  flex: 1 0 auto;
}
.heading {
   background-color:#398B93;
   color: white;
   font-size: 20px;
   padding: 16px;
   text-align: center;
   text-transform: uppercase;
}

.table-users {
   border: 1px solid #398B93;
   border-radius: 10px;
   box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
   /* max-width: calc(100% - 32px); */
   margin: 16px auto;
   overflow: hidden;
   width: 82%;
   font-family: 'Nunito Sans', sans-serif;
}

table {
   width: 100%;
}  
   td, th { 
      color: #398B93;
      padding:20px;
   }
   
   td {
      text-align: left;
      vertical-align: middle;
   }   
   
   th { 
    text-align: left;
      font-weight: bold;
   }
   
   tr:nth-child(2n) { background-color: white; }
      tr:nth-child(2n+1) { background-color: #D6EAF8 ; }
      .sidebar .icon {
  display: none;
}
@media (max-width: 576px) {
  .contentx {
  margin-top:14%;
  margin-left: auto;
  margin-right: auto;
}
  .header{
    font-size:6px;
  }
  .header p{
    font-size:10px;
  }
  .header img{
    width:100px;
    height:80px;
  }
  /* .sidebar {
  width: 80px;
}
.sidebar a {
  padding: 10px;
  font-size:8px;
}
.contentx {
  margin-left: 55px;
  padding: 1px 6px;
} */
 }
 @media (max-width: 576px) {
    .heading {
   font-size: 14px;
   padding: 10px;
}
   .table-users { 
      width:100%;
   }
   td, th { 
       padding-top:5px;
       padding-bottom:5px;
       padding-right:5px;
     padding-left:7px;
     font-size:10px;
   }
   .sidebar {
    width: 100%;
    height: auto;
    position: relative;
    /* background-color: #4CAF50; */
  }
  .sidebar a {float: left;}
  div.contentx {margin-left: 0;}
  .sidebar a:not(:first-child) {display: none;}
  .sidebar a.icon {
    float: right;
    display: block;
  }
  .sidebar.responsive {position: relative;}
  .sidebar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .sidebar.responsive a {
    float: none;
    display: block;
    text-align: center;
  }
  .sidebar a:hover{
  background-color: #ddd;
  color: black;
}

  .sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

}
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Students</title>
</head>
<body>
    <a name="top"></a>
    <div class="content">
	<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 

<div  style="background-color: #186A3B ; height:20px;">
 </div>
​<div class="sidebar" id="myTopnav">
<?php
        echo '<a class="active" href="short_profile.php?did='.$did.'"><i class="fa fa-sitemap" aria-hidden="true"></i> Faculty Directory</a>
        <a href="profile.php?id='.$fid.'"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>      
        <a href="research.php?id='.$fid.'"><i class="fa fa-search"></i> Research</a> 
        <a href="publications.php?id='.$fid.'"><i class="fa fa-book" aria-hidden="true"></i> Publications</a>
        <a href="funding.php?id='.$fid.'"><i class="fa fa-credit-card" aria-hidden="true"></i> Funding</a>
        <a href="achievements.php?id='.$fid.'"><i class="fa fa-trophy" aria-hidden="true"></i> Achievements</a>
        <a href="students.php?id='.$fid.'"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
        </div>';
?>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "sidebar") {
    x.className += " responsive";
  } else {
    x.className = "sidebar";
  }
}
</script>

<div class="contentx">
<div class="table-users">
   <div class="heading"><b>PhD Students</b></div>
   
   
<?php

$sno=1;
echo '<table cellspacing="0">
      <tr>
         
         <th>S.No</th>
         <th>Name</th>
         <th>Topic</th>
         <th>University</th>
         <th>Date</th>
      </tr>';
$q1=mysqli_query($con,"SELECT * FROM f_student WHERE fid='$fid' AND type='PhD' " )or die('Error231');

if(mysqli_num_rows($q1) > 0)
{
  
 while($row1=mysqli_fetch_array($q1))
  {
    $n=$row1["name"];
    $t=$row1["topic"];
    $u=$row1["university"];
    $d=$row1["date"];

    $darr=explode("-",$d);
      
      echo '<tr>
         <td>'.$sno++.'</td>
         <td>'.$n.'</td>
         <td>'.$t.'</td>
         <td>'.$u.'</td>
         <td>'.$darr[2].'/'.$darr[1].'/'.$darr[0].'</td>
      </tr>';
    }
    
  }
  echo '</table>
      </div>';
?>
      
<?php

 
$sno1=1;
echo '<div class="table-users">
   <div class="heading" style="background-color:#48C9B0 ;"><b>Research Scholars</b></div>
   
   <table cellspacing="0">
      <tr>
         
         <th>S.No</th>    
         <th>Name</th>
         <th>Topic</th>
         <th>University</th>
         <th>Date</th>
      </tr>';
 
$q11=mysqli_query($con,"SELECT * FROM f_student WHERE fid='$fid' AND type='Research' " )or die('Error231');

if(mysqli_num_rows($q11) > 0)
{
 
 while($row11=mysqli_fetch_array($q11))
  {
    $n=$row11["name"];
    $t=$row11["topic"];
    $u=$row11["university"];
    $d=$row11["date"];

    $darr=explode("-",$d);
      
      echo '<tr>
         <td>'.$sno1++.'</td>
         <td>'.$n.'</td>
         <td>'.$t.'</td>
         <td>'.$u.'</td>
         <td>'.$darr[2].'/'.$darr[1].'/'.$darr[0].'</td>
      </tr>';
  }
 
  }
   echo '</table>
      </div>';
?>

<?php
$sno2=1;
 echo '<div class="table-users">
   <div class="heading" style="backgrund-color:#239B56 ;"><b>Master Students</b></div>
   <table cellspacing="0">
      <tr>
         
         <th>S.No</th>
         <th>Name</th>
         <th>Topic</th>
         <th>University</th>
         <th>Date</th>
      </tr>';
$q2=mysqli_query($con,"SELECT * FROM f_student WHERE fid='$fid' AND type='Masters' " )or die('Error231');
if(mysqli_num_rows($q2) > 0)
{  

 while($row2=mysqli_fetch_array($q2))
  {
    $n=$row2["name"];
    $t=$row2["topic"];
    $u=$row2["university"];
    $d=$row2["date"];

    $darr=explode("-",$d);
      
      echo '<tr>
         <td>'.$sno2++.'</td>
         <td>'.$n.'</td>
         <td>'.$t.'</td>
         <td>'.$u.'</td>
         <td>'.$darr[2].'/'.$darr[1].'/'.$darr[0].'</td>
      </tr>';
  }
  
}
echo'</table>
      </div>';

?>
      

</div>

 </div>   
<?php
include('footer.php');
?>
</body>
</html>