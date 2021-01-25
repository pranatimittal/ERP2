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
  box-shadow: 0 4px 8px 4px rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
}

.title {
  color: grey;
  font-size: 18px;
}
.right {
    text-align: right;
    float: right;
    
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
tr:nth-child(even){background-color: white;}
tr:hover {background-color: #ddd;}

th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: black;
  color: white;
}
  .content1 {
  flex: 1 0 auto;
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
  margin-left:1%;
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 71%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
label {
  font-weight:600;
  padding: 12px 12px 12px 0;
  display: inline-block;
}
* {
  box-sizing: border-box;
}
input[type=text] , input[type=file]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
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
  td, th {
  padding: 5px;
  font-size:12px;
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
    <title>Faculty Edit Profile</title>
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
    <a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="f_edit_profile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a>
  </div>
  
  <h2 style="text-align:center"><u>User Profile</u></h2>
  <div class="card">

<?php
  
  $E=$_SESSION['Emailf'];
  $id = $_SESSION['idf'];

  $result1 = mysqli_query($con,"SELECT * FROM login_faculty WHERE email='$E' " ) or die('Error'); 

  while($row = mysqli_fetch_array($result1)) {
    $n = $row['tname'];
   $img= $row['image'];
  
   $m= $row['mob'];
  ?>
  <br>
  
  <form method="post" enctype="multipart/form-data">

  <?php
    echo '<p class="title">Faculty</p>';
    echo '<div class="row">
    <div class="col-25">
    <label for="image">Your Image: </label>
    </div>
    <div class="col-75">
    <input type="file" name="image" id="pic">
    </div>
  </div>';
   
    echo '<div class="row">
    <div class="col-25">
      <label for="fname">Name: </label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" value ="'.$n.'">
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
      <label for="mob">Mobile No: </label>
    </div>
    <div class="col-75">
      <input type="text" id="mob" name="mob" value="'.$m.'">
    </div>
  </div>';

   }
   ?>
   <br>
     <br>
     <?php
     echo "<table align='center'>
      <tr>
        <th>Sno.</th>
        <th>Program</th>
        <th>Branch</th>
        <th>Semester</th>
        <th>Manage</th>
      </tr>";
    
  $result2 = mysqli_query($con,"SELECT * FROM coursedetails WHERE tid='$id' " ) or die('Error');
  $sno=0;    
  while($row = mysqli_fetch_array($result2)) {
    $p=$row['program'];
    $b=$row['branch'];
    $se=$row['semester'];
    $sno++;
    echo '<tr><td>'.$sno.'</td><td>'.$p.'</td><td>'.$b.'</td><td>'.$se.'</td><td><a title="Delete course" href="del_course.php?tid='.$id.'&program='.$p.'&branch='.$b.'&sem='.$se.'"><i>Delete</i></a></td></tr>';

   }

   echo "</table><br><br>"; 
   ?>
   


  <?php
   $sno=0;   

   echo "<table align='center'>
      <tr>
        <th>Sno.</th>
        <th>Subject Code</th>
        <th>Subject</th>
        <th>Manage</th>
      </tr>";
    
  $result3 = mysqli_query($con,"SELECT * FROM subject WHERE tid='$id' " ) or die('Error');  

  while($row = mysqli_fetch_array($result3)) {
    $sn=$row['subjname'];
    $sc=$row['subjcode'];
    $sno++;
    echo '<tr><td>'.$sno.'</td><td>'.$sc.'</td><td>'.$sn.'</td><td><a title="Delete subject" href="del_subject.php?tid='.$id.'&subjname='.$sn.'&subjcode='.$sc.'"><i>Delete</i></a></td></tr>';
   }   
    
    echo "</table>"; 
    ?>
    
<br>
<button name="sub" type="submit" class="button button1"><b>Submit</b></button>

</form>
<?php
     echo '<p  style="background-color: grey; height:10px;"></p>';
    echo "</div>";

    ?>
	
	
	
	
<?php
				if(isset($_POST["sub"]))
				{
					
					
					$name=$_POST["fname"];
					$b=$_POST["email"];
					$c=$_POST["mob"];
					
					
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
					move_uploaded_file($store,"profile_pic/".$img);
					
	            $query = "UPDATE login_faculty SET tname='$name', email='$b', mob='$c', image='$img' where email='$E'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('You will be logged out for the changes to be reflected.Click OK to proceed. ')</script>";
				echo "<script>window.location.href='fac_logout.php?e=$h'</script>";
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
	
	 $query = "UPDATE login_faculty SET tname='$name', email='$b', mob='$c' where email='$E'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('You will be logged out for the changes to be reflected.Click OK to proceed. ')</script>";
				echo "<script>window.location.href='fac_logout.php?e=$h'</script>";
			}
			else
			{
				//echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}
      echo "<script>alert('Image size must be less than 2 MB.')</script>";
    }
				  }
				  
				  
				  else{
					  $query = "UPDATE login_faculty SET tname='$name', email='$b', mob='$c' where email='$E'";
			
				            //$query = "UPDATE login_student SET name='".$name."',rollno='".$b."',email='".$h."',mob='".$c."',branch='".$e."',program='".$d."',semester='".$f."',batch='".$g."' ,image='".$img."') where email=".$E;

			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{
				echo "<script>alert('You will be logged out for the changes to be reflected.Click OK to proceed. ')</script>";
				echo "<script>window.location.href='fac_logout.php?e=$h'</script>";
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
</body>
</html>