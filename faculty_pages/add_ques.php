<?php
   include('config.php');
  session_start();
$mon=0;
$m= $_SESSION["m"];
//echo $_SESSION["j"];
$quid=0;

$index= $_SESSION["index"];
//echo $index;
$tot= $_SESSION["totalq"];
//echo $tot;
?>
<?php

if($_SESSION["x"]=="" and $_SESSION["y"]=="")
{
  echo header('location:faculty_login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
/* .footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  } */
 

 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }
  /* .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    }*/ 
    /* .manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
    }   */

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


input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  font-size:20px;
  background-color: #3399ff;
  color: white;
  padding: 14px 18px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #00264d;
}
.registerbtn {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.registerbtn:hover {
  background-color: #45a049;
}
.quiz {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}
textarea{
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  float:left;
  margin-left:25%;
  font-size:15px; 
  width:30%; 
  height:25%; 
  }
.title1{
  margin-left:35%;
  font-size:30px;
}
.optionx{
  margin-left:35%;
}
  .navbar .icon {
  display: none;
}
.abc{
  float:left; 
  margin-top:10px;
   margin-left:30px;
   padding:left;
}
.que{
  font-size:20px;
  margin-left:40%;
}

@media (max-width: 576px) {
  .title1{
  margin-left:29%;
  font-size:20px;
}
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
textarea{
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 margin-left:5%;
 margin-right:auto;
  font-size:15px; 
  width:90%; 
  height:20%; 
  }
  .optionx{
  margin-left:35%;
}
input[type=submit] {
  width: 50%;
  font-size:12px;
  background-color: #3399ff;
  color: white;
  padding: 14px 18px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.registerbtn {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 8px 8px;
  margin: 8px 0;
}
.abc{
  
  margin-top:20px;
   margin-left:4%;
   padding:left;
}

input[type=text], select {
  width: 50%;
  padding: 8px 0px;
  margin: 8px 0;
}
::placeholder {
  font-size: 10px;
}
select{
  font-size: 8px;
}
.que{
  font-size:18px;
  margin-left:30%;
}
 }
 
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Add Questions</title>
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
        <a class="active" href="fac_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="manageuser.php"><i class="fa fa-users" aria-hidden="true"></i> Manage User</a> 
        <a href="add_quiz.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Quiz</a>

         
        <a href="viewtest.php"><i class="fa fa-eye" aria-hidden="true"></i> View Test</a>
        <a href="f_testresult.php"><i class="fa fa-address-card-o" aria-hidden="true"></i> View Result</a>
        <a href="f_leaderboard.php"><i class="fa fa-bar-chart " aria-hidden="true"></i> Leaderboard</a>
        <a href="f_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
<br>




 
<div class="row">
<span class="title1"><b>Enter Question Details</b></span><br /><br />
 <br>
 <form name="form" method="POST" enctype="multipart/form-data" >
 
 <fieldset style="width:90%;margin-left:auto;margin-right:auto;">
 <div class="col-md-3"></div><div class="col-md-6">
 
<?php
if($_SESSION["x"] and $_SESSION["y"])
{
  $mon=$_SESSION["totalq"];
  $kon=$_SESSION["qid"];
?>  


<br>
<div class="que"><b>Question number: <?php echo $m; ?><br /></div>
<br><br>
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$m.' "></label>  
  <div class="col-md-12">
  
  <?php
  echo '<textarea name="qns'.$m.'" class="form-control" placeholder="Write question number '.$m.' here.. and to upload any image click on Choose File"></textarea>';
?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
echo '<input class="abc" type="file" name="image'.$m.'" ><br';
?>
  </div>
</div>
<br><br><br><br><br>

<!-- Text input-->
<div class="optionx">
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$m.'1"></label>  
  <div class="col-md-12">
  <?php echo '<input id="'.$m.'1" name="'.$m.'1" placeholder="Enter option a" class="form-control input-md" type="text">'
    ?>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$m.'2"></label>  
  <div class="col-md-12">
  <?php echo '<input id="'.$m.'2" name="'.$m.'2" placeholder="Enter option b" class="form-control input-md" type="text">'
  ?>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$m.'3"></label>  
  <div class="col-md-12">
  <?php echo '<input id="'.$m.'3" name="'.$m.'3" placeholder="Enter option c" class="form-control input-md" type="text">'
    ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="'.$m.'4"></label>  
  <div class="col-md-12">
 <?php echo '<input id="'.$m.'4" name="'.$m.'4" placeholder="Enter option d" class="form-control input-md" type="text">'
  ?>  
  </div>
</div>




<br />
<b>Correct answer</b>:<br />
<?php echo '<select id="ans'.$m.'" name="ans'.$m.'" placeholder="Choose correct answer " class="form-control input-md" >

   <option value="a">Select answer for question: <?php echo $m; ?></option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'
 ?>
 </div>
 <br><br>



  <div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
   <button type="addmore" class="registerbtn" name="add" style="margin-left:26%;float: left;"><i class="fa fa-plus" aria-hidden="true" ></i> Submit </button>
   <br>
  
</div>
</div>
</div>

</fieldset>



</form>

<?php
if(isset($_POST["add"]))
{
  //echo "1";
  
  $j= $_SESSION["j"];
  
   
   $quid=mt_rand(1, 2000000);
 $que= $_POST['qns'.$j];
 
 
 //img start cod//e here
 			$img=basename($_FILES["image".$j]["name"]);
				$type=$_FILES["image".$j]["type"];
				$size=$_FILES["image".$j]["size"];
				$store=$_FILES["image".$j]["tmp_name"];
 
				//for support only image code here
			$n=explode('.',$img);
			$p=pathinfo("upload/".$img,PATHINFO_EXTENSION);
			$q=array("jpg","png","jpeg");
	if(in_array($p,$q))
	{
				//echo "1";
					move_uploaded_file($store,"upload/".$img);
					
			$query="INSERT INTO ques VALUES ('$quid','$kon','$que', '$img')";
			$row=mysqli_query($con, $query);
			if($row > 0)
			{
			//echo "33";
				echo "<script>alert('Question saved')</script>";
				//echo "<script>window.location.href='fac_home.php'</script>";
			}
			else
			{
				echo "<script>alert('not done')</script>";
			}
	}	
			else
			{
$query="INSERT INTO ques VALUES ('$quid','$kon','$que', '')";
$row=mysqli_query($con, $query);
				echo "<script>alert('Question saved')</script>";

			}
   
#$row= mysqli_query($con,"INSERT INTO ques VALUES ('$quid','$kon','$que','','')") or die('Error60');
 
$n=$mon;
#$eid=@$_GET['eid'];
#$ch=@$_GET['ch'];
$ch=4;
$eid= mt_rand(1, 2000000);

 //$qid=uniqid();
 $qns=$_POST['qns'.$j];
#$q3=mysqli_query($con,"INSERT INTO ques(qid, quizid, ques, choice,sn) VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");
  $oaid=mt_rand(1, 2000000);
  $obid=mt_rand(1, 2000000);
$ocid=mt_rand(1, 2000000);
$odid=mt_rand(1, 2000000);
$a=$_POST[$j.'1'];
$b=$_POST[$j.'2'];
$c=$_POST[$j.'3'];
$d=$_POST[$j.'4'];
$qa=mysqli_query($con,"INSERT INTO options VALUES  ('$quid','$a','$oaid')") or die('Error61');
$qb=mysqli_query($con,"INSERT INTO options VALUES  ('$quid','$b','$obid')") or die('Error62');
$qc=mysqli_query($con,"INSERT INTO options VALUES  ('$quid','$c','$ocid')") or die('Error63');
$qd=mysqli_query($con,"INSERT INTO options VALUES  ('$quid','$d','$odid')") or die('Error64');
$e=$_POST['ans'.$j];
switch($e)
{
case 'a':
$ansid=$oaid;
break;
case 'b':
$ansid=$obid;
break;
case 'c':
$ansid=$ocid;
break;
case 'd':
$ansid=$odid;
break;
default:
$ansid=$oaid;
}


$qans=mysqli_query($con,"INSERT INTO answer VALUES  ('$quid','$ansid')");

 
//echo "<script>window.location.href='fac_home.php';</script>";     


	 
if($_SESSION["index"]>=$_SESSION['totalq'])
  {
	     echo "<script>window.location.href='fac_home.php'</script>";
  }
  else
  {
	  $_SESSION["m"]++;
	  $_SESSION["j"]++;
	       echo "<script>window.location.href='add_ques.php'</script>";
  }
  
  
   $_SESSION["index"]++;
  
}
}
?>


</div>
</div>


 

   </div>          
      
    

              

</tbody>






</div> 
    
    <?php
include('../footer.php');
?>
</body>

</html>