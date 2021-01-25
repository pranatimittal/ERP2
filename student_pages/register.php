<?php
include('config.php');
//session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  background-color: black;
}

* {
  box-sizing: border-box;
  margin-right: 30px;
  margin-left: 10px;
  margin-top: 20px;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], select ,input[type=password] ,input[type=file]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

@media (max-width: 576px) {
  * {
  margin-right: 5px;
  margin-left: 5px;
  margin-top: 10px;
}
.reminder{
  font-size:13px;
}
}
</style>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Student Registration Form</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
  <div class="container">
    <img src="IGDTUW-logo.png" alt="logo" style="float:right; width:120px;height: 100px;" />
    <h1>Registration Form - Student</h1>
    <p>Please fill this form to register.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>
    
    <label for="eno"><b>Enrollment Number</b></label>
    <input type="text" placeholder="Enter Enrollment Number" name="eno" required>
    
    <label for="cno"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" name="cno" required>
    
    <label for="prog"><b>Programme</b></label>
    
    <select id="prog" name="progname" required>
      <option value="">Select</option>
      <option value="BTech.">BTech.</option>
	  <option value="PhD">PhD</option>
      <option value="MTech.">MTech.</option>
    </select>
  

	<label for="branch"><b>Branch</b></label>
  <select id="branch" name="branchname" required>
    <option value="">Select</option>
    <option value="CSE1">CSE1</option>
	<option value="CSE2">CSE2</option>
	<option value="IT">IT</option>
	<option value="ECE">ECE</option>
	<option value="MAE">MAE</option>
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
    
    <label for="batch"><b>Batch</b></label>
    <select id="batch" name="batchname" required>
      <option value="">Select</option>
      <option value="2016-2020">2016-2020</option>
      <option value="2017-2021">2017-2021</option>
	  <option value="2018-2022">2018-2022</option>
      <option value="2019-2023">2019-2023</option>
      <option value="2019-2021">2019-2021</option>
	  
    </select>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required>

    <label for="image"><b>Your Image</b></label><i>(Image size must be less than 2 MB)</i>
     <input type="file" name="image" id="pic" required><br>
     
   <b><p class="reminder" style="color:red;">Please fill the security question and answer after clicking the submit button. It will help you to reset your password , if you forget it.</p></b>
   <b><p class="reminder" style="color:blue;">Please go through the guidelines once you login.</p></b>
    <hr>
    

    <button name="sub" type="submit" class="registerbtn">SUBMIT</button>
  </div>
  
  
</form>


<?php
				if(isset($_POST["sub"]))
				{
					$name=$_POST["name"];
					$b=$_POST["eno"];
					$c=$_POST["cno"];
					$d=$_POST["progname"];
					$e=$_POST["branchname"];
					$f=$_POST["semname"];
					$g=$_POST["batchname"];
					$h=$_POST["email"];
					$i=$_POST["psw"];
					$j=$_POST["psw_repeat"];
					
					
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
					if($i==$j){
					
					
			$query = "insert into login_student values ('', '$name' , '$b' , '$h' , '$c' , '$i', '$e', '$d', '$f' , '$g' , '$img', '', '')";
			$roww=mysqli_query($con, $query);
			if($roww > 0)
			{

        $result = mysqli_query($con,"SELECT tid, login_student.program, login_student.branch, login_student.semester from coursedetails, login_student WHERE login_student.branch = coursedetails.branch AND login_student.program = coursedetails.program AND login_student.semester = coursedetails.semester AND login_student.rollno='$b'") or die('Error');

        while($row = mysqli_fetch_array($result)) {
  
        $T = $row['tid'];
        $P = $row['program'];
        $B = $row['branch'];
        $S = $row['semester'];


        $que= mysqli_query($con, "SELECT * FROM attendance WHERE tid='$T' AND rollno='$b'");
        if($data=mysqli_fetch_array($que))
            {
                 continue;
        }else{
        $query="INSERT into attendance VALUES ('$P','$B','$S','$b', '$T', 0)";
        $w=mysqli_query($con, $query) or die('Error3');
        }
        }


				echo "<script>alert('Click OK to proceed. ')</script>";
				echo "<script>window.location.href='security.php?e=$h'</script>";
			}
			else
			{
				echo "1";
				echo "<script>alert('Unsuccessful.Try again or contact ADMIN!')</script>";
			}
					}
					else{
						echo "<script>alert('Password doesn't match')</script>";
					}
	       }
			else
			{
				echo "<script>alert('Wrong picture format.Pcture format must be jpg/png/jpeg.')</script>";
			}

}
else {
      echo "<script>alert('Image size must be less than 2 MB.')</script>";
    }
				  }
				}
				
				?>

</body>
</html>
