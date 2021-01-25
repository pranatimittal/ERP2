<?php
include('config.php');
session_start();
$_SESSION["xy"]="qwertasdf";
$_SESSION["client"]="index";
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
             (e.keyCode === 85 || 
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
          background: white;
        }   
    
    

    a:link {
      text-decoration: none;
      color:black;
    }

    a:hover {
        color: #1C2833 ;
        text-decoration: underline;
      }


   /* .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: black;
        color: white;
        text-align: center;
      }*/

/* Header/Logo Title */
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
.content {
  flex: 1 0 auto;

}
body{
    /* margin: 0;
    padding: 0; */
    /* display: flex;
    justify-content:center;
    align-items: center; */
    min-height: 100vh;
    /* background: #212121; */
    font-family: sans-serif;
  }
  .box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0px auto;
    
  }
  .card{
    position: relative;
    width: 300px;
    height: 350px;
    margin: 6% auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
    background:#fff ;
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #4CAF50;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #4CAF50;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  /* .card .imgBx{
   
      position: absolute;
      margin:auto;
      width: 100%;
      height: 100%;
      object-fit: cover;
  } */

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 10px;
   font-weight: 600;
   font-size: 15px;
   /* color: #777; */
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
   } 
   .desc{
     color:white;
     /* margin-left:8%; */
     text-align:center;
   }
