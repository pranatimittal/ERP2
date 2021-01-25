<?php
include('config.php');
session_start();

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
   max-width: calc(100% - 32px);
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
     
@media (max-width: 576px) {
   
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
  .sidebar {
  width: 100px;
}
.sidebar a {
  padding: 10px;
  font-size:10px;
}
.contentx {
  margin-left: 100px;
  padding: 1px 6px;
}
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
}
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Technologies</title>
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
​<div class="sidebar">
<a class="active" href="short_profile.php"><i class="fa fa-sitemap" aria-hidden="true"></i> Faculty Directory</a>
        <a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>       
        <a href="research.php"><i class="fa fa-search"></i> Research</a> 
        <a href="publications.php"><i class="fa fa-book" aria-hidden="true"></i> Publications</a>
        <a href="funding.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Funding</a>
        <a href="technologies.php"><i class="fa fa-desktop" aria-hidden="true"></i> Technologies</a>
        <a href="achievements.php"><i class="fa fa-trophy" aria-hidden="true"></i> Achievements</a>
        <a href="students.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students</a>
</div>

<div class="contentx">
<div class="table-users">
   <div class="heading"><b>Technologies Successfully Developed and Transferred</b></div>
   
   <table cellspacing="0">
      <tr>
      <th>S.No.</th>
         <th>Name</th>
         <th>Lead Developers</th>
         <th>Description</th>
      </tr>
      <tr>
      <td>1</td>
         <td>abc</td>
         <td>xyz, fgh</td>
         <td>qwertyuiopASDFGHJKL</td>
      </tr>
      <tr>
        <td>1</td>
         <td>abc</td>
         <td>xyz, fgh</td>
         <td>qwertyuiopASDFGHJKL</td>
      </tr>
      <tr>
      <td>1</td>
         <td>abc</td>
         <td>xyz, fgh</td>
         <td>qwertyuiopASDFGHJKL</td>
      </tr>
      </table>
      </div>

</div>

 </div>   
<?php
include('footer.php');
?>
</body>
</html>