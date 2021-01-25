<?php
include('config.php');
session_start();

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

//setting header to json
header('Content-Type: application/json');
$id=$_SESSION['feedbackid'];

//query to get data from the table
 // $s=$_GET['s'];
 // $d=$_GET['d'];
 // echo $s;
//execute query
$result =mysqli_query($con,"SELECT teaching_skill,presentation_skills, personal_attributes, Qoflecture,practical_section,beyond_class FROM teacher_fb WHERE f_id='$id'")or die('Error1');

//loop through the returned data

$t;
$p;
$pr;
$q;
$prac;
$b;
while($row = mysqli_fetch_array($result)) {
            $t = $row['teaching_skill']*2;
           	$p= $row['personal_attributes']*2;
          	$pr = $row['presentation_skills']*2;
            $q= $row['Qoflecture']*2;
            $prac=$row['practical_section']*2;
			$b= $row['beyond_class']*2;


		}

		$data = array($t,$pr,$q,$b,$p,$prac);	
//print_r($data);
//echo $data;
print json_encode($data);
?>

