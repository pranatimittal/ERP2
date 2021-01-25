<?php
include('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>body {
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;}.header p{
color:black;
font-size:25px;
} .header img {
  float: left;
  width: 150px;
  height: 120px;
  background: #555;
  margin-right:15px;
}
.content {
  flex: 1 0 auto;
}.page-wrapper {
  min-height: 100vh;
}
.bg-gra-03 {
  background-color:rgba(241, 241, 241, 0.93);
}
.p-t-45 {
  padding-top: 45px;
}
.p-b-50 {
  padding-bottom: 50px;
}
.wrapper {
  margin: 0 auto;
}.wrapper--w790 {
  max-width: 790px;
}
.title {
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  color: #fff;
}.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}.card-5 {
  background: #fff;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}.card-5 .card-heading {
  padding: 20px 0;
  background: #1a1a1a;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}.card-5 .card-body {
  padding: 52px 85px;
  padding-bottom: 73px;
}  
li{
    font-size:17px;
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
  width:50%;
  margin-bottom:4%;
}
.btn:hover {
  background-color: #3e8e41;
}
@media (max-width: 576px) {  .header{
    font-size:8px;
  }
  .header p{
    font-size:12px;
  }
  .header img{
    width:100px;
    height:80px;
  }
  h3{
    font-size:15px;
  }
  li{
    font-size:12px;
  }
  .card-5 .card-body {
  padding: 10px;}
.btn {
  padding: 10px 14px;
  font-size: 12px;
  width:80%;
}
}
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Guidelines</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  <div  style="background-color: green; height:20px;">
</div><div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
        <div class="card-heading">
                <h2 class="title">Guidelines</h2>
            </div>
            <div class="card-body">
              <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp;General guidelines about the project.</h3>
              <br>
              <ul>
                <li>This project has two parts : Student Module and Faculty Module.</li>
                <br>
                <li>This project has been developed to provide a complete integrated environment for teaching and learning.</li>
                <br>
                <li>The aim of this project is to automate the manual system of taking feedback ,tests etc.  </li>
                <br>
                <li>Student Module provides provision for students to view and edit their profile , give feedback to the faculty as well as view the same.</li>
                <br>
                <li>Students can also take up tests , view their scores and responses as well as view the documents uploaded by the faculty. </li>
                <br>
                <li>The Faculty Module provides provision for the faculty to view and edit their profile , visualize the feedback given by the students both in form of tables and graphs.</li>
                <br>
                <li>Faculty can also upload tests and documents for the students.</li>
              </ul>   
              <br>  
              <h3><i class="fa fa-download"></i> &nbsp;Download user manuals from below: </h3>
              <br>
              <div align="center">
    <button class="btn"><i class="fa fa-download"></i>&nbsp;<a style= "color : white ;" href="upload/Student_User_Manual.pdf" download><u><b>  Download student user manual </b></u></a></button>
    <button class="btn"><i class="fa fa-download"></i>&nbsp;<a style= "color : white ;" href="upload/Faculty_User_Manual.pdf" download><u><b>  Download faculty user manual </b></u></a></button>
    </div>      
            </div>
        </div>
    </div> </div></div>     <?php
include('../footer.php');
?>
</body>
</html>