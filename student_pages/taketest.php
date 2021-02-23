<?php
include('config.php');
session_start();
$val=0;
$try=0;
$index= $_SESSION["index"];
//$res= $_SESSION["res"];
  ?>
  <?php
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}
?>
  <?php
  $ttid=$_SESSION["tid"];
  $result = mysqli_query($con,"SELECT time FROM quiz where quizid='$ttid'") or die('Error');
while($row = mysqli_fetch_array($result)) {
  $val=$row['time'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Take Test</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
document.onkeydown = function(e) {
        if ((e.keyCode === 13 ) || (e.keyCode === 116 ) || (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 ||
             e.keyCode === 82 ||
             e.keyCode === 84 || 
             e.keyCode === 117))) {
            return false;
        } else {
            return true;
        }
};
</script>
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}
/* Header/Logo Title */
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
/*.footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  }*/
 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }
  .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    } 
    .manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
    } 
    .navbar {
  overflow: hidden;
  background-color:#555;
}
.navbar a {
  float:left;
  font-size: 25px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  margin-left:40%;
}
.question{
    margin-left: 1%;
    margin-right: 1%;
}
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}
/* Header/Logo Title */
/* .header {
  position: relative;
  padding: 40px;
  background: white;
  color: #21610B;  
  font-size: 10px;
}
p{
color:black;
font-size:15px;
}
 .header img {
  float: left;
  width: 150px;
  height: 120px;
  background: #555;
} */
 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }
  .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    } 
    .manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
    } 
    .navbar {
  overflow: hidden;
  background-color:#555;
}
/* .navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
} */
input[type=submit] {
  width: 18%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  margin: 8px 0px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-left:40%;
  font-size:18px; 
  float: left;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.question{
    margin-left: 1%;
    margin-right: 1%;
}
.alamgir{
   margin-top:3%;
}
.button1{
  background-color:rgb(204, 198, 198);;
  color:black;
  padding-left:10px;
  padding-right:10px;
  padding-top:0px;
  padding-bottom:0px;
  text-align:center;
  display:inline-block;
  font-size:15px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:12px;
  float:right;
  margin-right:15px;
}
.content {
  flex: 1 0 auto;
}  
.title1{
  margin-left:47%;
  font-size:30px;
}
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  height:80%;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
   font-size: 15px;
   margin-left:0%;
 }
 input[type=submit]
 {
   font-size:10px;
   width:20%;
 }
 .alamgir{
   color:#05020d;
   font-size: 10px;
}
.title1{
  font-size:25px;
  margin-left:42%;
}
.button1{
  margin:2px;
}
.alamgir{
   margin-top:0%;
}
 }
</style>

</head>
<body>
<a name="top"></a>
    <div class="content">
<div class="header" style="margin-left:-20px;margin-top:0px; position:fixed; overflow:hidden; width:100%;">
  <img src="IGDTUW-logo.png" alt="logo" />
  <h1>INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</h1>
  <p>(Established by Govt. of Delhi vide Act 9 of 2012)</p>
 <div class="navbar" style="position:fixed; overflow:hidden; width:100%;">
 <a href="#">Your Exam is Running</a>
<button class="button button1">
<div id="countdown"></div>
<div id="notifier"></div>
</button>  </div></div>  
<br><br><br><br><br>
<br><br><br><br><br>
<br>
<html>
<body>
 <script type="text/javascript">
(function () {
  function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  document.getElementById("notifier").style.color = "black";
    document.getElementById("notifier").style.marginRight = "45px";
    document.getElementById("countdown").style.marginRight = "100px";
    document.getElementById("notifier").style.fontFamily = "Arial";
    document.getElementById("notifier").style.fontSize = "20px";
    document.getElementById("countdown").style.fontFamily = "Arial";
    document.getElementById("countdown").style.fontSize = "25px";
    document.getElementById("countdown").style.textAlign = "right";
    document.getElementById("notifier").style.textAlign = "right";
  }
  function toMinuteAndSecond( x ) {
    return Math.floor(x/60) + ":" + (x=x%60 < 1 ? 0 : x%60);
  }
  function setTimer( remain, actions ) {
    var action;
    (function countdown() {
       display("countdown", toMinuteAndSecond(remain));
       if (action = actions[remain]) {
         action();
       }
       if (remain > 0) {
         remain -= 1;
         setTimeout(arguments.callee, 1000);
       }
     else if(remain==0)
     {
       document.getElementById("sub").click(); 
       
      // window.location.href = "stu_result.php";
     }
    })(); // End countdown
  }
 var spge = '<?php echo $val ;?>';
 //spge*=60;
  setTimer(spge, {
     0: function () { display("notifier", "Time is up");       }
  });
})();
</script> 
</body>
</html>
<div id="countdown"></div>
<div id="notifier"></div>
<div class="alamgir">
<!-- <h2 style="color:maroon;text-align:center;"><marquee>Your Exam is Running</marquee></h2>
<h2 style="color:maroon;text-align:center;">Your Exam is Running</h2>  -->
     </div>
