<?php
include('config.php');
session_start();
//echo $_SESSION['image'];
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
  .box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    grid-gap: 15px;
    margin: 0px auto;
    
  }
  .card{
    position: relative;
    width: 220px;
    /* height: 350px; */
    margin: 6% auto;
   
  }
 
.heading1 h1{
    font-size:25px;
  }
  .button
     {
       width:100%;
       height:200px;
  border-radius: 12px;
  /* border:2px solid #4CAF50; */
  color:white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  /* margin: 4px 2px; */
  cursor: pointer;
  margin:auto;
  display:block;
     }

     .button:hover {
  background-color: #006600;
  color: white;
  border:2px solid #006600;
}
.button1{
  background-color:#009900;
  border:2px solid #009900;
}
.button2{
  background-color:#00CC99;
  border:2px solid #00CC99;
}
.button3{
  background-color:#009966;
  border:2px solid #009966;
}
.button4{
  background-color:#00CC66;
  border:2px solid #00CC66;
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
  .box{
    width:100%;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  }
  .card{
    width: 100%;
    margin-left:auto;
    margin-right:auto;
    margin-top:0%;
    margin-bottom:6%;
  }
  
  .heading1 h1{
    font-size:18px;
  }
  .button
     {
       width:80%;
       font-size: 20px;
  padding: 10px;
     }
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Option Page</title>
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
  <h1 style="text-align:center;color:black;font-family: 'Nunito Sans', sans-serif;"><u>FACULTY INFORMATION MANAGEMENT SYSTEM</u></h1>
</div>
<br>
<br>

<div class="box">
      <div class="card">
      <button class="button button1" onclick="location.href = 'short_profile.php';"><i class="fa fa-user" aria-hidden="true"></i> <b>View Profile</b></button>
      </div>
    
       <div class="card">
       <button class="button button2" onclick="location.href = 'add info/home.php';"><i class="fa fa-plus" aria-hidden="true"></i> <b>Add Details</b></button>
       </div>

       <div class="card">
       <button class="button button3" onclick="location.href = 'edit info/home_edit.php';"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Edit details</b></button>
       </div>

       <div class="card">
       <button class="button button4" onclick="location.href = '../fac_profile.php';" ><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Back to profile</b></button>
       </div>
 
  </div>

</div> 
    
<?php
include('footer.php');         
?>
</body>
</html>