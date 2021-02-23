$query = ;

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
$r1 = mysqli_query($con,"UPDATE quiz SET time=1 where quizid='$var'") or die('Error1');
//echo "s4";
//echo "s5";
header("location:viewtest.php");
//echo "s6";
}

?>

