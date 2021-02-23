<?php
include('config.php');
session_start();

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}

$id=$_SESSION['idf'];

$result=mysqli_query($con,"SELECT meeting_url FROM login_faculty WHERE id='$id'")or die('Error1');
$meet_url;
while($row = mysqli_fetch_array($result)) {
    $meet_url=$row[0];
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

table {
  margin-top: 25px;
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
    <title>Faculty Teaching Module</title>
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
    <a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="fac_classroom_page.php"><i class="fa fa-user  fa-home"></i> Home</a>
    <a href="<?php echo $meet_url ?>" target="_blank"><i class="fa fa-upload"></i> Initiate class </a>
    <a href="fac_view_attendance.php"><i class="fa fa-eye" aria-hidden="true"></i> View Attendance</a>
    <a href="fac_resources.php"><i class="fa fa-upload" aria-hidden="true"></i> Resources Center </a>
    <a href="fac_display_tt.php"><i class="fa fa-upload" aria-hidden="true"></i> View timetable</a>
    <a href="fac_edit_tt.php"><i class="fa fa-upload" aria-hidden="true"></i>Edit timetable</a>
  </div>

<table align="center">
  <tr>
    <td>    </td>
    <th>9-10</th>
    <th>10-11</th>
    <th>11-12</th>
    <th>12-1</th>
    <th>1-2</th>
    <th>2-3</th>
    <th>3-4</th>
    <th>4-5</th>
  </tr>

<?php
$E=$_SESSION['Emailf'];
$id = $_SESSION['idf'];

$result1 = mysqli_query($con,"SELECT id FROM login_faculty WHERE email='$E' " ) or die('Error'); 

  while($row = mysqli_fetch_array($result1)) {
    $teach = $row['id'];
  }
    ?>

<tr>
  <th>Monday</th>
    <?php
  $result = mysqli_query($con,"SELECT * FROM teacher_tt WHERE day='Monday' AND teacher_id='$teach'") or die('Error');

  while($row = mysqli_fetch_array($result)){
    $d = $row['day'];
    $t = $row['tim'];
    $c = $row['class'];

    echo '<td>'.$c.'</td>';
  }
?>
  </tr>

  <tr>
    <th>Tuesday</th>
  <?php
  $result = mysqli_query($con,"SELECT * FROM teacher_tt WHERE day='Tuesday' AND teacher_id='$teach'") or die('Error');

  while($row = mysqli_fetch_array($result)){
    $d = $row['day'];
    $t = $row['tim'];
    $c = $row['class'];

    echo '<td>'.$c.'</td>';
  }
?>
  </tr>

  <tr>
    <th>Wednesday</th>
  <?php
  $result = mysqli_query($con,"SELECT * FROM teacher_tt WHERE day='Wednesday' AND teacher_id='$teach'") or die('Error');

  while($row = mysqli_fetch_array($result)){
    $d = $row['day'];
    $t = $row['tim'];
    $c = $row['class'];

    echo '<td>'.$c.'</td>';
  }
?>
  </tr>

  <tr>
    <th>Thursday</th>
  <?php
  $result = mysqli_query($con,"SELECT * FROM teacher_tt WHERE day='Thursday' AND teacher_id='$teach'") or die('Error');

  while($row = mysqli_fetch_array($result)){
    $d = $row['day'];
    $t = $row['tim'];
    $c = $row['class'];

    echo '<td>'.$c.'</td>';
  }
?>
  </tr>

  <tr>
    <th>Friday</th>
  <?php
  $result = mysqli_query($con,"SELECT * FROM teacher_tt WHERE day='Friday' AND teacher_id='$teach'") or die('Error');

  while($row = mysqli_fetch_array($result)){
    $d = $row['day'];
    $t = $row['tim'];
    $c = $row['class'];

    echo '<td>'.$c.'</td>';
  }
?>
  </tr>

</table>


    <?php
include('../footer.php');
?>
</body>
</html>
