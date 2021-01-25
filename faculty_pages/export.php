<?php
//include connection file 
include("config.php");
session_start();
if($_SESSION['xy']=='')
{
   echo "<script>window.location.href='faculty_login.php'</script>";
}
include_once('fpdf/fpdf.php');

if(@$_GET['tid']) 
  {
    $tid=$_GET['tid'];
  }


class PDF extends FPDF
{
// Page header
function Header()
{

    $this->SetFont('Arial','B',13);

    // Title
    $this->Cell(80,10,'Test Result',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$result = mysqli_query($con, "SELECT s.rollno , s.name , h.score FROM history AS h INNER JOIN login_student AS s ON h.email=s.email WHERE h.quizid='$tid' ORDER BY s.rollno ") or die("database error:". mysqli_error($con));


$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);


$pdf->Cell(40,12,"RollNo.",1);
$pdf->Cell(40,12,"Name",1);
$pdf->Cell(40,12,"Score",1);


foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>