<?php
include('config.php');
session_start();
  unset($_SESSION['Email']);
  unset($_SESSION['Password']);
  unset($_SESSION['TestId']);
  unset($_SESSION['Correct']);
  unset($_SESSION['Wrong']);

  session_destroy();

echo "";
?>

<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};

$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});

</script>
    
    <style>

        body {
          font-family: Arial, Helvetica, sans-serif;
          background: white;
        }   
    
    .logout{

      padding: 60px;
            margin-left: auto;
            margin-right: auto;
            width: 34em
            display : inline-block
           
    }

    h2,h4{
       text-align: center; 
       padding: 20px;
    }

    

    a:link {
      text-decoration: none;
      color:grey;
    }

    a:hover {
        color: darkgreen;
        text-decoration: underline;
      }


   /* .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
      }*/

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
  .navbar a {
   float: left;
   font-size: 12px;
   color: white;
   text-align: center;
   padding: 8px 10px;
   text-decoration: none;
 }
 h2{
   font-size:17px;
   padding: 5px;
 }
 h4{
  padding: 5px;
 }
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Logout</title>
</head>
<body>
	<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 

<div  style="background-color: green; height:20px;">
 </div>
​

<div class = "logout" style="text-align: center">
  <i class="fa fa-sign-out fa-logout fa-5x"></i>
  <h2>You have successfully logged out!</h2>
  <h4><a href="student_login.php">Click here</a> to login again.</h4>
</div>

<!-- <div class="footer">
 <p style="color: white;">Copyright of IGDTUW</p>
</div>
 -->
</body>
</html>