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



.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}

.title {
  color: grey;
  font-size: 18px;
}
.content1 {
  flex: 1 0 auto;
}  
.right {
    text-align: right;
    float: right;
    
}
.button1
     {
  border-radius: 30px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 25px;
  padding-right: 25px;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  margin:auto;
  display:block;
  

     }
     .button1:hover {
  background-color: #3e8e41;
  
}
.col-25 {
  margin-left:2%;
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 70%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
label {
  font-weight:500;
  padding: 12px 12px 12px 0;
  display: inline-block;
}
* {
  box-sizing: border-box;
}
input[type=text] , input[type=file] , select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
/* @media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} */



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
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}
label{
  font-size:12px;
}
.title {
  color: grey;
  font-size: 15px;
}
.card p{
  font-size:12px;
}
.card h1{
  font-size:20px;
}
.button1
     {font-size: 12px;
      padding-top: 8px;
  padding-bottom: 8px;
  padding-left: 15px;
  padding-right: 15px;
     }
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Edit Student Profile</title>
</head>
<body>
<a name="top"></a>
    <div class="content1">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
  
  
  <div class="navbar">
    <!-- <a href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <div class="right">  
    <a href="edit_profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
 </div> -->

<a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="fac_classroom_page.php"><i class="fa fa-user  fa-home"></i> Home</a>
    <a href="<?php echo $meet_url ?>" target="_blank"><i class="fa fa-upload"></i> Initiate class </a>
    <a href="fac_view_attendance.php"><i class="fa fa-eye" aria-hidden="true"></i> View Attendance</a>
    <a href="fac_resources.php"><i class="fa fa-upload" aria-hidden="true"></i> Resources Center </a>
    <a href="fac_display_tt.php"><i class="fa fa-upload" aria-hidden="true"></i> View timetable</a>
    <a href="fac_edit_tt.php"><i class="fa fa-upload" aria-hidden="true"></i>Edit timetable</a>
 
 </div>

  <h2 style="text-align:center"><u>Edit Timetable</u></h2>
  <div class="card">

<br>
<form method="post" enctype="multipart/form-data">

<?php

      echo '<p class="title">TT</p>';

        echo '<div class="row">
        <div class="col-25">
          <label for="tim">Time: </label>
        </div>
        <div class="col-75">
        <select id="tim" name="tim" required>
        <option value="">Select</option>
        <option value="9-10">9-10</option>
        <option value="10-11">10-11</option>
      <option value="11-12">11-12</option>
        <option value="12-1">12-1</option>
        <option value="1-2">1-2</option>
        <option value="2-3">2-3</option>
        <option value="3-4">3-4</option>
        <option value="4-5">4-5</option>
      
      </select>
        </div>
      </div>';
     
      echo '<div class="row">
      <div class="col-25">
        <label for="day">Day: </label>
      </div>
      <div class="col-75">
      <select id="day" name="day" required>
      <option value="">Select</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
    <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
      
    </select>
      </div>
    </div>';
     

      
    echo '<div class="row">
    <div class="col-25">
      <label for="class">Class: </label>
    </div>
    <div class="col-75">
    <select id="class" name="class" required>
    <option value="">Select</option>
    <option value="IOT">IOT</option>
    <option value="MAP2">MAP2</option>
	  <option value="MAP LAB A2">MAP LAB A2</option>
    <option value="MAP LAB B2">MAP LAB B2</option>
  </select>
    </div>
  </div>';
      
   ?>
   <br>
   <br>
     <button name="sub" type="submit" class="button button1" onclick="location.href = 'fac_display_tt.php';"><b>Submit</b></button>
	 </form>
	
<?php
				if(isset($_POST["sub"]))
				{
					
					$f=$_POST["day"];
					$g=$_POST["tim"];
					$h=$_POST["class"];
					
	            $query = "UPDATE srnreddy_tt SET class='$h' where day= '$f' AND tim= '$g'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('Successful')</script>";
				echo "<script>window.location.href='fac_display_tt.php?e=$h'</script>";
			}
			else
			{
				//echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}

}

?>
	

</div> 
    
    <?php
include('../footer.php');
?>
<body>
  <html>
