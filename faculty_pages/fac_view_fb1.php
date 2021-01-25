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
.main h1,h2{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 25px;
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
.viewdetailed{
  text-align:center;
} 
.viewdetailed a{
color: black;
/* text-decoration: none; */
font-size: 25px;
}
.viewdetailed a:hover{
color: blue;
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
     font-size: 18px;
   }
   th,td{
     font-size:12px;
   }
   h2{
     font-size:12px;
   }
   .viewdetailed a{
font-size: 16px;
}
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Faculty Average Feedback</title>
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
    <a href="fac_fb_home.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="fac_view_fb.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback</a>
    <a href="graph.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Visualize Feedback</a>
  </div>
  <div class="main">
        <h1>VIEW FEEDBACKS</h1>
         <?php 
             $s=$_GET['s'];
             $d=$_GET['d'];
             $fn=$_GET['fn'];
             echo "<h2> Faculty Name :".$fn." &nbsp&nbsp&nbsp Subject Name :".$s."  &nbsp&nbsp&nbsp Date :".$d." </h2><br>";
         ?>
        </div>
         <br>
        <div class = "manageuser">
          <table align="center">
          <tr>
            <th>Section</th>
            <th>Average Marks Given</th> 
          </tr>
          <?php
          $id=$_SESSION['idf'];
          $result = mysqli_query($con,"SELECT count(*),AVG(teaching_skill),AVG(presentation_skills), AVG(personal_attributes), AVG(Qoflecture),AVG(practical_section),AVG(beyond_class),AVG(gq1),AVG(gq2) FROM teacher_fb WHERE fac_id='$id' AND f_subject='$s' AND date='$d'") or die('Error');
          while($row = mysqli_fetch_array($result)) {
            $t = $row['AVG(teaching_skill)']*2;
            $per = $row['AVG(personal_attributes)']*2;
            $pr = $row['AVG(presentation_skills)']*2;
            $qol= $row['AVG(Qoflecture)']*2;
            $prac=$row['AVG(practical_section)']*2;
            $bey = $row['AVG(beyond_class)']*2;
            $g1 = $row['AVG(gq1)']*100;
            $g2 = $row['AVG(gq2)']*100;
            $fbcnt=$row['count(*)'];
            //echo $fbcnt;
            //$g11 = $g1 ? 'Yes' : 'No';
            //$g12 = $g2 ? 'Yes' : 'No';
            $t1=round($t,3);
            $per1=round($per,3);
            $pr1=round($pr,3);
            $qol1=round($qol,3);
            $prac1=round($prac,3);
            $bey1=round($bey,3);
                    echo '<tr>
                      <td>Teaching Skills</td>
                      <td>'.$t1.'</td>
                    </tr>
                    <tr>
                      <td>Presentation Skills</td>
                      <td>'.$pr1.'</td>
                    <tr>
                      <td>Quality of lectures</td>
                      <td>'.$qol1.'</td>
                    </tr>
                     <td>Beyond the Class</td>
                      <td>'.$bey1.'</td>
                    </tr>
                    <tr>
                      <td>Personal Attributes</td>
                      <td>'.$per1.'</td>
                    <tr>
                      <td>Practical Section</td>
                      <td>'.$prac1.'</td>
                    </tr>
              </table>
              <br>
              <br>
              <table align="center">
                <tr>
                  <th>General Questions</th>
                  <th>Response</th>
                </tr>
                <tr><td>Would you like to take the same teacher again in other courses?</td><td>'.$g1.' %</td></tr><tr><td>Are you satisfied with the evaluation of answer sheets by this teacher?(If No , please provide the reason specifically in suggestion box below.)</td><td>'.$g2.' % </td></tr>
                </table>
                <br>
                <br>';
 }
          echo '<br>
          <table align="center">
            <tr>
              <th>Suggestions</th>
            </tr>';
          $sn=1;
        $result1 = mysqli_query($con,"SELECT suggestions FROM teacher_fb WHERE fac_id='$id' AND f_subject='$s' AND date='$d'") or die('Error');
          while($row1 = mysqli_fetch_array($result1)) {
            $sugg = $row1['suggestions'];
            if($sugg != '')
            {
               echo "<tr><td style='text-align:left;'>".$sn++.". ".$sugg."\r\n</td></tr>";
            }                
          }
          echo '</table><br><br>'; 
          
          echo '<div class="viewdetailed">
          <a title="View" href="view_detailed_fb.php?s='.$s.'&d='.$d.'&fn='.$fn.'"><i><b>View Detailed Feedback</b></i></a>
          </div><br>';
        ?>
          </div> 
    <?php
include('../footer.php');
?>
</body>
</html> 