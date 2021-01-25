<?php
include('config.php');
session_start();
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}

if(@$_GET['qid'] AND @$_GET['tid'] AND @$_GET['tname'] ) 
{
	$var=$_GET['qid'];
	$testid=$_GET['tid'];
	$testn=$_GET['tname'];



	$r1 = mysqli_query($con,"DELETE FROM ques WHERE qid = '$var' ") or die('Error1');


	$r2 = mysqli_query($con,"DELETE FROM options WHERE qid = '$var' ") or die('Error2');

	$r3 = mysqli_query($con,"DELETE FROM answer WHERE qid = '$var' ") or die('Error3');

	$r4 = mysqli_query($con,"SELECT * FROM quiz WHERE quizid='$testid' ") or die('Error4');
                 while($row=mysqli_fetch_array($r4))
                 {
                 $noofques=$row['totalques'];
                 $newno=$noofques-1;
                 if($newno==0)
                 {
                    $r5 = mysqli_query($con,"DELETE FROM quiz WHERE quizid = '$testid' ") or die('Error5');
                 }
                 else
                 {
                    $r6 = mysqli_query($con,"UPDATE quiz SET totalques='$newno' WHERE quizid='$testid' ") or die('Error4');
                 }
                }

	//header("location:viewques.php?tid=".$var."&tname=".$testn."");
header("location:viewtest.php");

}

?>

