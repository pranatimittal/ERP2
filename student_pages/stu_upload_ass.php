<?php
include('config.php');
session_start();
?>
<?php
        $E=$_SESSION['Email'];
        $result = mysqli_query($con,"SELECT * FROM login_student WHERE email='$E' " ) or die('Error');
        while($row = mysqli_fetch_array($result)) {
          $p = $row['program'];
          $br = $row['branch'];
          $s = $row['semester'];
      $_SESSION["prog"]=$p; 
      $_SESSION["bran"]=$br; 
      $_SESSION["sem"]=$s; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  border: 1px solid #F1F1F1
;
  margin-bottom: 25px;
}
label{
    margin-left:1%;
}
::placeholder{
    font-size:15px;
    color:black;
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
 }
        </style>
        <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Student Upload Assignment</title>
</head>
<script type="text/javascript">
  function getSubject(val) {
  $.ajax({
  type: "GET",
  url: "gettitle.php",
  data:"subjName="+val,
  success: function(data){
    $("#title-list").html(data);
  }
  });
}
</script>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div> 
    <div class="navbar" id="myTopnav">
    <a class="active" href="module_page.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
    <a href="learning_homepage.php"><i class="fa fa-user  fa-home"></i> Home</a>      
    <a href="download_resources.php"><i class="fa fa-download" aria-hidden="true"></i> Download Assignments</a> 
    <a href="stu_upload_ass.php"><i class="fa fa-upload" aria-hidden="true"></i> Upload Assignments </a>
        <a href="view_ass.php"><i class="fa fa-eye" aria-hidden="true"></i> Manage Your Uploaded Assignments </a>
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
<div class="context">
<br>
  <form method="post" enctype="multipart/form-data">
  <div class="container">
    <h2 style="text-align:center;">Upload Documents</h2>
    <hr>
    <label for="subname"><b>Subject</b></label>
    <?php
    echo'<select  name="subjname" id="disabledSelect" onChange="getSubject(this.value);" required>
    <option value="">Select Subject</option>';
?>
<?php 
    $sel=mysqli_query($con, "select s.subjcode,s.subjname from coursedetails as c inner join subject as s on c.branch=s.branch and c.subjcode=s.subjcode and s.tid=c.tid where c.program='$p' and c.semester='$s' and c.branch='$br'");
      while($data=mysqli_fetch_array($sel))
                {
                  $sn=$data["subjname"];
                  echo $sn;
                echo '<option value="'.$sn.'">'; ?>
                  <?php echo $data["subjname"];?>
                </option>
             <?php
             }    
      ?>
      </select>
    <label for="title"><b>Assignment</b></label>
    <select  name="title" id="title-list" required>
    <option value="">Select Assignment </option>
    </select>
    <label for="date"><b>Date of upload</b></label>
    <?php 
    $d=date("d-m-Y");
    echo '<input type="text" name="date1" value="'.$d.'" required readonly>';
    ?>
    <label for="file"><b>Upload File</b>&nbsp;&nbsp;(only .pdf files can be uploaded)</label>
    <input type="file" name="file" required>
    <label for="text"><b>Message</b></label>
  <textarea id="text" name="text" placeholder="Enter the message " style="height:200px"></textarea>
 <hr>
    <button name="sub" type="submit" class="registerbtn">SUBMIT</button>
  </div>  
</form>
<?php
if(isset($_POST["sub"]))
{
  $e=$_SESSION["Email"];
  $da=$_POST["date1"];
  $sn=$_POST["subjname"];
  $docid=$_POST["title"];
  $txt=$_POST["text"];
      $img=basename($_FILES["file"]["name"]);
        $type=$_FILES["file"]["type"];
        $size=$_FILES["file"]["size"];
        $store=$_FILES["file"]["tmp_name"];
        //for support only image code here
      $n=explode('.',$img);
      $p=pathinfo("assignment/".$img,PATHINFO_EXTENSION);
      $q=array("pdf","PDF");
  if(in_array($p,$q))
  {
        $fileName = str_replace(" ", "_", $img);
          move_uploaded_file($store,"assignment/".$fileName);
      $query1="INSERT INTO assignment VALUES ('','$docid', '$da','$fileName', '$e','$sn', '$txt')";
      $row1=mysqli_query($con, $query1);
      if($row1 > 0)
      {
      //echo "33";
        echo "<script>alert('Successful')</script>";
        echo "<script>window.location.href='assign_submit1.php'</script>";
      }
      else
      {
        echo "<script>alert('Unsuccessful')</script>";
      }
  } 
      else
      {
//$query="INSERT INTO documents VALUES ('', '$timezone','$c','$a', '', '$b','$id')";
//$row=mysqli_query($con, $query);
       echo "<script>alert('Only PDF files can be uploaded')</script>";
        echo "<script>window.location.href='stu_upload_ass.php'</script>";
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
