<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Alegreya', serif;
  color: white;
}
.split {
  height: 90%;
  width: 45%;
  position: fixed;
  z-index: 1;
  top: 4%;
  overflow-x: hidden;
  padding-top: 20px;
}
.left {
  left: 5%;
  background-color: #52BE80 ;
}
.right {
  right: 5%;
  background-color: #f3f3f3;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered img {
    width:150px;
  height:130px;
  border-radius:50%;
}
.centered1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.centered1 img {
    width:330px;
  height:150px;
}
.registerbtn {
  background-color: #52BE80 ;
  color: white;
  padding: 12px 20px;
  /* margin-left: 18%;; */
  border: none;
  cursor: pointer;
  width: 400px;
  opacity: 0.9;
  border-radius:30px;
  font-size:15px;
}
.registerbtn:hover {
    background: #333333;
}
.title {
  font-size: 19px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  color: black;
}
.aboutus{
    font-size:16px;
    text-align:justify;
    margin-bottom:6%;
}
.aboutus1{
    font-size:13px;
    color:black;
    text-align:center;
    margin-bottom:6%;
}
@media (max-width: 576px) {
    .registerbtn {
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 5px;
  padding-bottom: 5px;
  font-size:8px;
  width:100%;
}

.split {
  height: 80%;
  width: 45%;
  top: 4%;
}
.centered img{
   width:80px;
   height:72px;
}
.centered1 img{
    width:120px;
   height:90px;
}
h2{font-size:14px;}
p{font-size:12px;}
.aboutus{
    font-size:8px;
}
.aboutus1{
  margin-top:8%;
    font-size:7px;
    text-align:justify;
}
h3{
    font-size:12px;
}
.title {
  font-size: 8px;
  margin-bottom:10%;
}
.centered{
top: 49%;
}
.centered1{
top: 45%;
}
 }
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Login</title>
</head>
<?php
$_SESSION['client']= "index";
echo $_SESSION['client'];
?>

<body>
<div class="split left">
  <div class="centered1">
  <a href="https://igdtuw.ac.in//"><img src="ig.JPG" alt="IGDTUW"></a>
    <h2>Welcome </h2>
    <p>Education | Enlightment | Empowerment </p>
    <h3 style="text-align:center;">About Us :</h3>
    <p class="aboutus">This system has been developed to provide a complete integrated environment for teaching and learning wherein students can view and edit their profile , give feedback to the faculty,take up tests as well as view the documents uploaded by the faculty and faculty can view and edit their profile , visualize the feedback given for them , upload tests as well as documents for the students.</p>
  </div>
</div>
<div class="split right">
  <div class="centered">
    <a href="https://igdtuw.ac.in//"><img src="IGDTUW-logo.png" alt="logo" class="center"/></a>
    <h2 class="title">ERP BASED SYSTEM FOR TEACHING - LEARNING AND ASSESSMENT</h2>
    <button type="submit" class="registerbtn" onclick="location.href = 'faculty_pages/faculty_login.php';"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp;&nbsp;Login as faculty</button>
    <br>
    <br>
    <button type="addmore" class="registerbtn" onclick="location.href = 'student_pages/student_login.php';"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp;&nbsp;Login as student</button>
    <br>
    <br>
    <button class="registerbtn"><i class="fa fa-download"></i>&nbsp;<a style= "color : white ;text-decoration:none;" href="upload/Student_User_Manual.pdf" download>  Download student user manual</a></button>
    <br>
    <br>
    <button class="registerbtn"><i class="fa fa-download"></i>&nbsp;<a style= "color : white ;text-decoration:none;" href="upload/Faculty_User_Manual.pdf" download>  Download faculty user manual</a></button>
    <br>
    <br>
    <button class="registerbtn" onclick="location.href = 'fim/index.php';"><i class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;&nbsp;Faculty Directory</button>
    <p class="aboutus1">( Click on faculty directory to view detailed profile such as research papers, publications, achievements etc. of all the faculty members. )</p>
  </div>
</div>
</body>
</html>