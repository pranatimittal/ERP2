<?php
include('config.php');
session_start();
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
.text{
    text-align: center;
}
.manageuser{
			font-family: "Times New Roman", Times, serif;
      font-size: 20px;
      
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
  background-color: #4CAF50;
  color: white;
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
 h2{
     font-size: 15px;
   }
   th,td{
     font-size:8px;
   }
   table{
     width:80%;
   }
 }
  </style>
  <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>View Uploaded Assignments</title>
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
    <a href="learning_homepage.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="download_resources.php"><i class="fa fa-download" aria-hidden="true"></i> Download Assignments</a> 
    <a href="stu_upload_ass.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload Assignments </a>
        <a href="view_ass.php"><i class="fa fa-eye" aria-hidden="true"></i> Manage Your Uploaded Assignments </a>
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

  <div class="text"><h2> View documents uploaded by you</h2></div>
  <br>
  <div class = "manageuser">
    <table align="center">
    <tr>
      <th>SNo.</th>
      <th>Date</th>
      <th>Document Name</th>
      <th>Subject Name</th>
      <th>Message</th>
	  <th>Download</th>
      <th>Manage</th>
      
    </tr>
   <?php

//$id= $_SESSION['idf'];

            $a=$_SESSION['Email'];
//echo $id;

  $result = mysqli_query($con,"SELECT * FROM assignment WHERE stuemail= '$a'") or die('Error');
$c=1;

while($row = mysqli_fetch_array($result)) {
  
  
  $i= $row['aid'];
  $d= $row['date'];
  $q = $row['doc'];
  $qid = $row['docid'];
  $a = $row['message'];
  $s_name = $row['subject'];
  
    $result1 = mysqli_query($con,"SELECT doc_name FROM documents WHERE id= '$qid'") or die('Error1');
  while($row1 = mysqli_fetch_array($result1)) {

$doc= $row1['doc_name'];
 
  echo '<tr><td>'.$c++.'</td>
  <td>'.$d.'</td>
  <td>'.$doc.'</td>
  <td>'.$s_name.'</td>
  <td>'.$a.'</td>
  <td><a href=assignment/'.$q.' download>
                    <i class="fa fa-download"></i>
                  </a></td>
  <td><a title="Delete Document" href="del_doc.php?aid='.$i.'"><i>Delete</i></a></td>';
  
}
}
$c=0;
echo '</table></div></div>';

?> 
        
  </table>

</div>        

  
<br>
<br>

</div> 
    
    <?php
include('../footer.php');
?>
  </body>
</html>
