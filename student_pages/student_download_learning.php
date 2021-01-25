<?php
include('config.php');
session_start();
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


.main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
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
 .main h1{
     font-size: 20px;
   }
   .manageuser{
     font-size:12px;
   }
   th,td{
    padding:5px;
   }
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Download Resources</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar">
    <a href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="classroom_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="student_download_learning.php"><i class="fa fa-download" aria-hidden="true"></i> Download learning material</a> 
    
  </div>

  <div class="main">
      <h1>Download Learning Material from here</h1>
      </div>
      <br>
        <div class = "manageuser">
          <table align="center">
          <tr>
            <th>SNo.</th>
            <th>Date</th>
            <th>Document Name</th>
            <th>Given by faculty</th>
            <th>Subject Name</th>
            <th>Download</th>
            <th>Message</th>
          </tr>
          
             <?php


  $result = mysqli_query($con,"SELECT * FROM documents") or die('Error');
$c=0;

while($row = mysqli_fetch_array($result)) {
  
  $d= $row['date'];
  $q = $row['doc_name'];
  $qid = $row['doc'];
  $a = $row['message'];
  $s_name = $row['sub_name'];
  $tid=$row['teacher_id'];
  $tn;

  $result1 = mysqli_query($con,"SELECT tname FROM login_faculty WHERE id='$tid' ") or die('Error2');

      while($row1 = mysqli_fetch_array($result1)) {
      $tn= $row1['tname'];
      }

  $c++;
  echo '<tr><td>'.$c.'</td>
  <td>'.$d.'</td>
  <td>'.$q.'</td>
  <td>'.$tn.'</td>
  <td>'.$s_name.'</td>
  <td><a href=../faculty_pages/upload/'.$qid.' download>
                    <i class="fa fa-download"></i>
                  </a></td>
  <td>'.$a.'</td></tr>';
}
$c=0;
echo '</table></div></div>';

?> 
        </table>

    </div>        
    </div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>