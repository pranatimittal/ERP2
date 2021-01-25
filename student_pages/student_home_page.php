<?php
include('config.php');
session_start();
?>
<?php
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    font-size: 35px;
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
.main h1{
    font-size: 20px;
  }
  .adminpanel{
    width:250px;
    margin:30px auto 0;
    padding:20px;
    font-size: 10px;
    }
    .adminpanel p{
      font-size:20px;
    }
}
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Student Feedback Module</title>
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
    <a class="active" href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="student_home_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="add_fb_for_teacher.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Feedback</a> 
    <a href="view_fb_given.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback given for faculty</a>
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
      <h1>FEEDBACK MODULE</h1>
        <div class = "adminpanel">
          <?php
            $a=$_SESSION['Email'];
            $result = mysqli_query($con,"SELECT * FROM login_student WHERE email='$a' " ) or die('Error');
              while($row = mysqli_fetch_array($result)) {
                $p = $row['program'];
                $br = $row['branch'];
                $s = $row['semester'];
                $_SESSION["prog"]=$p; 
                $_SESSION["bran"]=$br; 
                $_SESSION["sem"]=$s; 
              }
          ?>
          <h2>Welcome <?php echo $a; ?></h2>
          <p>You can provide feedback for your respective teachers so as to enhance the teaching-learning process. You can also view the feedback provided by you.</p>
        </div>
      </div>
      </div> 
    <?php
include('../footer.php');
?>
</body>
</html>