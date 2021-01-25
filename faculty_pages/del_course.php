<?php
include('config.php');
session_start();
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}
//echo "s2";
//del test
if(@$_GET['tid'] ) 
{
	//echo "s3";

$var=$_GET['tid'];
$var1=$_GET['program'];
$var2=$_GET['branch'];
$var3=$_GET['sem'];


//echo "s33";
//$r1 = mysqli_query($con,"DELETE q.*,o.*,a.* FROM ques AS q INNER JOIN options AS o ON q.qid = o.qid INNER JOIN answer AS a ON a.qid = o.qid WHERE q.quizid = '$var' ") or die('Error1');
//echo "s4";


$r2 = mysqli_query($con,"DELETE FROM coursedetails WHERE tid='$var' and program='$var1' and branch='$var2' and semester='$var3'") or die('Error2');

$r3 = mysqli_query($con,"DELETE FROM subject WHERE tid='$var' and branch='$var2'") or die('Error3');

//echo "s5";
header("location:fac_profile.php");
//echo "s6";
}
else
{
	echo "error";
}

?>

