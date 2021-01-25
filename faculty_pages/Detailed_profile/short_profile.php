<?php
include('config.php');
session_start();
$img = $_SESSION['image'];

?>
<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='index.php'</script>";
}
//$did=$_GET["did"];
//$_SESSION["did"]=$did;
$fid=$_SESSION["idf"];

?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background: white;
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
.content {
  flex: 1 0 auto;
}

.heading {
   background-color:#398B93;
   color: white;
   font-size: 24px;
   padding: 16px;
   text-align: center;
   text-transform: uppercase;
}

.fac_img {
   border-radius: 50%;
   height: 100px;
   width: 100px;
}

.table-users {
   border: 1px solid #398B93;
   border-radius: 10px;
   box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
   max-width: calc(100% - 32px);
   margin: 16px auto;
   overflow: hidden;
   width: 65%;
   font-family: 'Nunito Sans', sans-serif;
}

table {
   width: 100%;
}  
   td, th { 
      color: #398B93;
      padding:10px;
   }
   
   td {
      text-align: left;
      vertical-align: middle;
   }   
   
   th { 
      width:20%;
      font-weight: bold;
   }
   
   tr:nth-child(2n) { background-color: white; }
      tr:nth-child(2n+1) { background-color: #D6EAF8 ; }
a{
    color:#1F618D;
}
.button1
     {
  border-radius: 12px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin:auto;
  display:block;
  

     }
     .button1:hover {
  background-color: #3e8e41;
  
}
@media (max-width: 576px) {
    .heading {
   font-size: 14px;
   padding: 10px;
}
   .table-users { 
      width:100%;
   }
   td, th { 
       padding-top:2px;
       padding-bottom:2px;
       padding-right:2px;
     padding-left:5px;
     font-size:10px;
   }
  a{
      font-size:10px;
  }
  .fac_img {
  
   height: 60px;
   width:60px;
}

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
  h2{
     font-size:15px;
  }
  .button1
     {font-size: 8px;
  padding: 10px;
     }
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Faculty Directory</title>
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
​<h2 style="text-align:center;font-family: 'Nunito Sans', sans-serif;">Faculty Directory </h2>

<?php

 $q=mysqli_query($con,"SELECT * FROM faculty WHERE fid='$fid' " )or die('Error231');
 
 while($row=mysqli_fetch_array($q))
      {
          $name=$row["profile_name"];
          $d=$row["designation"];
          $quali=$row["qualification"];
          $spe=$row["area_of_sp"];
          $fid=$row["fid"];

echo'<div class="table-users">
   <div class="heading"><b>'.$name.'</b></div>
   
   <table cellspacing="0">
      <tr>
         <th>Designation</th>
         <td>'.$d.'</td>
         <td rowspan="5" style="background-color:white; width:20%; border-left: 1px solid #398B93;text-align:center;"><img class="fac_img" src="../profile_pic/'.$img.'" alt="" /><br></td>
      </tr>
      <tr>
         <th>Qualification</th>
         <td style="text-align: justify;">'.$quali.'</td>
      </tr>
      <tr>
         <th>Areas of Specialization</th>
         <td style="text-align: justify;">'.$spe.'</td>
      </tr>
      
      </table>
      </div>
      <br>';
    }
    ?>
      <button class="button button1" onclick="location.href ='option.php';"<b>Go back to home</b></button>
</div> 


    
<?php
include('footer.php');
?>
</body>
</html>