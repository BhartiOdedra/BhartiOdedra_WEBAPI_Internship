<?php

require('fpdf.php');
include('config.php');

$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(2,2,2);
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,6,'Receipt Report',0,1,'C');
$pdf->Ln(1);

$pdf->SetFont('Arial','B',4.5);

$pdf->Cell(14,4,'RNO',1);
$pdf->Cell(18,4,'DATE',1);
$pdf->Cell(22,4,'STUD ID',1);
$pdf->Cell(50,4,'STUDENT NAME',1);
$pdf->Cell(10,4,'CODE',1);
$pdf->Cell(58,4,'COURSE',1);
$pdf->Cell(14,4,'AMT',1);
$pdf->Cell(20,4,'PAY',1);
$pdf->Ln();


$sql = "SELECT * FROM receipt ORDER BY amt DESC";
$result = mysqli_query($conn,$sql);

$pdf->SetFont('Arial','',3.5);

while($row = mysqli_fetch_assoc($result))
{
    $pdf->Cell(14,3.5,$row['rno'],1);
    $pdf->Cell(18,3.5,date('d/m/y',strtotime($row['rdate'])),1);
    $pdf->Cell(22,3.5,$row['stud_id'],1);
    $pdf->Cell(50,3.5,substr($row['stud_nm'],0,28),1);
    $pdf->Cell(10,3.5,$row['ccode'],1);
    $pdf->Cell(58,3.5,substr($row['cname'],0,35),1);
    $pdf->Cell(14,3.5,$row['amt'],1,0,'R');
    $pdf->Cell(20,3.5,substr($row['pay_method'],0,12),1);
    $pdf->Ln();
}

$pdf->Output();

?>