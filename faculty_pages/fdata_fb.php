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
$result =mysqli_query($con,"SELECT AVG(teaching_skill),AVG(presentation_skills), AVG(personal_attributes), AVG(Qoflecture),AVG(practical_section),AVG(beyond_class),AVG(gq1),AVG(gq2) FROM teacher_fb WHERE fac_id='$id'")or die('Error1');

//loop through the returned data

$t;
$p;
$pr;
$q;
$prac;
$b;
while($row = mysqli_fetch_array($result)) {
            $t = $row['AVG(teaching_skill)']*2;
           	$p= $row['AVG(personal_attributes)']*2;
          	$pr = $row['AVG(presentation_skills)']*2;
            $q= $row['AVG(Qoflecture)']*2;
            $prac=$row['AVG(practical_section)']*2;
			$b= $row['AVG(beyond_class)']*2;
           // $g1 = $row['AVG(gq1)']*100;
           // $g2 = $row['AVG(gq2)']*100;


		}

		$data = array($t , $pr,$q,$b,$p,$prac);
		
//print_r($data);
//echo $data;
print json_encode($data);
?>

