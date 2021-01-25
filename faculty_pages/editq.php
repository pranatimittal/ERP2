<?php
include('config.php');
session_start();
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" type = "image/png" href = "IGDTUW-Logo.png">
<title>Edit Questions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  color: #21610B
;
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
/* .footer p{
  position: relative;
  height: 50px;
  width: 100%;
  background-color: black;
  text-align: center;
  color:white;
   font-size:30px;
  } */
 .main h1{
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 30px;
    color:#5e0c17;
    text-align: center;
  }
  /* .adminpanel{
    width:500px;
    color:#897073;
    margin:30px auto 0;
    padding:50px;
    border:2px solid #ddd;
    font-family: "Times New Roman", Georgia, Serif;
    font-size: 20px;
    }*/
    /* .manageuser{
      font-family: "Times New Roman", Times, serif;
      font-size: 20px;
    }   */
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
  background-color: #4CAF50
;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 50%;
  font-size:18px;
  background-color: #4CAF50
;
  color: white;
  padding: 12px 18px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}input[type=submit]:hover {
  background-color:#45a049;
}
.quiz {
  border-radius: 5px;
  background-color: #F2F2F2
;
  padding: 20px;
  text-align: center;
}
textarea{
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  }
  .content {
  flex: 1 0 auto;
}
.navbar .icon {
  display: none;
}
.title1{
  margin-left:40%;
  font-size:30px;
}
.que{
  font-size:20px;
  margin-left:40%;
}
.abc{
  float:left; 
  margin-top:10px;
   margin-left:30px;
   padding:left;
}
textarea{
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  float:left;
  margin-left:25%;
  font-size:15px; 
  width:30%; 
  height:25%; 
  }
  .optionx{
  margin-left:35%;
}
@media (max-width: 576px) {
  .title1{
  margin-left:29%;
  font-size:20px;
}
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
  background-color: #4CAF50
;
  color: white;
}
.que{
  font-size:18px;
  margin-left:30%;
}
.abc{
  
  margin-top:20px;
   margin-left:4%;
   padding:left;
}
textarea{
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 margin-left:5%;
 margin-right:auto;
  font-size:15px; 
  width:90%; 
  height:20%; 
  }
  select{
  font-size: 8px;
}
input[type=text], select {
  width: 50%;
  padding: 8px 0px;
  margin: 8px 0;
}
input[type=submit] {
  width: 50%;
  font-size:10px;
  background-color: #4CAF50
;;
  color: white;
  padding: 12px 18px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.optionx{
  margin-left:35%;
}
 }
</style>
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
        <a class="active" href="fac_home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="manageuser.php"><i class="fa fa-users" aria-hidden="true"></i> Manage User</a>
        <a href="add_quiz.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Quiz</a>
        <a href="viewtest.php"><i class="fa fa-eye" aria-hidden="true"></i> View Test</a>
        <a href="f_testresult.php"><i class="fa fa-address-card-o" aria-hidden="true"></i> View Result</a>
        <a href="f_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
<div class="row">
<div class="row">
<span class="title1"><b>Enter Question Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6">
 <form name="form" method="POST" enctype="multipart/form-data">
 <fieldset style="width:90%;margin-left:auto;margin-right:auto;">
 <?php
   $m=1;
   $i=1;
    if(@$_GET['qid'] and @$_GET['tid'] and @$_GET['tname'] and @$_GET['ques'])
    {
      $tid=$_GET['tid'];
      $_SESSION['ttid']=$tid;
      $tn=$_GET['tname'];
      $_SESSION['ttname']=$tn;
      $qid=$_GET['qid'];
      $_SESSION['qqid']=$qid;
      $q=$_GET['ques'];
      $_SESSION['qq']=$q;
    }
    else
    {
      echo "login again";
    }
?>
<br>
<div class="que"><b>Question number: <?php echo $m; ?><br /></div>
<br><br>
<div class="form-group">
  <label class="col-md-12 control-label" for="qns'.$i.' "></label>
  <div class="col-md-12">
  <?php
  echo '<textarea name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here...">'.$_GET['ques'].'</textarea>';?>
  <?php
