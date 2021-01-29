<?php
include('config.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
.content {
  flex: 1 0 auto;
}  
* {
  box-sizing: border-box;
}
.container {
  width:90%;
  padding: 16px;
  font-size:20px;
  background-color: white;
  margin-right: auto;
  margin-left: auto;
  margin-top: 10px;
  margin-bottom: 10px;
  border-radius:12px;
}
/* Full-width input fields */
input[type=text],input[type=file],textarea,select,input[type=date]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #F1F1F1
;
  border-radius:12px;
}
input[type=text]:focus , textarea:focus,select:focus,input[type=date]:focus{
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #F1F1F1;
  margin-bottom: 25px;
}
label{
    margin-left:1%;
}
/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50
;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  border-radius:50px;
}
.registerbtn:hover {
  opacity: 1;
  background-color: #333333
;
}
.context{
  width:50%;
  margin-left:auto;
  margin-right:auto;
  background-color:#ddd;
  border-radius:12px;
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

 .context{
   width:100%;
 }
 .container {
 margin-left:auto;
 margin-right:auto;
 font-size:10px;
 width:90%;
 
}

::placeholder{
    font-size:10px;
}
select{
    font-size:10px;
}
.registerbtn {
    font-size:10px;
    width:90%;
    margin-left:5%;
}
 }
 
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Faculty Upload Assignment</title>
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
    <a class="active" href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="fac_teaching_home.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="fac_upload_assignment.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload </a> 
    <a href="view_uploaded_ass_by_fac.php"><i class="fa fa-eye" aria-hidden="true"></i> Manage Uploads</a>
    <a href="fac_download_ass.php"><i class="fa fa-download" aria-hidden="true"></i> Download Student Assignments </a> 
    <a href="fac_home.php"><i class="fa fa-files-o" aria-hidden="true"></i> Test module</a>

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
</script>  <br>
<div class="context">
<br>
  <form method="post" enctype="multipart/form-data">
  <div class="container">
    <h2 style="text-align:center;">Upload Documents</h2>
    <hr>
    <label for="prog"><b>Programme</b></label>
    
    <select id="prog" name="progname" required>
      <option value="">Select</option>
      <?php
    $id=$_SESSION["idf"];

  $q1=mysqli_query($con,"SELECT Distinct program FROM coursedetails WHERE tid='$id'" )or die('Error231');

	 while($row1=mysqli_fetch_array($q1))
	  {
    $n=$row1["program"];
  	
    
    echo '<option value="'.$n.'">'.$n.'</option>';
    
  
	  }
  ?>
    </select>
  

	<label for="branch"><b>Branch</b></label>
  <select id="branch" name="branchname" required>
    <option value="">Select</option>
    <?php
    $id=$_SESSION["idf"];

  $q1=mysqli_query($con,"SELECT Distinct branch FROM coursedetails WHERE tid='$id'" )or die('Error231');

	 while($row1=mysqli_fetch_array($q1))
	  {
    $n=$row1["branch"];
  	
    
    echo '<option value="'.$n.'">'.$n.'</option>';
    
  
	  }
  ?>
    
  </select>

	<label for="sem"><b>Semester</b></label>
  <select id="sem" name="semname" required>
    <option value="">Select</option>
    <?php
    $id=$_SESSION["idf"];

  $q1=mysqli_query($con,"SELECT Distinct semester FROM coursedetails WHERE tid='$id' ORDER BY semester ASC" )or die('Error231');

	 while($row1=mysqli_fetch_array($q1))
	  {
    $n=$row1["semester"];
  	
    
    echo '<option value="'.$n.'">'.$n.'</option>';
    
  
	  }
  ?>
  </select>
  <label for="sub"><b>Subject</b></label>
  <select id="sem" name="subject" required>
  <option value="">Select</option>
  <?php
    $id=$_SESSION["idf"];

  $q1=mysqli_query($con,"SELECT Distinct subjname FROM subject WHERE tid='$id'" )or die('Error231');

	 while($row1=mysqli_fetch_array($q1))
	  {
    $n=$row1["subjname"];
  	
    
    echo '<option value="'.$n.'">'.$n.'</option>';
    
  
	  }
  ?>
  
  </select>
  
   <label for="sub"><b>Pls. specify the type of document.</b></label>
  <select id="op" name="options" required>
  <option value="">Select</option>
  <option value="Assignment">Assignment</option>
  <option value="LearningResource">Learning Resource</option>
  </select>
  
    <label for="msg"><b>Message</b></label>
  <textarea id="msg" name="msg" placeholder="Enter the message. " style="height:200px" required></textarea>
    
  <label for="title"><b>Title</b></label>
    <input type="text" placeholder="Enter the title" name="title" required>
    
  <label for="file"><b>Upload File</b>&nbsp;&nbsp;(only .pdf files can be uploaded)</label>
    <input type="file" name="file" required>
 <hr>
    <button name="sub" type="submit" class="registerbtn">SUBMIT</button>
  </div>  
</form>



<?php
if(isset($_POST["sub"]))
{
  //$timezone= date_default_timezone_get();
  $timezone= date("d-m-Y");
  $id=$_SESSION["idf"];
  $a= $_POST["title"];
  $b= $_POST["msg"];
  $c= $_POST["subject"];
  
  $prog=$_POST['progname'];
  $branch=$_POST['branchname'];
  $sem= $_POST['semname'];
  $op=$_POST["options"];
  
  
      $img=basename($_FILES["file"]["name"]);
        $type=$_FILES["file"]["type"];
        $size=$_FILES["file"]["size"];
        $store=$_FILES["file"]["tmp_name"];
 
        //for support only image code here
      $n=explode('.',$img);
      $p=pathinfo("upload/".$img,PATHINFO_EXTENSION);
      $q=array("pdf","PDF");
      
  if(in_array($p,$q))
  {
    
        $fileName = str_replace(" ", "_", $img);
          move_uploaded_file($store,"upload/".$fileName);
          
      $query1="INSERT INTO documents VALUES ('','$timezone', '$c','$a', '$fileName', '$b','$id', '$prog', '$branch', '$sem','$op')";
      $row=mysqli_query($con, $query1);
      if($row > 0)
      {
      //echo "33";
        echo "<script>alert('success done')</script>";
        echo "<script>window.location.href='assign_submit.php'</script>";
      }
      else
      {
        
        echo "<script>alert('not done')</script>";
      }
  } 
      else
      {
//$query="INSERT INTO documents VALUES ('', '$timezone','$c','$a', '', '$b','$id')";
//$row=mysqli_query($con, $query);
       echo "<script>alert('Only PDF files can be uploaded')</script>";
        echo "<script>window.location.href='fac_upload.php'</script>";
      }
 
}
?>
<br>
</div>

</div> 
    
    <?php
include('../footer.php');
?>
</body>
</html>
