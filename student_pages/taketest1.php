<?php
include('config.php');
ob_start();
session_start();
?>
<?php
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}
?>
<?php
    $tid=$_GET["tid"];
    $tn=$_GET["tn"];
    $corr=$_GET["corr"];
    $wron=$_GET["wron"];
    $tq=$_GET["tq"];
    $in=$_GET["d"];
  //echo $in;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Test Pass Key</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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
/* Style the body */
.content {
  flex: 1 0 auto;
}  
body {
  font-family: Arial;
  /* margin: 0; */
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
* { 
  box-sizing: border-box;
}
input {
  outline: none;
  border: none;
}
textarea {
  outline: none;
  border: none;
}
textarea:focus, input:focus {
  border-color: transparent !important;
}
input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }
textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }
input::-webkit-input-placeholder { color: #999999;}
input:-moz-placeholder { color: #999999;}
input::-moz-placeholder { color: #999999;}
input:-ms-input-placeholder { color: #999999;}
textarea::-webkit-input-placeholder { color: #999999;}
textarea:-moz-placeholder { color: #999999;}
textarea::-moz-placeholder { color: #999999;}
textarea:-ms-input-placeholder { color: #999999;}
label {
  display: block;
  margin: 0;
}
button {
  outline: none !important;
  border: none;
  background: transparent;
}
button:hover {
  cursor: pointer;
}
iframe {
  border: none !important;
}
.txt1 {
  font-family: 'Open Sans', sans-serif;
  font-size: 13px;
  line-height: 1.4;
  color: #cccccc;
}
.limiter {
  width: 100%;
}
.container-login100 {
  width: 100%;  
  min-height: 42vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
   background-color: white;
}
.wrap-login100 {
  width: 560px;
}
.login100-form {
  width: 100%;
  background-color: transparent;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
}
.login100-form-title {
  width: 100%;
  display: block;
  font-family: 'Open Sans', sans-serif;
  font-size: 30px;
  color:black;
  line-height: 1.2;
  text-transform: uppercase;
  text-align: center;
  margin-bottom:25px ;
}
.wrap-input100 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-end;
  width: 50%;
  height: 75px;
  position: relative;
  border: 1px solid #e0e0e0;
  border-bottom: none;
  background-color: #fff;
}
.wrap-input100.rs1 {
  border-top-left-radius: 12px;
  border-right: none;
  background-color:  rgb(204, 198, 198);
  padding-bottom: 8px;
}
.wrap-input100.rs2 {
  border-top-right-radius: 12px;
  background-color: rgb(204, 198, 198);
  padding-bottom: 8px;
}
.label-input100 {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  color:black;
  line-height: 1.2;
  display: block;
  position: absolute;
  pointer-events: none;
  width: 100%;
  padding-left: 30px;
  left: 0;
  top: 28px;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.input100 {
  font-family: 'Open Sans', sans-serif;
  font-size: 30px;
  color: black;
  line-height: 1.2;
  display: block;
  width: 100%;
  background: transparent;
  padding: 0 30px;
}
.input100:focus {
  height: 55px;
}
.input100:focus + .label-input100 {
  top: 10px;
  font-size: 13px;
  color: #111111;
}
.has-val {
  height: 55px !important;
}
.has-val + .label-input100 {
  top: 10px;
  font-size: 13px;
  color: #111111;
}
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.login100-form-btn {
  font-family: 'Open Sans', sans-serif;
  font-size: 15px;
  color: black;
  line-height: 1.2;
  text-transform: uppercase;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 70px;
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
  overflow: hidden;
  background: #4CAF50;
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
  position: relative;
  z-index: 1;
}
.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  opacity: 0;
  background: #2575fc;
  background: -webkit-linear-gradient(right, #6a11cb, #2575fc);
  background: -o-linear-gradient(right, #6a11cb, #2575fc);
  background: -moz-linear-gradient(right, #6a11cb, #2575fc);
  background: linear-gradient(right, #6a11cb, #2575fc);
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.login100-form-btn:hover {
  background-color: #3e8e41;
  color:black;
}
.login100-form-btn:hover:before {
  opacity: 1;
}
.validate-input {
  position: relative;
}
.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  z-index: 100;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 2px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 12px;
  pointer-events: none;
  font-family: OpenSans-Bold;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
.alert-validate::after {
  content: "\f12a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  z-index: 110;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 18px;
}
.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}
@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
@media (max-width: 576px) {
  .wrap-input100 {
    width: 100%;
  }
  .wrap-input100.rs1 {
    border-top-right-radius: 12px;
    border-right: 1px solid #e0e0e0;
  }
  .wrap-input100.rs2 {
    border-top-right-radius: 0px;
  }
}
.container {
  margin-left:auto;
  margin-right:auto;
  width:850px;
  min-height: 15vh;
  background: white;
  border: 1px solid grey;
  box-shadow: 5px 10px 8px 10px #888888;
  border-radius: 12px;         
   padding:10px 10px; 
}

.container h3{
  color:green;
}
.navbar .icon {
  display: none;
}
.impins{
  font-size:22px;
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
 .container {
  margin-left:auto;
  margin-right:auto;
  width:90%;
  min-height: 15vh;        
   padding:10px 10px; 
}
.container h3{
  font-size:15px;
}
.login100-form-title{
  font-size:20px;
}
.label-input100{
  margin-left:20px;
}
.input100{
  margin-left:20px;
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
  <div class="navbar" id="myTopnav">
          <a class="active" href="stu_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
          <a href="stu_viewtest.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Take a test</a> 
          <a href="result.php"><i class="fa fa-certificate"></i> View Result</a>
          <a href="logout.php"><i class="fa fa-sign-out  fa-logout"></i> Logout</a>
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
<br>
<br>
<div class="container">
  <center><h2>Test Instructions:</h2></center>
  <h3 style="color:DodgerBlue;"><?php echo $in;?></h3>
  <h3>1. This is a MCQ based test.</h3>
  <h3>2. Every question has only one correct answer.</h3>
  <h3>3. Test can be attempted only once.</h3>
  <h3>4. Donot try to press the back button, once the test has started.The session will be expired.</h3>
  <h3>5. The test is timer based.  </h3>
  <h3>6. Each question has a timelimit. It must be answered within that time.  </h3>
  <h3>7. The question will be auto submitted once the time is up.</h3>
  <h3 style="color:red;" class="impins"><i>Kindly press submit button only once after attempting a question.Pressing it multiple times will skip some of the questions.</i></h3>
  </div>
<br>

<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100 p-b-160 p-t-50">
        <span class="login100-form-title p-b-43">
         <b>Enter Test pass key credentials</b>
        </span>
    <form action="" method="post" class="login100-form validate-form" >
        <div class="wrap-input100 rs1 validate-input>
          <input class="input100" type="text" name="username" readonly>
          <span style="margin-left:50px;">Test Name :<br> <?php echo $tn; ?></span>
        </div>
        <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
          <input class="input100" type="password" name="pwd">
          <span class="label-input100">Enter password here:</span>
        </div>
        <div class="container-login100-form-btn">
          <input class="login100-form-btn" type="submit" name="sub" value="Submit"/>
        </div>
      </form>
        </div>
  </div>
</div>





  
    <?php
  if(isset($_POST["sub"]))
  {
    $p= $_POST["pwd"];
      $query= "select * from quiz where quizid='$tid' and testkey='$p'";
      $row= mysqli_query($con,$query);
      $test= mysqli_fetch_array($row);
    $count=1;
    $_SESSION['count']=$count;
  $arr= array();
  global $arr;
  $sqll=mysqli_query($con,"SELECT * FROM ques WHERE quizid='$tid' ORDER BY rand()")or die('Error');
  $i=0;
  while($roww=mysqli_fetch_array($sqll))
  {
    $q=$roww['qid'];
    array_push($arr, $q);
    $i++;
  }
  $qs = http_build_query($arr);
  $index=0;
  $_SESSION['index']=$index;
  $_SESSION['tid']=$tid;
  $_SESSION['corr']=$corr;
  $_SESSION['wron']=$wron;
  $_SESSION['tq']=$tq;
  $_SESSION['count']=$count;
  $_SESSION['arr']=$arr;
$res= array();
global $res;
  $_SESSION['res']=$res;
      if($test>0)
      {
        echo "<script>alert('Click on OK to proceed.')</script>";
    echo "<script>window.location.href='taketest.php'</script>";
      }
      else
      {
        echo "<script>alert('Testpass Key is incorrect. Try again!')</script>";
      }
  }
?>
</div>
<br>
</div> 
    <?php
include('../footer.php');
?>
</body>
</html>