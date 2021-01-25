<?php
include('config.php');
session_start();
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}
//echo "s2";
//del test
if(@$_GET['tname'] ) 
{
	//echo "s3";

$var=$_GET['tid'];
//echo "s33";
$r1 = mysqli_query($con,"DELETE q.*,o.*,a.* FROM ques AS q INNER JOIN options AS o ON q.qid = o.qid INNER JOIN answer AS a ON a.qid = o.qid WHERE q.quizid = '$var' ") or die('Error1');
//echo "s4";

$r2 = mysqli_query($con,"DELETE FROM quiz WHERE quizid='$var' ") or die('Error2');
//echo "s5";
header("location:viewtest.php");
//echo "s6";
}

?>

