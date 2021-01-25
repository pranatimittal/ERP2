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
     <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    
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
}
.header {
  position: relative;
  padding: 20px;
  background: white;
  color: #21610B;  
  font-size: 15px;
  
}

#chart-container {
    width: 100%;
    height: auto;
    text-align:center;
}

#bodyofchart {
   margin-left:auto;
   margin-right:auto;
   width: 69%;
   padding: 20px;
   height: auto;
   box-shadow: 0 4px 8px 0 grey;
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
 .main h1{
     font-size: 18px;
   }
   th,td{
     font-size:15px;
   }
 #bodyofchart{
  width:90%;
  margin:auto;
  height:180px;
}

#chart-container {
    width: 100%;
    height: 80px;
  }

 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>View Average Feedback Given</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar"  id="myTopnav">
    <a class="active" href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="student_home_page.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="add_fb_for_teacher.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Feedback</a> 
    <a href="view_fb_given.php"><i class="fa fa-eye" aria-hidden="true"></i> View Feedback given for faculty</a>
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
  <div class="main">
        <h1>VIEW FEEDBACK</h1>
        </div>
         <br>
<div id="bodyofchart">
            <div id="chart-container">
            <canvas id="graphCanvas"></canvas>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            showGraph1();
        });


        function showGraph1()
        {
            {
              
                $.post("sdata_fb.php" ,
                function (data)
                {
                    console.log(data);

                    var ts=data[0];
                    var pa=data[4];
                    var ps=data[1];
                    var qol=data[2];
                    var pra=data[5];
                    var bc=data[3];

                    var chartdata = {
                        labels:['Teaching Skills', 'Personal Attributes','Presentation Skills','Quality of Lectures','Practical Section','Beyond the Class'] ,
                        datasets: [
                          {
                                label: 'Score ',
                                backgroundColor: [
                                        'rgba(255, 209, 23,0.8)',
                                        'rgba(23, 96, 255, 0.8)',
                                        'rgba(23, 255, 27, 0.8)',
                                        'rgba(145, 145, 145 ,0.8)',
                                        'rgba(255, 54, 54 ,0.8)',
                                        'rgba(37, 207, 207 ,0.8)'
                                        ],
                                hoverBackgroundColor:[
                                        'rgba(255, 209, 23,1)',
                                        'rgba(23, 96, 255, 1)',
                                        'rgba(23, 255, 27, 1)',
                                        'rgba(145, 145, 145 ,1)',
                                        'rgba(255, 54, 54 ,1)',
                                        'rgba(37, 207, 207 ,1)'
                                        ],
                                data: [ts,pa,ps,qol,pra,bc]
                            }
                        ]
                    };

                    var option = {
                            rotation: 2 * Math.PI,
                            circumference: 2 * Math.PI,
                            responsive: true,
                            animation:{
                              animateScale:false
                            }
                           };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'pie',
                        data: chartdata,
                        options:option
                    });
                });
            }
        }

      </script>

         <br>

        <div class = "manageuser">
          <table align="center">
          <tr>
            <th>Sections</th>
            <th>Average Marks Given</th>
          </tr>
                   
   <?php

  if(@$_GET['fid']) 
  {
    $var=$_GET['fid'];
    $_SESSION["feedbackid"]=$var;
    $result = mysqli_query($con,"SELECT * FROM teacher_fb WHERE f_id='$var' ") or die('Error');
  
    while($row = mysqli_fetch_array($result)) {
      $t = $row['teaching_skill']*2;
      $per = $row['personal_attributes']*2;
      $pr = $row['presentation_skills']*2;
      $qol= $row['Qoflecture']*2;
      $prac=$row['practical_section']*2;
      $bey = $row['beyond_class']*2;
      $g1 = $row['gq1'];
      $g2 = $row['gq2'];
      $sug= $row['suggestions'];

      $g11 = $g1 ? 'Yes' : 'No';
      $g12 = $g2 ? 'Yes' : 'No';
      
      
              echo '<tr>
                <td>Teaching Skills</td>
                <td>'.$t.'</td>
              </tr>
              <tr>
                <td>Presentation Skills</td>
                <td>'.$pr.'</td>
              <tr>
                <td>Quality of lectures</td>
                <td>'.$qol.'</td>
              </tr>
               <td>Beyond the Class</td>
                <td>'.$bey.'</td>
              </tr>
              <tr>
                <td>Personal Attributes</td>
                <td>'.$per.'</td>
              <tr>
                <td>Practical Section</td>
                <td>'.$prac.'</td>
              </tr>
        </table>
        <br>
        <br>
        <table align="center">
          <tr>
            <th>General Questions</th>
            <th>Response</th>
          </tr>
          <tr><td>Would you like to take the same teacher again in other courses?</td><td>'.$g11.'</td></tr><tr><td>Are you satisfied with the evaluation of answer sheets by this teacher?(If No , please provide the reason specifically in suggestion box below.)</td><td>'.$g12.'</td></tr>
          </table>
          <br>
          <table align="center">
            <tr>
              <th>Suggestions</th>
            </tr>
            <tr><td>'.$sug.'</td></tr>
          </table><br>';

    }
  }
    
    echo '</div>';

  ?>
  </div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>
         