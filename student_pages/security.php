<?php
include('config.php');
//session_start();
?>


<?php
    $e=$_GET["e"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
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

.title1 {
  font-size: 14px;
  font-weight: 400;
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
select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]{
  width: 95%;
  padding: 15px;
  margin: 5px 0px 22px 0px;
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
  width: 100%;
  opacity: 0.9;
  border-radius:12px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

::placeholder {
  color: black;
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
 input[type=text]{
  width: 90%;}
 .registerbtn {
  padding: 16px 20px;
  margin: 8px 0;
  width: 100%;
}
 }    
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
    <title>Security Question Answer</title>
</head>
<body>
  <div class="header">
    <img src="IGDTUW-logo.png" alt="logo" />
    <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
    <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
  </div>
 
  <div  style="background-color: green; height:20px;">
 </div>

  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">SECURITY QUESTION ANSWER</h2>
                <h6 class="title1">(This will help you to reset your password, incase you forget it.)</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                
                <label for="security"><b>Select your security question</b></label>
                 <select id="security" name="security_ques" required>
                  <option value="">Select</option>
                  <option value="What is the name of the author of your favourite book ?">What is the name of the author of your favourite book ?</option>
                  <option value="What was the name of your primary school?">What was the name of your primary school?</option>
                  <option value="What is your favorite food?">What is your favorite food?</option>
                  <option value="What is your pet's name?">What is your pet's name?</option>
                </select>
             
                <label for="ans"><b>Your answer</b></label>
                <input type="text" id="ans" name="answer" placeholder="Enter your answer" required>
                <label for="reans"><b>Confirm answer</b></label>
                <input type="text" id="reans" name="reanswer" placeholder="Re-enter your answer" required>
                

              <hr>
   

    <button type="submit" class="registerbtn" name="sub" >SUBMIT</button>
</form>     

<?php

      if(isset($_POST["sub"]))
      {
        $a1= $_POST["answer"];
        $a2= $_POST["reanswer"];
        $s=$_POST["security_ques"];

        if ($a1 == $a2) {
          # code...
          $query= mysqli_query($con,"UPDATE login_student SET sec_ques='$s' ,sques_ans='$a1' WHERE email='$e'")or die("Error");
          echo "<script>alert('Success');</script>";
          echo "<script>window.location.href='submit.html'</script>";

        }
        else{

           echo "<script>alert('Your answers donot match.Try again!');</script>";
        }

        $query= mysqli_query($con,"SELECT sques_ans FROM login_student WHERE email='$e'");

        while($row = mysqli_fetch_array($query)) {
    
           $A = $row['sques_ans'];
           if($A == $ans1)
           {
            header("location:new_password.php?e=$e");
           }
           else
           {
            echo "<script>alert('Your answer doesnot match.Try again!');</script>";
            
           }
        
        }

      }

      ?>

</div>
        </div>
    </div>


 </div>

</body> 
</html>


  
  
  
