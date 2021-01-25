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
};$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});</script>


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
  /margin-left: 5px;/
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
  /margin-left: 70px;/
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


.Modal {
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 9999;
  width: 100%;
  height: 100%;
  padding-top: 100px;
  background-color: black;
  background-color: rgba(0, 0, 0, 0.4);
  -webkit-transition: 0.5s;
  overflow: auto;
  transition: all 0.3s linear;
}

.Modal-content {
  background-color: #fefefe;
   margin: auto;
   padding: 20px;
  border-radius: 4px;
  max-width: 450px;
  height: 450px;
}

.ModalOpen { overflow: hidden; }

.is-hidden { display: none; }

.is-visuallyHidden { opacity: 0; }

/* The Close Button */

.Close {
  color: #aaaaaa;
  float: right;
  font-size: 16px;
}

.Close:hover, .Close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.is-blurred {
  filter: blur(2px);
  -webkit-filter: blur(2px);
}

input[type="checkbox"]:required:invalid + label { color: red; }
  input[type="checkbox"]:required:valid + label { color: green; }

  .guide{
    background-color: #4CAF50;

  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 5px 5px;
  cursor: pointer; /* Pointer/hand icon */
  /* float: left;  */
  margin-left: 5px;
  width: 120px;
  font-size: 16px;
  }
  .guide:hover {
  background-color: #3e8e41;

}
.flip-card-back p{
  font-size:15px;
}
.content {
  flex: 1 0 auto;
}
img[src="learning_section.png"]{
  float: right;
  margin-right: 75px;
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
img[src="learning_section.png"]{
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

@media screen and (min-width: 1280px) , screen and (max-width: 1920px) {
        #yourID{  overflow-x: auto; overflow-y: auto; }
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
h4{
  font-size:12px;
}
.guide{
  padding: 2px 2px;
  margin-left: 5px;
  width: 80px;
  font-size: 12px;
  }
}


</style>



<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Student Module Page</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
<main id="myContainer" class="MainContainer">
    <div class="header">
        <img src="IGDTUW-logo.png" alt="logo" />
        <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
        <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
      </div>
      <div class="navbar">
        <a href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
        <div class="right">
        <a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
    </div>
      </div>
      <br>
      <div class="main">
        <h1>STUDENT MODULES</h1>
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
      <button onclick="location.href = 'profile.php';">VIEW PROFILE</button>
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
        <h2>FEEDBACK MODULE</h2>
      <p>You can give feedback as well as receive feedback with this module.</p>
      <p>Click on feedback module button below to explore all options of feedback module.</p>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="btn-group">
        <button id="myBtn">FEEDBACK MODULE</button>
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
        <h2>CLASSROOM MODULE</h2>
      <p>You can attend lectures, access discussion forum and check attendance with this module.</p>
      <p>Click on Classroom module button below to explore all options of Classroom module.</p>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="btn-group">
        <button onclick="location.href = 'classroom_page.php';">CLASSROOM MODULE</button>
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
      <p>You can download learning material, ppts, assignments as well as take test with the help of this module.</p>
    <p>Click on learning module button below to explore more about it.</p>
    </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="btn-group">
        <button onclick="location.href = 'learning_homepage.php';">ASSESSMENT MODULE</button>
      </div>
      </div>
    </div>

    </div>
    </main>


<div id="myModal" class="Modal is-hidden is-visuallyHidden">
    <!-- Modal content -->
  <div class="Modal-content">
  <span id="closeModal" class="Close">&times;</span>
  <!-- <h1><b><center><u>GUIDELINES</u></center></b></h1> -->
  <center><p><b><u>GUIDELINES</u></b></p></center>  <ul>
    <li>This feedback form is not to harm the sentiments of any teacher or student.</li>
    <br>  <li>It should be considered in a positive way.</li>
  <br>
  <li>Use of unacceptable language or words is strictly prohibited.Strict actions would be taken against those who does the same.</li>
</ul>
  <br>
  <br>
  <form>
  <h4><input id="check1" type="checkbox" required name="terms">
    <label for="check1">I accept the <u>Terms and Conditions</u></label></h4>   <input type="button" class="guide" value="Submit" onclick="confirmTerms()">  </form>
  </div>
  </div>

  <script>
  // Get the modal
var modal = document.getElementById('myModal');// Get the main container and the body
var body = document.getElementsByTagName('body');
var container = document.getElementById('myContainer');// Get the open button
var btnOpen = document.getElementById("myBtn");// Get the close button
var btnClose = document.getElementById("closeModal");// Open the modal
btnOpen.onclick = function() {
    modal.className = "Modal is-visuallyHidden";
    setTimeout(function() {
      container.className = "MainContainer is-blurred";
      modal.className = "Modal";
    }, 100);
    container.parentElement.className = "ModalOpen";
}// Close the modal
btnClose.onclick = function() {
    modal.className = "Modal is-hidden is-visuallyHidden";
    body.className = "";
    container.className = "MainContainer";
    container.parentElement.className = "";
}// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.className = "Modal is-hidden";
        body.className = "";
        container.className = "MainContainer";
        container.parentElement.className = "";
    }
}
function confirmTerms() {
        if (!(document.getElementById("check1").checked)) {
            alert("Please indicate that you accept the terms and conditions.");
            return false;
        }
        else{
            window.location.href = "student_home_page.php";
        }      }

</script></div>

<?php
include('../footer.php');
?>
</body>
</html>
