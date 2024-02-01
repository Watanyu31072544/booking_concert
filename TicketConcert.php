<?php
require('pdf/fpdf.php');

$pdf = new FPDF('L','mm',array(52,74));

if(isset($_GET['booking'])){
include('connect.php');
$sql = "SELECT * FROM booking where booking_id=".$_GET['booking'];
$query = mysqli_query($db,$sql);

$booking = $query -> fetch_assoc();

$pdf->AddPage();
$pdf->AddFont('sarabun','','THSarabun.php');

$pdf->SetFont('sarabun','',10);
$pdf->Cell(0,5,iconv('utf-8','cp874', $booking['name']),0,1,'C');
$pdf->Cell(0,5,iconv('utf-8','cp874','สถานที่จัดคอนเสิร์ตคอนเสิร์ต       ' .$booking['location']),0,1,'l');
$pdf->Cell(0,5,iconv('utf-8','cp874','โซนที่นั่ง                                 ' .$booking['s_zone']),0,1,'l');

$pdf->Output('I','TicketConcert.pdf');
}
?>