echo '<input class="abc" type="file" name="image" ><br';
?></div>
</div>
<br><br><br><br><br>
<!-- Text input-->
<div class="optionx">
  <?php
    //$count++;
    $quesid= $qid;
    $sql1=mysqli_query($con,"SELECT * FROM options WHERE qid='$quesid'") or die('Error');
   $count=1;
  while($row1=mysqli_fetch_array($sql1))
  {
    $op=$row1['option'];
    $opid=$row1['optionid'];
  echo '<div class="col-75">
              <input type="text" id="'.$i.''.$count.'" name="'.$i.''.$count.'" value ='.$op.'>
            </div>';
      $count++;}
  ?>
<br />
<b>Correct answer</b>:<br />
<?php echo '<select class="col-75" id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
   <option value="a">Select answer for question:'.$m.'</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option> </select><br /><br />'
 ?>
 </div>
 </div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12">
    <input name="sub" type="submit" style="margin-left:26%;" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
  </div>
</div>
</form>
<?php
if(isset($_POST["sub"]))
{$j=$i;
    $qname=$_POST['qns1'];
   $quid=$tid;
 $que= $_POST['qns'.$j];
 //img start cod//e here
      $img=basename($_FILES["image"]["name"]);
        $type=$_FILES["image"]["type"];
        $size=$_FILES["image"]["size"];
        $store=$_FILES["image"]["tmp_name"];
        //for support only image code here
      $n=explode('.',$img);
      $p=pathinfo("upload/".$img,PATHINFO_EXTENSION);
      $q=array("jpg","png","jpeg", "JPG", "PNG", "JPEG", "gif");
  if(in_array($p,$q))
  {
        //echo "1";
          move_uploaded_file($store,"upload/".$img);
          //echo $qid;
      $query="UPDATE ques SET qid='$qid',quizid='$tid', ques='$que', image='$img' where qid='$qid'";
      $row=mysqli_query($con, $query);
      if($row > 0)
      {
      //echo "33";
        //echo "<script>alert('Question saved')</script>";
        //echo "<script>window.location.href='fac_home.php'</script>";
      }
      else
      {
        echo "<script>alert('not done')</script>";
      }
  } 
      else
      {
        //echo "moni";
$query="UPDATE ques SET qid='$qid',quizid='$tid', ques='$que', image='' where qid='$qid'";
$row=mysqli_query($con, $query);
        //echo "<script>alert('Question saved')</script>";
      }
      $count=1;
   $queryy=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid'") or die('Error');
  while($row11=mysqli_fetch_array($queryy))
  {
    $opid= $row11['optionid'];
    $op= $_POST['1'.$count];
    $query11="DELETE FROM options WHERE optionid='$opid'";
    $row=mysqli_query($con, $query11);
    $query22="INSERT INTO options VALUES ('$qid','$op','$opid')";
        $row=mysqli_query($con, $query22);
    if($count==1)
    {
      $aa=$opid;
    }
    else if($count==2)
    {
      $bb=$opid;
    }
    else if($count==3)
    {
      $cc=$opid;
    }
    else if($count==4)
    {
      $dd=$opid;
    }
    $count++;
  }
    $e= $_POST["ans".$i];
  switch($e)
    {
    case 'a':
    $ansid=$aa;
  echo $ansid;
    break;
    case 'b':
    $ansid=$bb;
    echo $ansid;
    break;
    case 'c':
    $ansid=$cc;
    echo $ansid;
    break;
    case 'd':
    $ansid=$dd;
    echo $ansid;
    break;
    default:
    $ansid=$oaid;
    }
  //echo $ans;
    $query="UPDATE answer SET qid='$qid', ansid='$ansid' where qid='$qid'";
    $qa=mysqli_query($con,$query) or die('Error61');
    echo "<script>alert('Question Edited Successfully');</script>";
    echo "<script>window.location.href='viewtest.php'</script>";
    }
  ?>
</fieldset>
</div>
</tbody>
</div>
    <?php
include('../footer.php');
?>
</body>
</html>