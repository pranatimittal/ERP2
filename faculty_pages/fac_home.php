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
}*/

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
}


.main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 50px;
    color:#5e0c17;
    text-align: center;
  }
  .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    }
    .content {
  flex: 1 0 auto;
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
   .adminpanel{
     width:80%;
     margin-top:40px;
     margin-left:auto;
     margin-right:auto;
     padding:10px;
     font-size: 12px;
     }
     .adminpanel p{
       font-size:20px;
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

 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Faculty Test Module</title>
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
    <a class="active" href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
        <a href="fac_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="fac_teaching_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
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
        <h1>Faculty Panel</h1>
          <div class = "adminpanel">

           <h2>   <?php $e=$_SESSION['Emailf']; echo $e;?>  Welcome to Faculty Control Panel</h2>
            <p>You can manage tests and results from here.</p>
          </div>
        </div>


        </div>

    <?php
include('../footer.php');
?>

</body>
</html>