<div class="row">
<span class="title1"><b>Test</b></span>
 <div class="col-md-3"></div><div class="col-md-6">
 <fieldset style="width:90%;margin-left:auto;margin-right:auto;">
 <div class="col-md-3"></div>
 <div class="col-md-6">
 <form name="form" method="POST" enctype="multipart/form-data" >
<?php
    $ttid=$_SESSION["tid"];
    $_SESSION['TestId']=$ttid;
    $tot=$_SESSION["tq"];
    $corr=$_SESSION["corr"];
    $_SESSION['Correct']=$corr;
    $wro=$_SESSION["wron"];
    $_SESSION['Wrong']=$wro;
//echo $index;
  //$arr= array();
  //global $arr;
  
  $arr=$_SESSION["arr"];
  //print($arr);
//  echo count($arr);
  //$index++;
  //$p=$_SESSION["$index"];
  
  $p= $arr["$index"];
  $res= $_SESSION["res"];
  //print(count($res));
?>  

  <?php
//global $arr;
   $count=$index;
   $count++;
  //   $a= $arr[$x];
    // echo $a;
     $sql= mysqli_query($con,"SELECT * FROM  ques WHERE qid='$p'");
     while($row=mysqli_fetch_array($sql))
          {
        echo ' &nbsp;<h3 class="center">Question .'.$count.': '.$row['ques'].'</h3>';
        ?>
        &nbsp;&nbsp;&nbsp;<img id="myImg" src="../faculty_pages/upload/<?php echo $row["image"];?>" height="200px" width="200px" alt=""/>
        
		<br><br>
    <div id="myModal" class="modal">

<!-- The Close Button -->
<span class="close">&times;</span>

<!-- Modal Content (The Image) -->
<img class="modal-content" id="img01">

<!-- Modal Caption (Image Text) -->
<div id="caption"></div>
</div>
		<?php
		
		       if($row["image"])
		       {
		       echo '<h4>(Click on the image to zoom)</h4>';
		       }

        $sql1=mysqli_query($con,"SELECT * FROM options WHERE qid='$p'") or die('Error'); 
        $b='a';
        while($row1=mysqli_fetch_array($sql1))
        {
          $op=$row1['option'];
            $opid=$row1['optionid'];
              echo '&nbsp;&nbsp;&nbsp;'; echo $b++ .')<input type="radio" class="rdCheck" name="'.$p.'" value="'.$opid.'">'.$op.'</br>';
                }
          echo '<h4>(Double click on the checked button to uncheck it.)</h4>';                
                
echo '<input name="sub" type="submit" id="sub" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
';    
      }
  ?>  
</form>
<?php
if(isset($_POST["sub"]))
{
     // $_SESSION["index"]++;
    //$ans= $_POST[$p];
     //array_push($res,$ans);
    //$_SESSION["res"]=$res;
    //print(count($res));
    //print($res[0]);
    $_SESSION["index"]++;
    $ans= $_POST[$p];
   //  array_push($res,$ans);
   $res[$p][0]= $ans;
    $_SESSION["res"]=$res;
    //print(count($res));
    //print($res[0]);
  if($_SESSION["index"]>=$tot)
  {
//     echo "<script>alert('Response has been recorded.')</script>";

       echo "<script>window.location.href='stu_result.php'</script>";
  }
  else
  {
//   echo "<script>alert('Response has been recorded.')</script>";
         echo "<script>window.location.href='taketest.php'</script>";
  }
}
?>
 <br><br>
  </div>
</fieldset>
</div>
</div>
<script>
$(window).blur(function() {
   alert('You are not allowed to leave page.');
   //do something else
});
</script>
<script>
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>


 <script> 
         $('.rdCheck').dblclick(function(){

          if($(this).is(':checked'))
          {
             $(this).removeAttr('checked');
          }
});
        </script>
</div> 
    <?php
include('../footer.php');
?>
</body>
</html>
