<?php
include('config.php');
session_start();
//del research publication here
if(@$_GET["id"] ) 
{
  //echo "s3";

$sid=$_GET["id"];
$r2 = mysqli_query($con,"DELETE FROM f_student WHERE sid='$sid' ") or die('Error2');
header("location:phd_students_edit.php");
}

?>
