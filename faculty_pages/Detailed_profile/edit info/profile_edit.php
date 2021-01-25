<?php
include('config.php');
session_start();

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='../faculty_login.php'</script>";
}

$fid=$_SESSION["idf"];
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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
.sidenav {
  float:left;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 0px;
  margin-top:0px;
  padding: 0;
  width: 200px;
  background-color: #F1F1F1;
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
  background-color: #4CAF50;
  color: white;
}
/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #ABB2B9;
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
  background: #F1F1F1;
  border-radius:12px;
  font-size:17px;
  /* font-weight: 600; */
}
input[type=text]:focus , textarea:focus,select:focus{
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #F1F1F1;
  margin-bottom: 25px;
}
label{
    margin-left:1%;
    font-size:18px;
}
/* Set a style for the submit button */
.registerbtn {
  background:white;
  border: 2px solid  #4CAF50;
  color: green;
  padding: 16px 20px;
  margin: 8px 0;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius:50px;
}
.registerbtn:hover {
  opacity: 1;
  background: #4CAF50;
  color:white;
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
input[type=text],input[type=file],textarea,select{
  font-size:11px;
}
label{
  font-size:12px;
}
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Edit Profile</title>
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
 <div class="sidenav">
 <a href="../add info/home.php"><i class="fa fa-plus" aria-hidden="true"></i> Add Details</a>
<a href="home_edit.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
<a href="profile_edit.php"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile</a>
  <button class="dropdown-btn"><i class="fa fa-search"></i> Edit Research  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="research_publications_edit.php">Research Publications</a>
  <a href="ongoing_research_edit.php">Ongoing Research</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-book" aria-hidden="true"></i> Edit Publications  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="journal_publications_edit.php"><i class="fa fa-pencil"></i> Journal</a>
  <a href="conference_publications_edit.php"><i class="fa fa-pencil"></i> Conference</a>
  <a href="book_publications_edit.php"><i class="fa fa-pencil"></i> Book</a>
  </div>
  <a href="funding_edit.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Edit Funding</a>
  <!-- <a href="technologies_edit.php"><i class="fa fa-desktop" aria-hidden="true"></i> Edit Technologies</a> -->
  <a href="achievements_edit.php"><i class="fa fa-trophy" aria-hidden="true"></i> Edit Achievements</a>
  <button class="dropdown-btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Edit Students  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="phd_students_edit.php"><i class="fa fa-pencil"></i> PhD Students</a>
  <a href="research_students_edit.php"><i class="fa fa-pencil"></i> Research Students</a>
  <a href="master_students_edit.php"><i class="fa fa-pencil"></i> Master Students</a>
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
    <p style="text-align:center;">Edit your profile details from here !!!</p>
    <hr>

    <?php
     $q=mysqli_query($con,"SELECT * FROM faculty WHERE fid='$fid' ")or die('Error231');
       while($row=mysqli_fetch_array($q))
            {
                $name=$row["profile_name"];
                $d=$row["designation"];
                $qu=$row["qualification"];
                $a=$row["area_of_sp"];
                $o=$row["office_loc"];
                $ct=$row["cur_teaching"];
                $i=$row["interests"];
                $e=$row["email"];
                $p=$row["prof_society"];
                $dep=$row["did"];

                 $dept = array(1=>"Computer Science and Engineering", 2=>"Electronics and Communication Engineering",3=>"Information Technology",4=>"Mechanical and Automation Engineering");
                $department=$dept[$dep];
                //echo $q;
    echo'<label for="deptname"><b>Department Name</b></label>
    <input type="text" value="'.$department.'" name="deptname" readonly>
    <label for="name"><b>Name</b></label>
    <input type="text" value="'.$name.'" name="name" required>
    <label for="desig"><b>Designation</b></label>
    <input type="text" value="'.$d.'" name="desig" required>
    <label for="qua"><b>Qualifications</b></label>';
    echo '<textarea id="qua" name="qua" style="height:200px" required>'.$qu.'</textarea>
    <label for="spe"><b>Areas of Specialization</b></label>
  <textarea id="spe" name="spe" style="height:200px" required>'.$a.'</textarea>
  <label for="email"><b>Email</b></label>
    <input type="text" value="'.$e.'" name="email" required>
    <label for="office"><b>Office Location</b></label>
    <input type="text" value="'.$o.'" name="office" required>
    <label for="teaching"><b>Currently Teaching</b></label>
    <input type="text" value="'.$ct.'" name="teaching" required>
     <label for="interest"><b>Interests</b></label>
  <textarea id="interest" name="interest"  style="height:200px" required>'.$i.'</textarea>
  <label for="ps"><b>Professional Societies</b></label>
  <textarea id="ps" name="ps" style="height:200px" required>'.$p.' </textarea>';
}
  ?>
 <hr>
    <button name="sub" type="submit" class="registerbtn"><b>SUBMIT</b></button>
  </div>
</form>
<?php
        if(isset($_POST["sub"]))
        {
          $name=$_POST["name"];
          $d=$_POST["desig"];
          $quali=$_POST["qua"];
          $spe=$_POST["spe"];
          $of=$_POST["office"];
          $in=$_POST["interest"];
          $teach=$_POST["teaching"];
          $ps=$_POST["ps"];
          $fid=$_SESSION['idf'];
          $e=$_POST["email"];
          
          $query="UPDATE faculty SET designation='$d',qualification='$quali',area_of_sp='$spe',profile_name='$name',email='$e',office_loc='$o',cur_teaching='$teach',interests='$in',prof_society='$ps' WHERE fid='$fid'";
          $row=mysqli_query($con, $query)or die("error1265");
          if($row > 0)
          {
            echo "<script>alert('Successful! Click OK to proceed. ')</script>";
            echo "<script>window.location.href='profile_edit.php'</script>";
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