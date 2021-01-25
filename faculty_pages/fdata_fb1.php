<?php
include('config.php');
session_start();

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}

//setting header to json
header('Content-Type: application/json');
$id=$_SESSION['idf'];

//query to get data from the table
 // $s=$_GET['s'];
 // $d=$_GET['d'];
 // echo $s;
//execute query
$result =mysqli_query($con,"SELECT AVG(gq1),AVG(gq2) FROM teacher_fb WHERE fac_id='$id'")or die('Error1');

//loop through the returned data

$g1;
$g2;

while($row = mysqli_fetch_array($result)) {
          
           $g1 = $row['AVG(gq1)']*100;
           $g2 = $row['AVG(gq2)']*100;
		}

		$data = array($g1,$g2);
				
//print_r($data);
//echo $data;
print json_encode($data);
?>

