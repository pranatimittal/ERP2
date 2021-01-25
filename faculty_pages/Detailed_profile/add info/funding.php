<?php
include('config.php');
session_start();

$idf=$_SESSION["idf"];
//echo $idf;
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
.sidenav {
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
  height: 90%;
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
.active1 {
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
 
}

.content1 {
  flex: 1 0 auto;
}

.collapsible {
    background-color: #777;
    color: white;
    /* cursor: pointer; */
    padding: 18px;
    width: 95%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 21px;
    border-radius:12px;
  }
  
  .active, .collapsible:hover {
    background-color: #555;
  }
  
  /* .collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }
  
  .active:after {
    content: "\2212";
  } */
  .content {
    /* padding: 0 18px; */
    /* max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out; */
    background-color: #f1f1f1;
    width:95%;
    
    
  }
  input {
  outline: none;
  border: none;
}

input.input1 {
  height: 50px;
  border-radius: 25px;
  padding: 0 30px;
}
input.input1 + .shadow-input1 {
  border-radius: 25px;
}
  textarea.input1 {
  min-height: 150px;
  border-radius: 25px;
  padding: 12px 30px;
  width:80%;
  margin-left:auto;
  margin-right:auto;
}
textarea.input1 + .shadow-input1 {
  border-radius: 25px;
}
.wrap-input1 {
  position: relative;
  width: 95%;
  z-index: 1;
  margin-bottom: 20px;
}

.input1 {
  display: block;
  width: 100%;
  background: #e6e6e6;
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 1.5;
  color: #666666;
}

.shadow-input1 {
  content: '';
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  box-shadow: 0px 0px 0px 0px;
  color: rgba(87,184,70, 0.5);
}

.input1:focus + .shadow-input1 {
  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
  animation: anim-shadow 0.5s ease-in-out forwards;
}
.registerbtn {
  background-color: #57b846;
  color: white;
  padding: 16px 20px;
  /* margin: 8px 0; */
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  border-radius:50px;
  margin-left:25%;
  font-size:15px;
}

.registerbtn:hover {
  opacity: 1;
  background: #333333;
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
.collapsible {
    padding: 12px;
    font-size: 12px;
  }
  .registerbtn {
  padding: 16px 20px;
  margin: 8px 0;
  width: 100%;
  font-size:10px;
}
::placeholder{
  font-size:10px;
}

 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Funding</title>
</head>
<body>
    <a name="top"></a>
    <div class="content1">
  <div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 

<div  style="background-color: #186A3B ; height:20px;">
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

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active1");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>


<form method="post">
<div class="contentx">

<h4 class="collapsible">Currently Funded Projects</h4>
<div class="content">
 
  <div class="wrap-input1 validate-input">
                <textarea class="input1" name="cur" placeholder="Enter currently funded projects here !!!"></textarea>
                <span class="shadow-input1"></span>
  </div>

</div>
<br>
<br>

<h4 class="collapsible">Successfully Completed Projects</h4>
<div class="content">
  
  <div class="wrap-input1 validate-input">
                <textarea class="input1" name="com" placeholder="Enter successfully completed projects here !!!"></textarea>
                <span class="shadow-input1"></span>
  </div>
 
</div>
<br>
<br>

<h4 class="collapsible">Consulting Assignments</h4>
<div class="content">
  
  <div class="wrap-input1 validate-input">
                <textarea class="input1" name="ass" placeholder="Enter consulting assignments here !!!"></textarea>
                <span class="shadow-input1"></span>
  </div>

</div>
<br>
<br>

<h4 class="collapsible">Equipment Grants</h4>
<div class="content">
 
  <div class="wrap-input1 validate-input">
                <textarea class="input1" name="equip" placeholder="Enter equipment grants here !!!"></textarea>
                <span class="shadow-input1"></span>
  </div>

</div>
<br>
<br>
<button type="submit" class="registerbtn" name="sub" ><i class="fa fa-arrow-left" aria-hidden="true"></i> Submit & return</button>
  <br>  <br><button type="addmore" class="registerbtn" name="add"><i class="fa fa-plus" aria-hidden="true" ></i> Submit & Click to add more</button>
  
  
 </form>

<?php

if(isset($_POST["sub"]) or isset($_POST["add"]))
{
  $tid=$_SESSION['idf'];
  
  $cur= $_POST['cur'];
   $com= $_POST['com'];
    $ass= $_POST['ass'];
   $equip= $_POST['equip'];


if($cur){

  $query = "INSERT INTO f_current_funding VALUES ('', '$tid', '$cur')";
  $row= mysqli_query($con,$query);
}
   
 if($com){  
  $query = "INSERT INTO f_complete_funding VALUES ('', '$tid', '$com')";
  $row= mysqli_query($con,$query);
 }
    
if($ass){ 
  $query = "INSERT INTO f_cons_ass_funding VALUES ('', '$tid', '$ass')";
  $row= mysqli_query($con,$query);
}
  
if($equip){ 
  $query = "INSERT INTO f_equipment_funding VALUES ('', '$tid', '$equip')";
  $row= mysqli_query($con,$query);
}

    if($row > 0)
    {
    echo "<script>alert('Fundings successfully added.');</script>";
    }
    else
    {
    echo "<script>alert('Unsuccessful');</script>";
    }

  
 
}


  if(isset($_POST["sub"]))
  {
    echo "<script>window.location.href='home.php'</script>";
  }
  else if(isset($_POST["add"]))
  {
    echo "<script>window.location.href='funding.php'</script>";
  }

?>  

</div>

 </div>   
<?php
include('footer.php');
?>
</body>
</html>