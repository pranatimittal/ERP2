<?php
include('config.php');
error_reporting(1);
session_start();
?>
<?php
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script type="text/javascript">
function preback(){window.history.forward();}
setTimeout("preback()",0);
window.onunload=function(){null};
</script>
<title>Page Title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
<script>
document.onkeydown = function(e) {
        if ((e.ctrlKey && 
            (e.keyCode === 67 || //c
             e.keyCode === 86 || //v
             e.keyCode === 85 || //u
             e.keyCode === 82 || //r
             e.keyCode === 117))||
             e.keyCode === 8||
             e.keyCode === 9||){
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
})
history.pushState(null,document.title,location.href);
window.addEventListerner('popstate',function(event){
  history.pushState(null,document.title,location.href);
});
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
  background-color: rgb(226, 221, 221);
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
    color:black;
    text-align: center;
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
/* .navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #4CAF50;
} */
.manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}
td, th {
  border: 2px solid rgb(204, 200, 200);
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #d8d4d4;}
tr:hover {background-color: #ddd;}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
}
.result{
  margin-left: 3%;
  margin-right: 3%;
  background-color: white;
}
input[type=button] {
  width: auto;
  background-color: #4CAF50;
  color: white;
  margin-left:45%;
  padding: 14px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=button]:hover {
  background-color: #45a049;
}
.hover-item:hover{
  background-color: #3e8e41;
}
.content {
  flex: 1 0 auto;
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
 .main h1{
     font-size: 25px;
   }
   input[type=button] {
  margin-left:35%;
}

 }
</style>
  <link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
  <title>Student Results</title>
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
        <a class="active" href="stu_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>      
        <a href="stu_viewtest.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Take a test</a> 
        <a href="result.php"><i class="fa fa-certificate"></i> View Result</a>
        <a href="logout.php"><i class="fa fa-sign-out  fa-logout"></i> Logout</a>
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
        <br>
 <div class="result">
<div class="main">
<h1>Result</h1>
</div>
<div class = "manageuser">
  <table align="center">
  <tr>
    <th style="background-color:black;color:white;">SNo.</th>
    <th style="background-color:black;color:white;">Question</th>
    <th style="background-color:black;color:white;">Response</th>
  </tr>
 <?php
   //read the below info tanya..hahahahaha
   $sno=1;
   $res= $_SESSION["res"]; 
   //print_r($res);
   
    //this is the 2D array in which all the responses are stored....key:quesid and value:response enter by user.
  // echo $res[1892603][0];  (hardcoded value)   //this element will be null if this question was unattempted. otherwise optionid will be returned 
   //echo $res[1][0];
   //echo $res[2][0];
 // echo count($res);              //this will return the size of the array.
  $testid=$_SESSION['TestId'];
  $C=0;
  $W=0;
  $U=0;
  $response; //individual ques response
  $response1=""; //student responses
    $sql=mysqli_query($con,"SELECT q.qid,q.ques,a.ansid,o.option FROM ques AS q INNER JOIN answer AS a ON q.qid=a.qid INNER JOIN options AS o ON o.optionid=a.ansid WHERE quizid='$testid' ") or die('Error101');
    while($row=mysqli_fetch_array($sql)){
          $qid=$row['qid'];
          $ques=$row['ques'];
          $ansid=$row['ansid'];
          $ans=$row['option'];
          $stu_opid=$res[$qid][0];
          if($stu_opid==""){
            //unattempted
            $U++;
            $response="Unattempted";
            $response1=$response1."U"."$ques@"; 
          }
          else{
            //correct/wrong
            if($stu_opid != $ansid){
              //wrong
              $W++;
              $response="Incorrect";
              $response1=$response1."$stu_opid@"; 
            }
            else{
              //correct
              $C++;
              $response="Correct";
              $response1=$response1."$stu_opid@"; 
            }
          }
           echo '<tr><td>'.$sno++.'</td><td>'.$ques.'</td><td>'.$response.'</td></tr>';
        }
        echo '</table></div>';
        //calculate score 
        $date=date('d-m-Y');
        $c=$_SESSION['Correct'];
        $w=$_SESSION['Wrong'];
        $e=$_SESSION['Email'];
        $score=($C * $c ) -($W * $w);
        ?>
        <table align="center">
        <?php echo "<tr><th style='color:green'>Right Answer <i class='fa fa-check' style='color:green'></i></th>
    <th>".$C."</th></tr><tr><th style='color:red'>Wrong Answer <i class='fa fa-times' style='color:red'></i></th><th>".$W."</th></tr><tr><th style='color:blue'>Unattempted Question </th><th>".$U."</th></tr>";
  echo  "<tr><th style='color:rgb(82, 202, 241)'>Score <i class='fa fa-star' style='color:rgb(82, 202, 241)'></i></th><th>".$score."</th></tr><br><br>";
  $que= mysqli_query($con, "SELECT * FROM history where email='$e' and quizid='$testid'");
      if($data=mysqli_fetch_array($que))
        {
            echo "<script>alert('You cannot attempt the test twice.')</script>";
            echo "<script>window.location.href='stu_home.php'</script>";
        }
        else
        {
             $ins_res=mysqli_query($con," INSERT INTO  history VALUES ( '','$e','$testid','$score','$C','$W','$U','$date','$response1' )") or die(Error);
        }
    ?>
 </table>
 <br>

<?php
echo '<a href="test_fb.php?tid='.$testid.'"><input type="button" class="hover-item" value="Give Feedback"></a>'
?>
<br />
<br />
</div>

</div>
<br>
<br>
</div> 
    <?php
include('../footer.php');
?>
</body>
</html>