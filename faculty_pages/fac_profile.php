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



.card {
  box-shadow: 0 4px 8px 4px rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}

.title {
  color: grey;
  font-size: 18px;
}
.right {
    text-align: right;
    float: right;
    
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color:black;
  color: white;
}


.collapsible {
    background-color: grey;
    color: white;
    cursor: pointer;
    padding: 12px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 21px;
  }
  
  .active, .collapsible:hover {
    background-color: #555;
  }
  
  .collapsible:after {
    content: '\002B';
    color: white;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }
  
  .active:after {
    content: "\2212";
  }
  .content {
    /* padding: 0 18px; */
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f5f5f5;
    
  }
  .content1 {
  flex: 1 0 auto;
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
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 250px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}

.title {
  color: grey;
  font-size: 15px;
}
.card p{
  font-size:12px;
}
.card h1{
  font-size:20px;
}
.collapsible {
    padding: 12px;
    width: 100%;
    font-size: 15px;
  }
  td, th {
  padding: 5px;
  font-size:12px;
}
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Faculty Profile</title>
</head>
<body>
<a name="top"></a>
    <div class="content1">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar">
    <a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
     <a href="f_edit_profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a> 
    <div class="right">  
        <a href="Detailed_profile/option.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add-Edit Detailed Profile</a>    
    <a href="fac_add_sub.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Subjects</a> 
    </div> 
    
  </div>
  
  <h2 style="text-align:center"><u>User Profile</u></h2>
  <div class="card">

<?php
  
  $E=$_SESSION['Emailf'];
  $id = $_SESSION['idf'];

  $result1 = mysqli_query($con,"SELECT * FROM login_faculty WHERE email='$E' " ) or die('Error'); 

  while($row = mysqli_fetch_array($result1)) {
    $n = $row['tname'];
   $img= $row['image'];
   $mob= $row['mob'];
   
    echo '<br><img src="profile_pic/'.$img.'" alt="" style="width:50%">';
    echo '<p class="title">Faculty</p>';
    echo "<h1>".$n."</h1>"; //username
    echo "<p>E-mail id: ".$E."</p>";
        echo "<p>Mobile No: ".$mob."</p>";


   }
   ?>
   <br>
   <button class="collapsible">Program and Branch Details</button>
   <div class="content">
     <br>
     <?php
     echo "<table align='center'>
      <tr>
        <th>Sno.</th>
        <th>Program</th>
        <th>Branch</th>
        <th>Semester</th>
      </tr>";
    
  $result2 = mysqli_query($con,"SELECT * FROM coursedetails WHERE tid='$id' " ) or die('Error');
  $sno=0;    
  while($row = mysqli_fetch_array($result2)) {
    $p=$row['program'];
    $b=$row['branch'];
    $se=$row['semester'];
    $sno++;
    echo '<tr><td>'.$sno.'</td><td>'.$p.'</td><td>'.$b.'</td><td>'.$se.'</td></tr>';
   }

   echo "</table><br><br>"; 
   ?>
   </div>
<br>

<button class="collapsible">Subject Details</button>
<div class="content">
  <br>
  <?php
   $sno=0;   

   echo "<table align='center'>
      <tr>
        <th>Sno.</th>
        <th>Subject Code</th>
        <th>Subject</th>
      </tr>";
    
  $result3 = mysqli_query($con,"SELECT * FROM subject WHERE tid='$id' " ) or die('Error');  

  while($row = mysqli_fetch_array($result3)) {
    $sn=$row['subjname'];
    $sc=$row['subjcode'];
    $sno++;
    echo '<tr><td>'.$sno.'</td><td>'.$sc.'</td><td>'.$sn.'</td></tr>';
   }   
    
    echo "</table>"; 
    ?>
    </div>
<br>
<?php
    // echo '<p  style="background-color: grey; height:10px;"></p>';
    echo "</div>";

    ?>


<script>

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
</div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>