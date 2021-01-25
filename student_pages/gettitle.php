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
 
   $sn=$_GET["subjName"];
   $p=$_SESSION["prog"];
   $b=$_SESSION["bran"];
   $s=$_SESSION["sem"];

   
 $sql="SELECT s.tid  FROM subject AS s INNER JOIN coursedetails AS c ON s.branch=c.branch and s.subjcode=c.subjcode  WHERE s.subjname = '$sn' AND c.program = '$p' AND c.branch = '$b' AND c.semester = '$s' AND s.branch='$b' ";
   $result = mysqli_query($con,$sql)or die('Error');

  ?>
 <option value="">Select Assignment</option>
 <?php
  while($rs=mysqli_fetch_array($result)) {
    $tidf=$rs["tid"];
    $sql1="SELECT doc_name,id,date  FROM documents WHERE sub_name = '$sn' AND teacher_id='$tidf' AND options='Assignment' ";
   $result1 = mysqli_query($con,$sql1)or die('Error');
   while($rs=mysqli_fetch_array($result1)) {
?>
 <option value="<?php echo  $rs["id"]; ?>"><?php echo $rs["doc_name"].' given on '.$rs["date"]; ?></option>
<?php
}
}
?>
</body>
</html>
