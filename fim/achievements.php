<?php
include('config.php');
session_start();

$fid=$_GET["id"];
$did=$_SESSION["did"];

//echo $idf;
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
.box{
  color:#079BDF;
   border: 1px solid #8CC9E6 ;
   background-color:#DDF1F1; 
   width:80%;
   margin-right:auto;
   margin-left:auto;
   margin-top:1%;
   border-radius:12px;
   padding-left:20px;
}
.box:hover{
  background-color:#B3E1E2;
}
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
  margin-left: 80px;
  padding: 1px 6px;
} */
.box{
  width:95%;
}
h3{
  font-size:14px;
}
li{
  font-size:12px;
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
<title>Achievements</title>
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
<div class="box">
<h3>Achievements:</h3>
<ul>
<?php
   
   $query ="SELECT * FROM f_achievement where fid='$fid'";
   
   $result = mysqli_query($con,$query) or die('Error');
    $c=1;
   while($row = mysqli_fetch_array($result)) {
	   
	   ?>
      <tr>
      <li><?php echo $row['value']; ?></li>
      
      </tr>
	  
	  <?php
   }
   ?>
</ul>
</div>

</div>

 </div>   
<?php
include('footer.php');
?>
</body>
</html>