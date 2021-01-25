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

<?php
    $hid=$_GET["hid"];
    $res=$_GET["ans"];
    $qid=$_GET["qid"];
    $ri=$_GET["ri"];
    $wr=$_GET["wr"];
    $un=$_GET["un"];
    $_SESSION["hid"]=$hid;
    $em=$_SESSION['email'];

?>

<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>View Responses</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
/* Style the body */
.content {
  flex: 1 0 auto;
}  
body {
  font-family: Arial;
  /* margin: 0; */
}

/* Header/Logo Title */
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
/*.footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  }*/
 

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
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

.manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
      
    }

#chart-container {
    width: 100%;
    height: auto;
    text-align:center;
}

#bodyofchart {
     margin-left:auto;
     margin-right:auto;
     margin-bottom:5%;
     margin-top:5%;
     width: 35%;
     padding: 20px;
     height: auto;
     box-shadow: 0 4px 8px 0 grey;
}
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 2px solid #dddddd;

  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #fff;
  color: white;
}
.tooltip {
  position: relative;
  display: inline-block;
  /* border-bottom: 1px dotted black; */
}

.tooltip .tooltiptext {
  visibility: hidden;
  font-size:15px;
  width: 200px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
.box{
   border: 1px solid #8CC9E6 ;
   background-color:#DDF1F1; 
   width:80%;
   margin-left:auto;
   margin-right:auto;
   margin-top:2%;
}
.box:hover{
  background-color:#B3E1E2;
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
     font-size: 20px;
   }
th,td{
  font-size:15px;
  padding:5px;
}
#bodyofchart{
 
  width:300px;
  height:150px;
  
}
.tooltip .tooltiptext {
  font-size:10px;
  width: 120px;
  padding: 5px 5px;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}
.box{
  margin-top:4%;
}
.box h3{
  font-size:15px;
}
 }
</style>
 <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
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
        <a class="active" href="stu_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="stu_viewtest.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Take a test</a> 
        <a href="result.php"><i class="fa fa-certificate"></i> View Result</a>
        <a href="logout.php"><i class="fa fa-sign-out  fa-logout"></i> Logout</a>
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

<?php
  
  $query = mysqli_query($con,"SELECT hid, email, score, FIND_IN_SET( score, ( SELECT GROUP_CONCAT( DISTINCT score ORDER BY score DESC ) FROM history WHERE quizid='$qid') ) AS rank FROM history WHERE quizid='$qid' ") or die('Error1');

while($ro = mysqli_fetch_array($query)) {
  $r = $ro['rank'];
  $e_= $ro['email'];

    if($e_ == $em)
    {
      $rr=$r;
    }
  }
  echo '<div class="box">
  <h3 style="text-align:center;color:#079BDF "> Your class rank is '.$rr.'</h3>
  </div>';
  
  ?>
 
<br>
<h1>Responses of the test </h1>
</div>
 
<div class = "manageuser">
  <table align="center">
  <tr>
    <th style="background-color:black;color:white;">SNo.</th>
    <th style="background-color:black;color:white;">Question</th>
    <th style="background-color:black;color:white;">Response</th>
  </tr>

    <?php
 
$ans_array=explode("@",$res);
  //print_r($ans_array);
  $len=count($ans_array);
  
  for ($x = 0; $x < $len-1; $x++)
  {
  	$opid1=$ans_array[$x];
  	$ua=substr($opid1,0,1);
  	if($ua != "U")
  	{
  		$result = mysqli_query($con,"SELECT * FROM options as O inner join ques as q on O.qid= q.qid where O.optionid='$opid1'") or die('Error');
	  	while($row = mysqli_fetch_array($result)) {
		  $qu =$row['ques'];
		  $opt=$row['option'];
		  $c=$x+1;
		  echo '<tr><td>'.$c.'</td><td>'.$qu.'</td><td>'.$opt.'</td></tr> ';
		}
  	}
  	else
  	{
  	 $questt=substr($opid1,1);
  	 $c=$x+1;
	 echo '<tr><td>'.$c.'</td><td>'.$questt.'</td><td>Unattempted</td></tr> ';
  	}
  	
  	
  }

echo '</table></div>';

?>

<br><br>

  <div id="bodyofchart">
        <div id="chart-container">
        <canvas id="graphCanvas1"></canvas>
    </div>
</div>
    <script>
        $(document).ready(function () {
            showGraph2();
        });

        function showGraph2()
        {
            {
              
                $.post("sdata.php" ,
                function (data)
                {
                    console.log(data);
                    var r = data[0];
                    var w = data[1];
                    var u = data[2];

                    var chartdata = {
                        labels:['Correct Answer', 'Wrong Answer','Unattempted'],
                        datasets: [
                            {
                                label: 'Responses ',
                                backgroundColor: [
                                        'rgba(0, 204, 0, 0.9)',
                                        'rgba(230, 46, 0, 0.9)',
                                        'rgba(0, 115, 230, 0.9)'
                                        ],
                                hoverBackgroundColor:[
                                        'rgba(0, 204, 0, 1)',
                                        'rgba(230, 46, 0, 1)',
                                        'rgba0, 115, 230, 1)' 
                                        ],
                                data: [r,w,u]
                            }
                        ]
                    };

                    var option = {
                      rotation: 1 * Math.PI,
                      circumference: 1 * Math.PI
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

<?php
 //pertcent of correct responses
      $tq=$len-1;

      $pc=($ri/$tq)*100;
      //echo $pc;echo " %  - correct %";
      //pertcent of wrong responses
      $pw=($wr/$tq)*100;
      //echo $pw;echo " %  - wrong %";
      //pertcent of unattempted responses
      $pu=($un/$tq)*100;
      //echo $pu;echo " %  - unattempted %";

?>

<div class = "manageuser">
  <table align="center">
  <tr>
  
    <th style="color:green;"><div class="tooltip">Percentage of correct answers <i class='fa fa-check' style='color:green'></i><span class="tooltiptext">It shows the percentage of the correct answers</span>
    </div></th>
    <td><?php echo round($pc,2)."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:red'><div class="tooltip">Percentage of wrong answers <i class='fa fa-times' style='color:red'></i><span class="tooltiptext">It shows the percentage of the wrong answers</span>
    </div></th>
    <td><?php echo round($pw,2)."%"; ?></td> 
  </tr>
  <tr>
    <th style='color:blue'><div class="tooltip">Percentage of unattempted answers <span class="tooltiptext">It shows the percentage of the unattempted answers</span>
    </div></th>
    <td><?php echo round($pu,2)."%"; ?></td> 
  </tr>
  </table>
  </div>


</div> 
    
    <?php
include('../footer.php');
?>

</body>
</html>