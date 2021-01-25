<?php
include('config.php');
session_start();
//echo "s2";
//del test
if(@$_GET['aid'] ) 
{
	//echo "s3";

$idf=$_SESSION['idf'];
$aid=$_GET['aid'];
//echo "s33";
//$r1 = mysqli_query($con,"DELETE q.*,o.*,a.* FROM ques AS q INNER JOIN options AS o ON q.qid = o.qid INNER JOIN answer AS a ON a.qid = o.qid WHERE q.quizid = '$var' ") or die('Error1');
//echo "s4";

$r2 = mysqli_query($con,"DELETE FROM f_conference WHERE cid='$aid' and fid='$idf'") or die('Error2');

//echo "s5";
header("location:conference_publications_edit.php");
//echo "s6";
}
else
{
	echo "error";
}

?>

