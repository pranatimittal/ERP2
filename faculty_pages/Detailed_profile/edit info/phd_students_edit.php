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
  height: 80%;
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
   width: 100%;
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
      text-align: justify;
      vertical-align: middle;
   }   
   
   th { 
    text-align: justify;
      font-weight: bold;
   }
   
   tr:nth-child(2n) { background-color: white; }
      tr:nth-child(2n+1) { background-color: #D6EAF8 ; }
      a{
    color:#1F618D;
}
@media (max-width: 576px) {
    .heading {
   font-size: 10px;
   padding: 10px;
}
   .table-users { 
      width:100%;
   }
   td, th { 
       padding-top:5px;
       padding-bottom:5px;
       padding-right:3px;
     padding-left:3px;
     font-size:8px;
   }
  a{
      font-size:8px;
  }
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


 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Edit Research Students</title>
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
<br>

<?php
echo '<div class="table-users">
   <div class="heading"><b>PhD Students</b></div>
   
   <table cellspacing="0">
      <tr>
         
         <th>S.No</th>    
         <th>Name</th>
         <th>Topic</th>
         <th>University</th>
         <th>Date</th>
         <th>Edit</th>
         <th>Delete</th>

      </tr>';
$sno1=1;

$q11=mysqli_query($con,"SELECT * FROM f_student WHERE fid='$fid' AND type='PhD' " )or die('Error231');

if(mysqli_num_rows($q11) > 0)
{
 
 while($row11=mysqli_fetch_array($q11))
  {
    $n=$row11["name"];
    $t=$row11["topic"];
    $u=$row11["university"];
    $d=$row11["date"];
    $sid=$row11["sid"];

    $darr=explode("-",$d);
      
      echo '<tr>
         <td>'.$sno1++.'.</td>
         <td>'.$n.'</td>
         <td>'.$t.'</td>
         <td>'.$u.'</td>
         <td>'.$darr[2].'/'.$darr[1].'/'.$darr[0].'</td><td><a href="edit_phd_here.php?id='.$sid.'">Edit</a></td><td><a href="del_Pstu.php?id='.$sid.'">Delete</a></td></tr>';
  }
  
  }
  echo '</table>
      </div>';
?>

</div>
 </div>   
<?php
include('footer.php');
?>
</body>
</html>