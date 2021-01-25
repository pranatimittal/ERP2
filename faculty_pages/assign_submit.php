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
    <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Document Uploaded</title>
    <style>
     .content {
  flex: 1 0 auto;
}   
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
    .submit{
        text-align: center;
        font-size: 25px;
    }
    .button1
     {font-size: 10px;
        border-radius: 12px;
      
        background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin:auto;
  display:block;
  

     }
     .button1:hover {
  background-color: #3e8e41;
  
}

.ty{
  text-align: center;
  font-size: 30px;
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
 .submit{
   font-size:15px;
 }
 .ty{
   font-size:20px;
 }
 .button1
     {font-size: 15px;
  padding: 12px;
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
              <div  style="background-color: green; height:15px;">
                </div>          
   
    <br>
    <br>
        <div style="font-size: 150px;text-align: center;">
    <i class="fa fa-check-circle-o" style="color:green"></i>
        </div>  
        <h1 class="ty">Thank You!</h1>
        <p class="submit"><strong>Document has been successfully uploaded.</strong></p>
        
        <br>
                <button class="button button1" onclick="location.href = 'fac_teaching_home.php';">Continue to homepage</button>
      
       
                </div> 
    
    <?php
include('../footer.php');
?>  
</body>
</html>