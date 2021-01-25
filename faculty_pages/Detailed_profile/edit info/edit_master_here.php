<?php
include('config.php');
session_start();

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='../faculty_login.php'</script>";
}

$fid=$_SESSION["idf"];
$id=$_GET["id"];
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
  width: 1000px;
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

  padding: 90px 130px 88px 160px;
}

/*------------------------------------------------------------------
[  ]*/
.contact1-pic {
  width: 296px;
}

.contact1-pic img {
  max-width: 100%;
}


/*------------------------------------------------------------------
[  ]*/
.contact1-form {
  width: 890px;
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
  color:black;
}
input.input1 + .shadow-input1 {
  border-radius: 25px;
}

textarea.input1 {
  min-height: 200px;
  border-radius: 25px;
  padding: 12px 30px;
  color:black;
}
textarea.input1 + .shadow-input1 {
  border-radius: 25px;
}

/*---------------------------------------------*/
.wrap-input1 {
  position: relative;
  width: 100%;
  z-index: 1;
  margin-bottom: 20px;
}

.input1 {
  display: block;
  width: 60%;
  background: #e6e6e6;
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 1.5;
  color: #666666;
  margin-left:40%;
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
  width:60%;
  margin-left:40%;
  -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
  animation: anim-shadow 0.5s ease-in-out forwards;
}
label{
    font-family: 'Poppins', sans-serif;
    margin-left:0%;
    float:left;
    margin-top:2%;
    width:40%;
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

/*---------------------------------------------*/
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
  width: 50%;
  height: 50px;
  border-radius: 25px;
  background:#4CAF50;
  border: 2px solid  #4CAF50;
 
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  line-height: 1.5;
  color:white;
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
  background: #3e8e41;;
  

}

.contact1-form-btn:hover i {
  -webkit-transform: translateX(10px);
  -moz-transform: translateX(10px);
  -ms-transform: translateX(10px);
  -o-transform: translateX(10px);
  transform: translateX(10px);
}


@media (max-width: 1200px) {
  .contact1-pic {
    width: 33.5%;
  }

  .contact1-form {
    width: 44%;
  }
}

@media (max-width: 992px) {
  .container-contact1 {
    padding: 90px 80px 88px 90px;
  }

  .contact1-pic {
    width: 35%;
  }

  .contact1-form {
    width: 55%;
  }
}

@media (max-width: 768px) {
  .container-contact1 {
    padding: 90px 80px 88px 80px;
  }

  .contact1-pic {
    display: none;
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
  /* position: relative; */
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
label{
    font-size:10px;
    margin-top:4%;
}
 }
  </style>
<link rel = "icon" type = "image/png" href = "IGDTUW-logo.png">
<title>Master Students Edit</title>
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

<div class="contact1">
    <div class="container-contact1">
        <!-- <div class="contact1-pic js-tilt" data-tilt>
            <img src="img-01.png" alt="IMG">
        </div> -->

        <form method="post" class="contact1-form validate-form">
        <div style="border:2px solid black;border-radius:12px;padding:30px;">
            <span class="contact1-form-title">
               <b>Edit Master Students</b>
            </span>

            <?php
            $q=mysqli_query($con,"SELECT * FROM f_student WHERE sid='$id' " )or die('Error231');
            while($row11=mysqli_fetch_array($q))
            {

              $n=$row11["name"];
              $t=$row11["topic"];
              $u=$row11["university"];
              $d=$row11["date"];

            echo'
            <div class="wrap-input1 validate-input">
            <label for="stuname"><b>Name of the student :</b></label>
                <input class="input1" type="text" name="name" value="'.$n.'"">
                <span class="shadow-input1"></span>
            </div>

            
            <div class="wrap-input1 validate-input">
            <label for="topic"><b>Topic :</b></label>
                <input class="input1" type="text" name="topic" value="'.$t.'"">
                <span class="shadow-input1"></span>
            </div> 
            
            <div class="wrap-input1 validate-input">
            <label for="university"><b>University :</b></label>
                <input class="input1" type="text" name="uni" value="'.$u.'"">
                <span class="shadow-input1"></span>
            </div>

            
            <div class="wrap-input1 validate-input">
            <label for="date"><b>Date :</b></label>
                <input class="input1" type="date" name="date" value="'.$d.'">
                <span class="shadow-input1"></span>
            </div>
            </div>
            <br>';
}
            ?>

             <br> 
            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" name="sub">
                    <span>
                        SUBMIT
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            
            
        </form>
<?php
if(isset($_POST["sub"]))
{
  $y=$_POST["topic"];
  $n=$_POST["name"];
  $l=$_POST["uni"];
  $d=$_POST["date"];
  
  $query = "UPDATE f_student SET name='$n',topic='$y',university='$l',date='$d' WHERE sid='$id'";
  $row= mysqli_query($con,$query)or die("error9342");

    if($row > 0)
    {
    echo "<script>alert('Master Student details successfully edited.');</script>";
    echo "<script>window.location.href='master_students_edit.php'</script>";
    }
    else
    {
    echo "<script>alert('Unsuccessful');</script>";
    }
}

  ?>


</div>
</div>



 </div>   
<?php
include('footer.php');
?>
</body>
</html>