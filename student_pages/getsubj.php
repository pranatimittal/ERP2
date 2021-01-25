<?php
   include('config.php');
   session_start();
?>
<?php

if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='student_login.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
 
   $tn=$_GET["facName"];
  // echo $tn;
   $p=$_SESSION["prog"];
   $b=$_SESSION["bran"];
   $s=$_SESSION["sem"];
   
  //echo $p;
 $sql="SELECT s.subjname FROM subject AS s INNER JOIN coursedetails AS c ON s.tid=c.tid  WHERE s.tid = '$tn' AND c.program = '$p' AND c.branch = '$b' AND c.semester = '$s' AND s.branch='$b' ";
   $result = mysqli_query($con,$sql)or die('Error');
   
?>
<option value="">Select Subject</option>
<?php
  while($rs=mysqli_fetch_array($result)) {
?>
  <option value="<?php echo $rs["subjname"]; ?>"><?php echo $rs["subjname"]; ?></option>
<?php

}
?>
</body>
</html>
