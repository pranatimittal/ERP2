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

#chart-container {
    width: 100%;
    height: auto;
}

#bodyofchart {
   width: 650PX;
   padding: 20px;
   height: 600px;
}
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

  .content {
  flex: 1 0 auto;
}  

        </style>
      </style>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
  <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Feedback Graphs</title>
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
      <h1>FEEDBACK MODULE</h1>

      
    <div id="chart-container">
        <canvas id="graphCanvas1"></canvas>
    </div>

    <script>
        $(document).ready(function () {
          
            showGraph2();
        });


        
        function showGraph2()
        {
            {
            	
                $.post("fdata_fb1.php" ,
                function (data)
                {
                    console.log(data);
                    var q1 = data[0];
                    var q2 = data[1];

                    var chartdata = {
                        labels:['Would you like to take the same teacher again in other courses?', 'Are you satisfied with the evaluation of answer sheets by this teacher?'],
                        datasets: [
                            {
                                label: 'Percentage ',
                                backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)'
                                        ],
                                borderColor:[
                                        'rgba(255, 99, 132, 0.6)',
                                        'rgba(54, 162, 235, 0.6)'
                                        ],
                                hoverBackgroundColor:[
                                        'rgba(255, 99, 132, 0.5)',
                                        'rgba(54, 162, 235, 0.5)' 
                                        ],
                                hoverBorderColor: [ 
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)'
                                        ],
                                data: [q1,q2]
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

      </div>
      </div> 
    
    <?php
include('../footer.php');
?>   
</body>
</html>