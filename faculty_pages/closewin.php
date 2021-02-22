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

$r2 = mysqli_query($con,"UPDATE quiz SET testkey='closed' WHERE  quizid = '$var' ") or die('Error2');
//echo "s5";
header("location:viewtest.php");
//echo "s6";
}

?>
