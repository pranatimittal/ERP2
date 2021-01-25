<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
document.onkeydown = function(e) {
        if (e.ctrlKey &&
             (e.keyCode === 85 ||
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
          background: white;
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
.sidenav {
  float:left;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 0px;
  margin-top:0px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  /* position: fixed; */
  /* height: 100%; */
  /* overflow: auto; */
  height: 80%;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    display: block;
  padding: 16px;
  text-decoration: none;
  font-size: 16px;
  color: black;
  border: none;
  background: none;
  text-align: left;
  cursor: pointer;
  outline: none;
}
.dropdown-btn{
    width:200px;
}
/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    background-color: #555;
  color: white;
}
.active {
  background-color: #4CAF50;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #ABB2B9;
  color:black;
  padding-left: 0px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
.contentx {
  margin-top:0px;
  margin-left: 200px;
  padding: 1px 16px;
  /* height: 1000px; */
 
}

.content {
  flex: 1 0 auto;
}
* {

	box-sizing: border-box;
}
ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

input::-webkit-input-placeholder { color: #999999; }
input:-moz-placeholder { color: #999999; }
input::-moz-placeholder { color: #999999; }
input:-ms-input-placeholder { color: #999999; }

textarea::-webkit-input-placeholder { color: #999999; }
textarea:-moz-placeholder { color: #999999; }
textarea::-moz-placeholder { color: #999999; }
textarea:-ms-input-placeholder { color: #999999; }

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}




/*//////////////////////////////////////////////////////////////////
[ Contact 1 ]*/

.contact1 {
  width: 100%;
  /* min-height: 100%; */
  padding: 15px;

  /* background: #009bff;
  background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
  background: -o-linear-gradient(left, #0072ff, #00c6ff);
  background: -moz-linear-gradient(left, #0072ff, #00c6ff);
  background: linear-gradient(left, #0072ff, #00c6ff); */
  background-color: #ddd;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.container-contact1 {
  width: 800px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;

  padding: 90px 130px 88px 210px;
}

.contact1-form {
  width: 390px;
}

.contact1-form-title {
  display: block;
  font-family: 'Poppins', sans-serif;
  font-size: 24px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
  padding-bottom: 44px;
}

input.input1 {
  height: 50px;
  border-radius: 25px;
  padding: 0 30px;
}
input.input1 + .shadow-input1 {
  border-radius: 25px;
}

textarea.input1 {
  min-height: 150px;
  border-radius: 25px;
  padding: 12px 30px;
}
textarea.input1 + .shadow-input1 {
  border-radius: 25px;
}


.wrap-input1 {
  position: relative;
  width: 100%;
  z-index: 1;
  margin-bottom: 20px;
}

.input1 {
  display: block;
  width: 100%;
  background: #e6e6e6;
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 1.5;
  color: #666666;
}

.shadow-input1 {
  content: '';
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  box-shadow: 0px 0px 0px 0px;
  color: rgba(87,184,70, 0.5);
}

.input1:focus + .shadow-input1 {
  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
  animation: anim-shadow 0.5s ease-in-out forwards;
}

@-webkit-keyframes anim-shadow {
  to {
    box-shadow: 0px 0px 80px 30px;
    opacity: 0;
  }
}

@keyframes anim-shadow {
  to {
    box-shadow: 0px 0px 80px 30px;
    opacity: 0;
  }
}

.container-contact1-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.contact1-form-btn {
  width: 100%;
  height: 50px;
  border-radius: 25px;
  background: #57b846;
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact1-form-btn i {
  margin-left: 7px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.contact1-form-btn:hover {
  background: #333333;
}

.contact1-form-btn:hover i {
  -webkit-transform: translateX(10px);
  -moz-transform: translateX(10px);
  -ms-transform: translateX(10px);
  -o-transform: translateX(10px);
  transform: translateX(10px);
}


@media (max-width: 1200px) {
  
  .contact1-form {
    width: 44%;
  }
}

@media (max-width: 992px) {
  .container-contact1 {
    padding: 90px 80px 88px 90px;
  }

  
  .contact1-form {
    width: 55%;
  }
}

@media (max-width: 768px) {
  .container-contact1 {
    padding: 90px 80px 88px 80px;
  }

  .contact1-form {
    width: 100%;
  }
}

@media (max-width: 576px) {
  .container-contact1 {
    padding: 90px 15px 88px 15px;
  }
}


.validate-input {
  position: relative;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}
@media (max-width: 576px) {
  
  .header{
    font-size:6px;
  }
  .header p{
    font-size:10px;
  }
  .header img{
    width:100px;
    height:80px;
  }
  .sidenav,.dropdown-btn {
  width: 120px;
}
.sidenav a ,.dropdown-btn{
  padding: 10px;
  font-size:10px;
}
.contentx {
  margin-left: 120px;
  padding: 1px 6px;
}
.fa-caret-down {
  float: right;
  padding-right: 0px;
}
::placeholder{
  font-size:10px;
}
.contact1-form-title{
  font-size:12px;
}
.contact1-form-btn{
  font-size:10px;
}
.container-contact1{
  padding-top:20px;
  padding-bottom:20px;
}
.input1{
  font-size:10px;
}
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Master Students</title>
</head>
<body>
    <a name="top"></a>
    <div class="content">
	<div class="header">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
</div> 

<div  style="background-color: #186A3B ; height:20px;">
 </div>
<div class="sidenav">
<a href="../edit info/home_edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Details</a>
<a href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
<a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Add Profile</a>
  <button class="dropdown-btn"><i class="fa fa-search"></i> Add Research  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="research_publications.php">Research Publications</a>
  <a href="ongoing_research.php">Ongoing Research</a>
  </div>
  <button class="dropdown-btn"><i class="fa fa-book" aria-hidden="true"></i> Add Publications  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="journal_publications.php"><i class="fa fa-plus"></i> Journal</a>
  <a href="conference_publications.php"><i class="fa fa-plus"></i> Conference</a>
  <a href="book_publications.php"><i class="fa fa-plus"></i> Book</a>
  </div>
  <a href="funding.php"><i class="fa fa-credit-card" aria-hidden="true"></i> Add Funding</a>
  <!-- <a href="technologies.php"><i class="fa fa-desktop" aria-hidden="true"></i> Add Technologies</a> -->
  <a href="achievements.php"><i class="fa fa-trophy" aria-hidden="true"></i> Add Achievements</a>
  <button class="dropdown-btn"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add Students  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="phd_students.php"><i class="fa fa-plus"></i> PhD Students</a>
  <a href="research_students.php"><i class="fa fa-plus"></i> Research Students</a>
  <a href="master_students.php"><i class="fa fa-plus"></i> Master Students</a>
  </div>
</div>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<div class="contentx">

<div class="contact1">
    <div class="container-contact1">
      
        <form method="post" class="contact1-form validate-form">
            <span class="contact1-form-title">
               <b> MASTER STUDENTS&emsp;</b>
            </span>

            <div class="wrap-input1 validate-input">
                <input class="input1" type="text" name="name" placeholder="Enter name of student">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input">
                <input class="input1" type="text" name="topic" placeholder="Enter topic">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input">
                <input class="input1" type="text" name="uni" placeholder="Enter University">
                <span class="shadow-input1"></span>
            </div>
            

            <div class="wrap-input1 validate-input">
                <input class="input1" type="date" name="date" placeholder="Enter Date">
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" name="sub">
                    <span>
                        Submit & return to home page
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <br>
            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" name="add">
                    <span>
                        Submit & click to add more
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>

        <?php
if(isset($_POST["sub"]) or isset($_POST["add"]))
{
  $tid=$_SESSION['idf'];
  $n=$_POST['name'];
  $t=$_POST['topic'];
  $u=$_POST['uni'];
  $d=$_POST['date'];
  
  $query = "INSERT INTO f_student VALUES ('', '$tid','Masters','$n','$t','$u','$d')";
  $row= mysqli_query($con,$query);

    if($row > 0)
    {
    echo "<script>alert(' Masters student details successfully added.');</script>";
    }
    else
    {
    echo "<script>alert('Unsuccessful');</script>";
    }
}

  if(isset($_POST["sub"]))
  {
    echo "<script>window.location.href='home.php'</script>";
  }
  else if(isset($_POST["add"]))
  {
    echo "<script>window.location.href='master_students.php'</script>";
  }

?>      
</div>
</div>

</div>

 </div>   
<?php
include('footer.php');
?>
</body>
</html>