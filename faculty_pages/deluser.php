<?php
include('config.php');
session_start();

if(@$_GET['demail'] ) 
{
$var=$_GET['demail'];

//$r1 = mysqli_query($con,"DELETE FROM rank WHERE email='$var' ") or die('Error');
//$r2 = mysqli_query($con,"DELETE FROM history WHERE email='$var' ") or die('Error1');
$result = mysqli_query($con,"DELETE FROM login_student WHERE email='$var' ") or die('Error2');
header("location:manageuser.php");
}

?>
