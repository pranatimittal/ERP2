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
.content {
  flex: 1 0 auto;
}
.page-wrapper {
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
}
.wrapper--w790 {
  max-width: 790px;
}
.title {
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  color: #fff;
}
.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}
.card-5 {
  background: #fff;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}
.card-5 .card-heading {
  padding: 20px 0;
  background: #1A1A1A;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}
.card-5 .card-body {
  padding: 52px 85px;
  padding-bottom: 73px;
}
.mapouter
{
position:relative;
text-align:right;
height:294px;
width:369px;
border: 2px solid black;
}
.gmap_canvas
{
overflow:hidden;
background:none!important;
height:294px;
width:369px;
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
  .card-5 .card-body {
  padding: 10px;
 
}
  .gmap_canvas
{
height:180px;
width:320px;
}
.mapouter
{
  height:180px;
width:320px;

}
 }
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Contact</title>
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
</div>
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
        <div class="card-heading">
                <h2 class="title">Contact Details</h2>
            </div>
            <div class="card-body">
              <h4>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN (IGDTUW)</h4>
              <p> <i class="fa fa-home" aria-hidden="true"></i> <b>Address:</b> </p>
                  <div class="mapouter">
                  <div class="gmap_canvas">
                  <iframe width="554" height="448" id="gmap_canvas" src="https://maps.google.com/maps?q=indira%20gandhi%20delhi%20teachnical%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                  </div>
                  </div>
                  <br>
                  <p> <i class="fa fa-phone-square" aria-hidden="true"></i> <b>Contact:</b> &nbsp;011- 23900261</p>
                  <p style="margin-left:92px;">011- 23900264</p>
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