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
.container img{
 float:right;
 width:120px;
 height: 100px;
}
@media (max-width: 576px) {
  * {
  margin-right: 5px;
  margin-left: 5px;
  margin-top: 10px;
}
.container h1{
  font-size:22px;
}
.container img{
 float:right;
 width:100px;
 height: 78px;
}
}
</style>
</head>
<body>

<form method="post" enctype="multipart/form-data">
  <div class="container">
    <img src="IGDTUW-logo.png" alt="logo"/>
    <h1>Faculty Registration Form</h1>
    <p>Please fill in this form to register.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="cno"><b>Contact Number</b></label>
    <input type="text" placeholder="Enter Contact Number" name="cno" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required>

    <label for="image"><b>Your Image</b></label><i>(Image size must be less than 2 MB)</i>
    <input type="file" name="image" id="pic" placeholder="file size must be less than 2 MB" required><br>
	
<label for="time table"><b>Your Timetable</b></label><i>(Image size must be less than 2 MB)</i>
    <input type="file" name="timetable" id="tt" placeholder="file size must be less than 2 MB" required><br>

     <label for="secure"><b>Select your security question</b></label>

      <select id="secure" name="security_question" required>
        <option value="">Select</option>
        <option value="What is the name of the author of your favourite book ?">What is the name of the author of your favourite book ?</option>
        <option value="What was the name of your primary school?">What was the name of your primary school?</option>
        <option value="What is your favorite food?">What is your favorite food?</option>
        <option value="Which is your favorite place?">Which is your favorite place?</option>
     </select>


    <label for="ans"><b>Your answer</b></label>
    <input type="password" id="ans" name="answer" placeholder="Enter your answer" required>

    <label for="reans"><b>Confirm answer</b></label>
    <input type="password" id="reans" name="reanswer" placeholder="Re-enter your answer" required>

    <button type="submit" class="registerbtn" name="sub">SUBMIT FORM</button>
  </div>
</form>

<?php

        function createURL(){
            $name=$_POST["name"];
            $name_clean=preg_replace('/\s*/', '', $name);
            $name_clean=strtolower($name_clean);
            $url="https://meet.jit.si/";
            $url .= $name_clean;
            return $url;
        }

        if(isset($_POST["sub"]))
        {

          $name=$_POST["name"];
          $m=$_POST["cno"];
          $e=$_POST["email"];
          $p1=$_POST["psw"];
          $p2=$_POST["psw_repeat"];
          $sq=$_POST["security_question"];
          $a1=$_POST["answer"];
          $a2=$_POST["reanswer"];
          $meet_url=createURL();

                //img start code here
                $img=basename($_FILES["image"]["name"]);
                $type=$_FILES["image"]["type"];
                $size=basename($_FILES["image"]["size"]);
                $store=$_FILES["image"]["tmp_name"];

		        $imgtt=basename($_FILES["timetable"]["name"]);
                $typett=$_FILES["timetable"]["type"];
                $sizett=basename($_FILES["timetable"]["size"]);
                $storett=$_FILES["timetable"]["tmp_name"];

              //for support, only image code here
                $n=explode('.',$img);
                $p=pathinfo("profile_pic/".$img,PATHINFO_EXTENSION);
		            $ntt=explode('.',$imgtt);
                $ptt=pathinfo("time_table/".$imgtt,PATHINFO_EXTENSION);
		            $q=array("jpg","png","jpeg", "JPG", "PNG", "JPEG");


				  if(array_key_exists('image', $_FILES) && array_key_exists('timetable', $_FILES)){
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK && $_FILES['timetable']['error'] === UPLOAD_ERR_OK) {
         if(in_array($p,$q) && in_array($ptt,$q))
                {

                    move_uploaded_file($store,"profile_pic/".$img);
		            move_uploaded_file($storett,"time_table/".$imgtt);

                    if($p1 == $p2)
                        {

            if($a1==$a2)
                    {

                    $query="INSERT into login_faculty VALUES ('','$name','$e','$m','$p1', '$sq', '$a1', '$meet_url', '$img','$imgtt')";
                    $row=mysqli_query($con, $query);
                    if($row > 0)
                    {
                      echo "<script>alert('Click OK to proceed. ')</script>";
                      echo "<script>window.location.href='submit.html'</script>";

                    }
                   else
                    {
						echo "<script>alert('Unsuccessful Try again or contact ADMIN. ')</script>";

                    }
                    }
			else
					{
						echo "<script>alert('Security Answer does not matches.')</script>";
					 // echo "<script>alert('Security Answer doesn't match')</script>";
					}

            }
			  else
				  {
					 echo "<script>alert('Password doesnot match.  ')</script>";

				  }


          }
		      else
                {
					echo "<script>alert('Unsuccessful. ')</script>";
                  echo "<script>alert('Wrong picture format.Picture format must be jpg/png/jpeg.')</script>";
                }
    } else {
      echo "<script>alert('Image size must be less than 2 MB.')</script>";
    }
}



      }
     ?>


</body>
</html>
