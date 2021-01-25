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
    <a href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <div class="right">  
    <a href="edit_profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
 </div>
 </div>

  <h2 style="text-align:center"><u>User Profile</u></h2>
  <div class="card">

  <?php
  
  $E=$_SESSION['Email'];
  $result = mysqli_query($con,"SELECT * FROM login_student WHERE email='$E' " ) or die('Error');

  while($row = mysqli_fetch_array($result)) {
    $n = $row['name'];
    $m = $row['mob'];
    $rn = $row['rollno'];
    $p = $row['program'];
    $b = $row['batch'];
    $br = $row['branch'];
    $s = $row['semester'];
    $img= $row['image'];
	
    $y=1;

    if($s==3 || $s==4)
    {
      $y=2;
    }
    else if($s==5 || $s==6)
    {
      $y=3;
    }
     else if($s==7 || $s==8)
    {
      $y=4;
    }
?>
<br>
<form method="post" enctype="multipart/form-data">

<?php

      echo '<p class="title">Student</p>';

  echo '<div class="row">
    <div class="col-25">
      <label for="fname">Name: </label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" value ="'.$n.'">
    </div>
  </div>';

      echo '<div class="row">
            <div class="col-25">
              <label for="rollno">Enrollment No.:</label>
            </div>
            <div class="col-75">
              <input type="text" id="rollno" name="eno" value ="'.$rn.'">
            </div>
          </div>';
          
          echo '<div class="row">
          <div class="col-25">
            <label for="prog">Program: </label>
          </div>
          <div class="col-75">
            <select id="prog" name="progname" required>
            <option value="">Select</option>
            <option value="BTech.">BTech.</option>
	          <option value="PhD">PhD</option>
            <option value="MTech.">MTech.</option>
            </select>
          </div>
        </div>';

        echo '<div class="row">
        <div class="col-25">
          <label for="batch">Batch: </label>
        </div>
        <div class="col-75">
        <select id="batch" name="batchname" required>
        <option value="">Select</option>
        <option value="2016-2020">2016-2020</option>
        <option value="2017-2021">2017-2021</option>
      <option value="2018-2022">2018-2022</option>
        <option value="2019-2023">2019-2023</option>
        <option value="2019-2021">2019-2021</option>
      
      </select>
        </div>
      </div>';
     
      echo '<div class="row">
      <div class="col-25">
        <label for="branch">Branch: </label>
      </div>
      <div class="col-75">
      <select id="branch" name="branchname" required>
      <option value="">Select</option>
      <option value="CSE1">CSE1</option>
    <option value="CSE2">CSE2</option>
    <option value="IT">IT</option>
    <option value="ECE">ECE</option>
    <option value="MAE">MAE</option>
    <option value="AI">AI</option>
      
    </select>
      </div>
    </div>';
     

      
    echo '<div class="row">
    <div class="col-25">
      <label for="sem">Semester: </label>
    </div>
    <div class="col-75">
    <select id="sem" name="semname" required>
    <option value="">Select</option>
    <option value="1">1</option>
    <option value="2">2</option>
	<option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
	<option value="7">7</option>
    <option value="8">8</option>
  </select>
    </div>
  </div>';
      
	  
	   echo '<div class="row">
    <div class="col-25">
    <label for="image">Your Image: </label>
    </div>
    <div class="col-75">
    <input type="file" name="image" id="pic" >
    </div>
  </div>';
  echo '<div class="row">
    <div class="col-25">
      <label for="email">E-mail id: </label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" value ="'.$E.'">
    </div>
  </div>';
     
  echo '<div class="row">
    <div class="col-25">
      <label for="mob">Mobile No.: </label>
    </div>
    <div class="col-75">
      <input type="text" id="mob" name="mob" value ="'.$m.'">
    </div>
  </div>';

   }
   ?>
   <br>
   <br>
     <button name="sub" type="submit" class="button button1" onclick="location.href = 'profile.php';"><b>Submit</b></button>
	 </form>
   <?php   
      echo '<p  style="background-color: black; height:25px;"></p>';
    echo "</div>";

    ?>
	
	
	
<?php
				if(isset($_POST["sub"]))
				{
					
					
					$name=$_POST["name"];
					$b=$_POST["eno"];
					$c=$_POST["mob"];
					$d=$_POST["progname"];
					$e=$_POST["branchname"];
					$f=$_POST["semname"];
					$g=$_POST["batchname"];
					$h=$_POST["email"];
					
					
			//img start code here
				$img=basename($_FILES["image"]["name"]);
				$type=$_FILES["image"]["type"];
				$size=$_FILES["image"]["size"];
				$store=$_FILES["image"]["tmp_name"];
				
				//for support only image code here
				$n=explode('.',$img);
			$p=pathinfo("upload/".$img,PATHINFO_EXTENSION);
			 $q=array("jpg","png","jpeg", "JPG", "PNG", "JPEG");
				
				 
				  if(array_key_exists('image', $_FILES)){
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
		
			if(in_array($p,$q))
			{
					move_uploaded_file($store,"upload/".$img);
					
	            $query = "UPDATE login_student SET name='$name', rollno='$b', email='$h', mob='$c', branch='$e', program='$d', semester='$f', batch='$g', image='$img' where email= '$E'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('You will be logged out for the changes to be reflected.Click OK to proceed. ')</script>";
				echo "<script>window.location.href='logout.php?e=$h'</script>";
			}
			else
			{
				//echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}
					
					
	       }
			else
			{
				echo "<script>alert('Wrong picture format.Picture format must be jpg/png/jpeg.')</script>";
			}

}


else {
     // echo "<script>alert('Image size must be less than 2 MB.')</script>";
	 
	 $query = "UPDATE login_student SET name='$name', rollno='$b', email='$h', mob='$c', branch='$e', program='$d', semester='$f', batch='$g' where email= '$E'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('You will be logged out for the changes to be reflected.Click OK to proceed. ')</script>";
				echo "<script>window.location.href='logout.php?e=$h'</script>";
			}
			else
			{
				//echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}
    }
				  }
				  
				  else{
					  
					  $query = "UPDATE login_student SET name='$name', rollno='$b', email='$h', mob='$c', branch='$e', program='$d', semester='$f', batch='$g' where email= '$E'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('You will be logged out for the changes to be reflected.Click OK to proceed. ')</script>";
				echo "<script>window.location.href='logout.php?e=$h'</script>";
			}
			else
			{
				//echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}
					  
				  }
				}
				
				?>
	

</div> 
    
    <?php
include('../footer.php');
?>
<body>
  <html>