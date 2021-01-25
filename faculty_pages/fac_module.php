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

    font-size: 30px;
    /* color:#5e0c17; */
    color: black;
    text-align: center;
  }
  .right {
    text-align: right;
    float: right;

}

.btn-group button {
  background-color: #4CAF50;

  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 15px 20px;
  cursor: pointer; /* Pointer/hand icon */
  /* float: left;  */
/*  margin-left: 5px;*/
  width: 300px;
  font-size: 16px;
  border-radius:12px;
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;

}
.wrapper {
    text-align: center;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  /* perspective: 1000px; */
}

.btn-group {
  background-color: transparent;
  width: 300px;
  height: 200px;
  /* perspective: 1000px; */
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius:10px;
    -moz-border-radius:10px;

}

.flip-card-front {
  /* background-color: #bbb; */
  color: black;

}

.flip-card-back {
  background-color: rgb(211, 207, 207);
  color: black;
  transform: rotateY(180deg);
  text-align: center;
  padding: 5px 10px;

}
.flip-card-back h2{
    text-align: center;
}

* {
  box-sizing: border-box;
}
.flip-card-back p{
    font-size:15px;
}
.column {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {

  content: "";
  clear: both;
  display: table;
}
.content {
  flex: 1 0 auto;
}
img[src="teaching.png"]{
  float: right;
  margin-right: 70px;
}
@media (max-width: 576px) {
  .wrapper{
   margin:auto;
 }
  .column{
   width:100%;

 }
 .flip-card{
  margin:auto;
  width: 200px;
  height: 200px;
 }
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
 .btn-group button{
   width:200px;
   font-size:15px;
   padding: 10px 5px;
 }
 .flip-card-back p{
  font-size:12px;
}
.flip-card-back h2{
  font-size:15px;
}
img[src="teaching.png"]{
 float:left;
margin-left:20px;
 }
 .main h1{
   font-size:23px;
 }
 .navbar a {
  float: left;
  font-size: 12px;
  color: white;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
}

.Modal-content {
   padding: 15px;
  border-radius: 4px;
  max-width: 280px;
  height: 350px;
}
li{
  font-size:12px;
}

}


</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Faculty Module Page</title>
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
        <div class="right">
        <a href="fac_logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
    </div>
      </div>
      <br>
      <a name="top"></a>
    <div class="content">

      <div class="main">
        <h1>FACULTY MODULES</h1>
        </div>
         <br>
        <br>


<div class="row">
    <div class="column">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="profile1.png" alt="feedback" style="width:150px;height:150px;margin-top: 40px;">
    </div>
    <div class="flip-card-back">
      <h2>VIEW PROFILE</h2>
      <p>Your profile details will be shown here.</p>
      <p>Click on view profile button below to  view all your profile details.</p>
    </div>
  </div>
</div>
<div class="wrapper">
    <div class="btn-group">
      <button onclick="location.href = 'fac_profile.php';">VIEW PROFILE</button>
      </div>
      </div>
</div>

<div class="column">
<div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="feedback_module.png" alt="feedback" style="width:150px;height:150px;margin-top: 40px;">
      </div>
      <div class="flip-card-back">
        <h2>FEEDBACK MODULE</h2>
      <p>You can view your feedback with the help of this module.</p>
      <p>Click on feedback module button below to explore all options of feedback module.</p>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="btn-group">
        <button onclick="location.href = 'fac_fb_home.php';">FEEDBACK MODULE</button>
      </div>
      </div>
</div>

<div class="column">
<div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="teaching.png" alt="feedback" style="width:150px;height:150px;margin-top: 40px;">
      </div>
      <div class="flip-card-back">
        <h2>CLASSROOM MODULE</h2>
      <p>You can initiate lectures, view discussion forum and maintain attendance with this module.</p>
      <p>Click on Classroom module button below to explore all options of Classroom module.</p>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="btn-group">
        <button onclick="location.href = 'fac_classroom_page.php';">CLASSROOM MODULE</button>
      </div>
      </div>
</div>

<div class="column">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="learning_section.png" alt="feedback" style="width:150px;height:150px;margin-top: 40px;">
      </div>
      <div class="flip-card-back">
        <h2>ASSESSMENT MODULE</h2>
      <p>You can upload learning material,assignments as well as upload test with the help of this module.</p>
    <p>Click on teaching module button below to explore all options of learning module.</p>
    </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="btn-group">
        <button onclick="location.href = 'fac_teaching_home.php';">ASSESSMENT MODULE</button>
      </div>
      </div>
    </div>

    </div>
    </div>

    <?php
include('../footer.php');
?>
</body>
</html>
