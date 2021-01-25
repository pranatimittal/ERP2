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
   body{
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
  margin-left:5%;
  margin-bottom:5%;
  background-color:white;
   float:left;
   width: 40%;
   padding: 20px;
   height: auto;
   border:1px grey;
   box-shadow: 0 4px 8px 0 grey;
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


.main h2{
    font-family: "Times New Roman", Times, serif;
    font-size: 35px;
    color:#1a1a1a;
    text-align: center;
  }
  .cardx {
  box-shadow: 0 4px 8px 0 grey;
  background-color:white;
  transition: 0.3s;
  width: 43.5%;
  height:180px;
  border-radius:2px;
  margin-bottom:5%;
  float:left;
  margin-left:5%;
  font-family: "Times New Roman", Times, serif;

}

.cardx:hover {
  box-shadow: 0 8px 16px 0 darkgrey;
}

.containerx {
  padding: 2px 16px;
  
}
  .content {
  flex: 1 0 auto;
  background-color:#dddddd45;
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
 .main h2{
     font-size: 12px;
   }
   #bodyofchart {
 
  margin-bottom:5%;
   width: 80%;
   
}
.cardx {
  width: 90%;
  margin-left:5%;
}
.cardx h3{
  font-size:12px;
}
.cardx p{
  font-size:10px;
}
 }

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
<br>
  <div class="main">
      <h2>Graphical Representation of the Feedback</h2>
    <br>
      <div id="bodyofchart">
        <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>
</div>

	<div id="bodyofchart">
        <div id="chart-container">
        <canvas id="graphCanvas1"></canvas>
    </div>
</div>

    <script>
        $(document).ready(function () {
            showGraph1();
            showGraph2();
        });


        function showGraph1()
        {
            {
            	
                $.post("fdata_fb.php" ,
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
                                        'rgba(255, 209, 23,0.9)',
                                        'rgba(23, 96, 255, 0.9)',
                                        'rgba(23, 255, 27, 0.9)',
                                        'rgba(145, 145, 145 ,0.9)',
                                        'rgba(255, 54, 54 ,0.9)',
                                        'rgba(37, 207, 207 ,0.9)'
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

                    var option ={
                    	scales:{
                    		yAxes:[{
                    			stacked:true,
                    			gridLines:{
                    				display:true
                    				//color:'rgba(255,99,132,0.4)'
                    			}
                    		}],

                    		xAxes:[{
                    			
                    			gridLines:{
                    				display:false
                    				//color:'rgba(255,99,132,0.2)'
                    			}
                    		}]
                    	}
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,
                        options:option
                    });
                });
            }
        }

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
                                        'rgba(255,153,0, 0.9)',
                                        'rgba(20, 110, 180, 0.9)'
                                        ],
                                hoverBackgroundColor:[
                                        'rgba(255, 153, 0, 1)',
                                        'rgba(20, 110, 180, 1)' 
                                        ],
                                data: [q1,q2]
                            }
                        ]
                    };

                    var option = {
					rotation: 1 * Math.PI,
			                circumference: 1 * Math.PI,
			                responsive:true
		                 };

                    var graphTarget = $("#graphCanvas1");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options:option
                    });
                });
            }
        }

        
        </script>

<div class="cardx">
        <div class="containerx"> 
    <h3>Bar Graph</h3>
    <p>The above bar graph shows the cumulative feedback scores for the various skills as per the section wise feedback given by the students.</p> 
    <p><i>The score can be seen by hovering over the respective field in the graph.</i></p>
  </div>
</div>

<div class="cardx">
        <div class="containerx">
    <h3>Doughnut Graph</h3>
    <p>The above semi-doughnut graph shows the cumulative feedback scores for the general questions as per the section wise feedback given by the students.</p> 
    <p><i>The score can be seen by hovering over the respective field in the graph.</i></p>
    
  </div>
</div>

      </div>

      </div> 
    
    <?php
include('../footer.php');
?>    
</body>
</html>