.desc h2 a{
  color:white;
  font-size:20px;
 
}
.desc p{
  color:white;
  font-size:13px;
  margin:9%;
  text-align:center;
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
  .card{
    width: 60%;
    margin-left:auto;
    margin-right:auto;
    margin-top:0%;
    margin-bottom:6%;
  }
  .box{
    width:100%;
  }
  .heading1 h1{
    font-size:18px;
  }
  .desc h2{
font-size:15px;
  }
  .desc p{
font-size:12px;
  }
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>List Of Departments</title>
</head>
<body>
  <a name="top"></a>
    <div class="content">
	<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 
<div  style="background-color: green; height:20px;">
 </div>
<div class="heading1">
  <h1 style="text-align:center;color:black;font-family: 'Nunito Sans', sans-serif;"><b><u>LIST OF DEPARTMENTS  </u><b></h1>
</div>
<br>
<br>

<div class="box">
      <div class="card">
        <div class="imgBx">
          <div class="desc">
           <?php
            echo '<h2><a href="short_profile.php?did=5">Applied Sciences and Humanities</a></h2>';
            ?>
          <p>The important objective of the Department is to prepare and train the first year B. Tech students in Physics, Chemistry, Mathematics and Communication skills with an applied approach. The Applied Sciences Department constitutes of eight highly qualified faculties of respective subjects.</p>
         </div>
        </div>
        <div class="details">
          <?php
            echo '<h2><a href="short_profile.php?did=5">Applied Sciences and Humanities</a></h2>';
            ?>
        </div>
      </div>
    
       <div class="card">
         <div class="imgBx">
         <div class="desc">
            <?php
            echo '<h2><a href="short_profile.php?did=1">Computer Science & Engineering</a></h2>';
            ?>
          <p>This department aims at developing the fundamental conceptual knowledge along with the total personality, which helps computer engineers to face the challenges of rapidly changing software industry.Continuous research work and live projects are taken up by the department.</p>
         </div>
         </div>
         <div class="details">
           <?php
            echo '<h2><a href="short_profile.php?did=1">Computer Science & Engineering</a></h2>';
            ?>
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
         <div class="desc">
          <?php
            echo '<h2><a href="short_profile.php?did=3">Information technology</a></h2>';
            ?> 
          <p>Department of IT aims to prepare students to undertake careers involving innovation and problem solving using IT, or to undertake advanced studies for research careers in IT.It aims to emerge as a centre of excellence in leveraging information technology to stimulate the exchange and creation of knowledge.</p>
         </div> 
         </div>
         <div class="details">
         <?php
            echo '<h2><a href="short_profile.php?did=3">Information technology</a></h2>';
            ?> 
          </div>
       </div>
 
  </div>
  <br>
  <br>
  <br>
  <div class="box">
      <div class="card">
        <div class="imgBx">
        <div class="desc">
           <?php
            echo '<h2><a href="short_profile.php?did=2">Electronics & Communication Engineering</a></h2>';
            ?> 
          <p>The department aims to impart quality technical education to the students aspiring for a career in the field of electronics and communications engineering. The department also caters to the needs of other engineering disciplines where electronics is taught.</p>
         </div>  
        </div>
        <div class="details">
        <?php
            echo '<h2><a href="short_profile.php?did=2">Electronics & Communication Engineering</a></h2>';
            ?> 
        </div>
      </div>
         
       <div class="card">
         <div class="imgBx">
         <div class="desc">
         <?php
            echo '<h2><a href="short_profile.php?did=4">Mechanical & Automation Engineering</a></h2>';
            ?> 
          <p>Besides giving a through grounding in basic sciences and engineering subjects the curriculum in MAE emphasises on deep understanding of applied mechanics, machine design, heat transfer, refrigeration, machine tools, metrology, robotics etc.</p>
         </div>
         </div>
         <div class="details">
         <?php
            echo '<h2><a href="short_profile.php?did=4">Mechanical & Automation Engineering</a></h2>';
            ?> 
          </div>
       </div>

       <div class="card">
         <div class="imgBx">
         <div class="desc">
          <?php
            echo '<h2><a href="short_profile.php?did=6">Architecture and Planning</a></h2>';
            ?> 
          <p>The Department of Architecture and Planning started in 2015 as a step towards social equity and gender parity in technical professions, having a vision that architectural education should empower students to become protagonist of positive change by exploring, learning and practicing a sustainable form of architecture.</p>
         </div> 
         </div>
         <div class="details">
         <?php
            echo '<h2><a href="short_profile.php?did=6">Architecture and Planning</a></h2>';
            ?> 
          </div>
       </div>
 
  </div>
</div> 
<?php

$query1= "UPDATE visitor SET counter= counter + 1 WHERE id =1";
$row= mysqli_query($con,$query1);

?>
 
 
<style>
.footer {
   /* position: fixed; */
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
   flex-shrink: 0;
   margin-top:20px;
}
.footer a{
    color: white;
    font-size: 16px;
    text-decoration: none;
}
.footer a:hover{
    color: red;
}
html, body {
  height: 100%;
}
body {
  display: flex;
  flex-direction: column;
}
#visitor {
  color: white;
   font-size: 18px;
   float: right;
   margin-right: 65px;
}
.footerfont a{
  font-size: 18px;
}
@media (max-width: 576px) {
   .footer a{
     font-size:10px;
   }
   #visitor {
     font-size:10px;}
}
</style>

<div class="footer">
    <div  style="background-color: rgb(204, 199, 199); height:7px;"></div>
  <p style="height: 10px;">
    <?php
  echo '<a href="../index.php"><b>Home &emsp;&emsp;</b></a>';
  ?>

    <a href="../footer options/support.php"><b>Support &emsp;&emsp;</b></a>
    <a href="../footer options/contact.php"><b>Contact Us&emsp;&emsp;</b></a>
    <a href="../footer options/team.php"><b>Team&emsp;&emsp;</b></a>
    <a href="../footer options/guideline.php"><b>Guidelines&emsp;&emsp;</b></a>
    <?php
      $q=mysqli_query($con,"SELECT counter FROM visitor WHERE id=1");
      while($row = mysqli_fetch_array($q)) {
        $cnt = $row['counter'];
      echo '<div id="visitor"> Hits till date :'.$cnt.'</div>';      }
    ?>
    <div class="footerfont">
    <a href="#top" style="float: left;margin-left:50px;"><i class="fa fa-caret-up" aria-hidden="true" style="color: white;"></i>&nbsp;Back to top</a>
    </div>
</p>
  <div  style="background-color: black; height:22px;"></div>
  <div  style="background-color: white; height:10px;"></div>
</div>
 
  
</body>
</html>