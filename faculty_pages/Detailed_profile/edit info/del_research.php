<?php
include('config.php');
session_start();
//del research publication here
if(@$_GET["id"] ) 
{
	//echo "s3";

$rid=$_GET['id'];
$r2 = mysqli_query($con,"DELETE FROM f_research WHERE  rid='$rid' ") or die('Error2');
header("location:research_publications_edit.php");
}

?>
