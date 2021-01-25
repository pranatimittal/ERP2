<?php
include('config.php');
session_start();
//del research publication here
if(@$_GET["id"] ) 
{
	//echo "s3";

$rid=$_GET["id"];
$r2 = mysqli_query($con,"DELETE FROM ongoing_research WHERE  orid='$rid' ") or die('Error2');
header("location:ongoing_research_edit.php");
}

?>
