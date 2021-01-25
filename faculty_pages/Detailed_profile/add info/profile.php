<?php
include('config.php');
session_start();
//echo $_SESSION['idf'];

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
document.onkeydown = function(e) {
        if (e.ctrlKey &&
            (e.keyCode === 85 ||
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
   .header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B
;
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
.sidenav {
  float:left;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 0px;
  margin-top:0px;
  padding: 0;
  width: 200px;
  background-color: #F1F1F1
;
  /* position: fixed; */
  /* height: 100%; */
  /* overflow: auto; */
  height: 95%;
}
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    display: block;
  padding: 16px;
  text-decoration: none;
  font-size: 16px;
  color: black;
  border: none;
  background: none;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn{
    width:200px;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    background-color: #555;
  color: white;
}
.active {
  background-color: #4CAF50
;
  color: white;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #ABB2B9
;
  color:black;
  padding-left: 0px;
}
/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.contentx {
  margin-top:0px;
  margin-left: 200px;
  padding: 1px 16px;
  /* height: 1000px; */
 background-color:black;
}
.content {
  flex: 1 0 auto;
}
/* Add padding to containers */
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
  margin-right: 20px;
  margin-left: 20px;
  margin-top: 20px;
  margin-bottom: 20px;
  border-radius:12px;
}
/* Full-width input fields */
input[type=text],input[type=file],textarea,select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #F1F1F1
;
  border-radius:12px;
}
input[type=text]:focus , textarea:focus,select:focus{
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #F1F1F1
;
  margin-bottom: 25px;
}
label{
    margin-left:1%;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50
;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius:50px;
}
.registerbtn:hover {
  opacity: 1;
  background-color: #333333
;
}
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
  .sidenav,.dropdown-btn {
  width: 120px;
}
.sidenav a ,.dropdown-btn{
  padding: 10px;
  font-size:10px;
}
.contentx {
  margin-left: 120px;
  padding: 1px 6px;
}
.fa-caret-down {
  float: right;
  padding-right: 0px;
}
.container {
 margin-left:auto;
 margin-right:auto;
 font-size:10px;
 width:90%;
}
::placeholder{
    font-size:10px;
}
select{
    font-size:10px;
}
.registerbtn {
    font-size:10px;
    width:90%;
    margin-left:5%;
}
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Profile</title>
</head>
<body>
    <a name="top"></a>
    <div class="content">
    <div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div>
<div  style="background-color: #186A3B
 ; height:20px;">
 </div>
<div class="sidenav">
<a href="../edit info/home_edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Details</a>
<a href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
<a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Add Profile</a>
  <button class="dropdown-btn"><i class="fa fa-search"></i> Add Research
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="research_publications.php">Research Publications</a>
  <a href="ongoing_research.php">Ongoing Research</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-book" aria-hidden="true"></i> Add Publications
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="journal_publications.php"><i class="fa fa-plus"></i> Journal</a>
  <a href="conference_publications.php"><i class="fa fa-plus"></i> Conference</a>
  <a href="book_publications.php"><i class="fa fa-plus"></i> Book</a>
  </div>
  <a href="funding.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Add Funding</a>
  <!-- <a href="technologies.php"><i class="fa fa-desktop" aria-hidden="true"></i> Add Technologies</a> -->
  <a href="achievements.php"><i class="fa fa-trophy" aria-hidden="true"></i> Add Achievements</a>
  <button class="dropdown-btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Students
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="phd_students.php"><i class="fa fa-plus"></i> PhD Students</a>
  <a href="research_students.php"><i class="fa fa-plus"></i> Research Students</a>
  <a href="master_students.php"><i class="fa fa-plus"></i> Master Students</a>
  </div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<div class="contentx">
<form method="post" enctype="multipart/form-data">
  <div class="container">
    <h1 style="text-align:center;">Profile</h1>
    <p style="text-align:center;">Please fill in your profile details here !!!</p>
    <hr>
    <label for="deptname"><b>Department Name</b></label>
    <select  name="deptname" required>
    <option value="">Select your department.</option>
    <option value="1">Computer Science and Engineering</option>
    <option value="2">Electronics and Communication Engineering</option>
    <option value="3">Information Technology</option>
    <option value="4">Mechanical and Automation Engineering</option>
    </select>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" required>
    <label for="desig"><b>Designation</b></label>
    <input type="text" placeholder="Enter your designation" name="desig" required>
    <label for="qua"><b>Qualifications</b></label>
  <textarea id="qua" name="qua" placeholder="Enter your qualifications. " style="height:200px" required></textarea>
    <label for="spe"><b>Areas of Specialization</b></label>
  <textarea id="spe" name="spe" placeholder="Enter your areas of specialization. . . ." style="height:200px" required></textarea>
  <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter your email" name="email" required>
    <label for="office"><b>Office Location</b></label>
    <input type="text" placeholder="Enter your office location" name="office" required>
    <label for="teaching"><b>Currently Teaching</b></label>
    <input type="text" placeholder="Enter what you are currently teaching" name="teaching" required>
     <label for="interest"><b>Interests</b></label>
  <textarea id="interest" name="interest" placeholder="Enter your interests. " style="height:200px" required></textarea>
  <label for="ps"><b>Professional Societies</b></label>
  <textarea id="ps" name="ps" placeholder="Enter information about the professional societies you have participated in . . . ." style="height:200px" required></textarea>
 <hr>
    <button name="sub" type="submit" class="registerbtn">SUBMIT</button>
  </div>
</form>
<?php
        if(isset($_POST["sub"]))
        {
          $dname=$_POST["deptname"];
          $name=$_POST["name"];
          $d=$_POST["desig"];
          $quali=$_POST["qua"];
          $spe=$_POST["spe"];
          $of=$_POST["office"];
          $in=$_POST["interest"];
          $teach=$_POST["teaching"];
          $ps=$_POST["ps"];
          $fid=$_SESSION['idf'];
          $e=$_SESSION['Emailf'];
          $query="INSERT into faculty VALUES ('$fid','$d','$quali','$spe','$dname','$name','$e','$of','$teach', '$in', '$ps')";
          $row=mysqli_query($con, $query);
          if($row > 0)
          {
            echo "<script>alert('Successful! Click OK to proceed. ')</script>";
            echo "<script>window.location.href='home.php'</script>";
          }
          else
          {
            echo "<script>alert('Unsuccessful! Try again. ')</script>";
          }
        }
     ?>
</div>
 </div>
<?php
include('footer.php');
?>
</body>
</html>