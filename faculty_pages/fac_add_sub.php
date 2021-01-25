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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
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

.font-robo {
  font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
}

.font-poppins {
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.font-opensans {
  font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
}
.page-wrapper {
  min-height: 100vh;
}
.bg-gra-03 {
  background-color:rgba(241, 241, 241, 0.93);
}
.p-t-45 {
  padding-top: 45px;
}
.p-b-50 {
  padding-bottom: 50px;
}
.wrapper {
  margin: 0 auto;
}

.wrapper--w790 {
  max-width: 790px;
}
.title {
  font-size: 24px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  color: #fff;
}

.card {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #fff;
}

.card-5 {
  background: #fff;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
}

.card-5 .card-heading {
  padding: 20px 0;
  background: #1a1a1a;
  -webkit-border-top-left-radius: 10px;
  -moz-border-radius-topleft: 10px;
  border-top-left-radius: 10px;
  -webkit-border-top-right-radius: 10px;
  -moz-border-radius-topright: 10px;
  border-top-right-radius: 10px;
}

.card-5 .card-body {
  padding: 52px 85px;
  padding-bottom: 73px;
}
input[type=text], select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.content {
  flex: 1 0 auto;
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
 .registerbtn {
  padding: 16px 20px;
  margin: 8px 0;
  width: 100%;
}
 }    
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Add Subjects</title>
</head>
<body>
<a name="top"></a>
    <div class="content">
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div>
 
 
  <div class="navbar">
    <a href="fac_module.php"><i class="fa fa-file-text" aria-hidden="true"></i> Module</a>
  </div>

  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Subject Registration Form</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                <label for="prog"><b>Programme</b></label>
   
                <select id="prog" name="progname" required>
                  <option value="">Select</option>
                  <option value="BTech.">BTech.</option>
                  <option value="MTech.">MTech.</option>
                  <option value="PhD">Phd</option>
                </select>
             
           
                <label for="branch"><b>Branch</b></label>
              <select id="branch" name="branchname" required>
                <option value="">Select</option>
                <option value="CSE1">CSE1</option>
                <option value="CSE2">CSE2</option>
                <option value="AI">AI</option>
              </select>
           
                <label for="sem"><b>Semester</b></label>
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

              <label for="subj"><b>Subject Name</b></label>
              <select id="subj" name="subjname" required>
                <option value="">Select</option>
                <option value="Mobile Architecture and Programming">Mobile Architecture and Programming</option>
                <option value="Network Programming">Network Programming</option>
                <option value="IoT and its Application in AI">IoT and its Application in AI </option>
              </select>

              <label for="subcode"><b>Subject Code</b></label>
              <select id="subcode" name="subjcode" required>
                <option value="">Select</option>
                <option value="BCS 306">BCS 306</option>
                <option value="BCS 302">BCS 302</option>
                <option value="MCS 104">MCS 104</option>
              </select>
              <hr>
   

    <button type="submit" class="registerbtn" name="sub" >SUBMIT</button>
    <button type="addmore" class="registerbtn" name="add" style="float: right;"><i class="fa fa-plus" aria-hidden="true" ></i> Click to add more</button>
</form>  

<?php
if(isset($_POST["sub"]) or isset($_POST["add"]))
{
  $tid=$_SESSION['idf'];
  $tn=$_SESSION['namef'];

  $p=$_POST['progname'];
  $b=$_POST['branchname'];
  $sem=$_POST['semname'];
  $sn=$_POST['subjname'];
  $sc=$_POST['subjcode'];

  $query = "INSERT INTO subject VALUES ('', '$sc', '$sn', '$tid', '$tn', '$b')";
  $row= mysqli_query($con,$query);

  

  $query1 = "INSERT INTO coursedetails VALUES ('$p', '$b', '$sem', '$tid', '$sc')";
  $row1= mysqli_query($con,$query1);

    if($row > 0 && $row1> 0)
    {

    $result = mysqli_query($con,"SELECT login_student.program, login_student.branch, login_student.semester, rollno from login_student WHERE login_student.branch = '$b' AND login_student.program = '$p' AND login_student.semester = '$sem' ORDER BY login_student.branch") or die('Error2');

    while($row = mysqli_fetch_array($result)) {
  
    $program = $row['program'];
    $branch = $row['branch'];
    $semester = $row['semester'];
    $roll = $row['rollno'];

    $que= mysqli_query($con, "SELECT * FROM attendance WHERE tid='$tid' AND rollno='$roll'");
    if($data=mysqli_fetch_array($que))
    {
      continue;
    }else{
    $query="INSERT into attendance VALUES ('$program','$branch','$semester','$roll', '$tid', 0)";
    $w=mysqli_query($con, $query) or die('Error3');
  }
}
    echo "<script>alert('Subjects and Course successfully registered.');</script>";
    }
    else
    {
    echo "<script>alert('Unsuccessful');</script>";
    }
 
}


  if(isset($_POST["sub"]))
  {
    echo "<script>window.location.href='fac_profile.php'</script>";
  }
  else if(isset($_POST["add"]))
  {
    echo "<script>window.location.href='fac_add_sub.php'</script>";
  }

?>      
</div>
        </div>
    </div>


 </div>
 </div> 
    
    <?php
include('../footer.php');
?>
</body> 
</html>


  
  
  
