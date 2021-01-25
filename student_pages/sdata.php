<?php
include('config.php');
session_start();

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

//setting header to json
header('Content-Type: application/json');
$id=$_SESSION['hid'];

//query to get data from the table
 // $s=$_GET['s'];
 // $d=$_GET['d'];
 // echo $s;
//execute query
$result =mysqli_query($con,"SELECT right_ans,wrong_ans,unattempted FROM history WHERE hid='$id'")or die('Error1');

//loop through the returned data

$w;
$r;
$u;

while($row = mysqli_fetch_array($result)) {
          
           $r = $row['right_ans'];
           $w = $row['wrong_ans'];
           $u = $row['unattempted'];
		}

		$data = array($r,$w,$u);
				
//print_r($data);
//echo $data;
print json_encode($data);
?>

