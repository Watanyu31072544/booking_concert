<?php
require('pdf/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->AddFont('sarabun','','THSarabun.php');

$pdf->SetFont('sarabun','',20);
$pdf->Cell(0,10,'Create PHP to PDF',0,1,'L');
$pdf->Cell(0,10,iconv('utf-8','cp874','สวัสดีชาวโลก'),0,1,'C');
$pdf->Cell(0,10,iconv('utf-8','cp874','Test ฟอนต์ภาษาไทย'),0,1,'R');

$pdf->Output();

?>