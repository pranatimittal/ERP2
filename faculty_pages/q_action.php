<?php
include('config.php');
session_start();
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}


if(isset($_POST["sub"]))
{
echo "hii123";
$qid=$_SESSION['qqid'];
$tid=$_SESSION['ttid'];
$q=$_SESSION['qq'];
echo "r1";
$r1 = mysqli_query($con,"DELETE FROM ques WHERE qid = '$qid' ") or die('Error1');
echo "r2";
​$r2 = mysqli_query($con,"DELETE FROM options WHERE qid = '$qid' ") or die('Error2');
​$r3 = mysqli_query($con,"DELETE FROM answer WHERE qid = '$qid' ") or die('Error3');
​ //insert new record
​$row= mysqli_query($con,"INSERT INTO ques VALUES ('$qid','$tid','$q','4','4')") or die('Error60');
     
    $oaid=mt_rand(500, 1000);
    $obid=mt_rand(500, 1000);
    $ocid=mt_rand(500, 1000);
    $odid=mt_rand(500, 1000);
​
    $a=$_POST[$j.'1'];
    $b=$_POST[$j.'2'];
    $c=$_POST[$j.'3'];
    $d=$_POST[$j.'4'];
​
    $qa=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$a','$oaid')") or die('Error61');
    $qb=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$b','$obid')") or die('Error62');
    $qc=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$c','$ocid')") or die('Error63');
    $qd=mysqli_query($con,"INSERT INTO options VALUES  ('$qid','$d','$odid')") or die('Error64');
​
    $e=$_POST['ans'.$j];
    switch($e)
    {
    case 'a':
    $ansid=$oaid;
    break;
    case 'b':
    $ansid=$obid;
    break;
    case 'c':
    $ansid=$ocid;
    break;
    case 'd':
    $ansid=$odid;
    break;
    default:
    $ansid=$oaid;
    }
​
​
    $qans=mysqli_query($con,"INSERT INTO answer VALUES  ('$qid','$ansid')");
​
     
    header("location:fac_home.php?");
    }
​
​
    
​
?>
​
​






