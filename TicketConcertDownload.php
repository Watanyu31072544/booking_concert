<?php
require('pdf/fpdf.php');

$pdf = new FPDF('L','mm',array(52,74));

if(isset($_GET['booking'])){
include('connect.php');
$sql = "SELECT * FROM booking where booking_id=".$_GET['booking'];//ข้อมูลที่ได้จากการจองที่นั่งของคอนเสิร์ตมาเก็บบัตรคอนเสิร์ต โดยที่ไม่มีข้อมูลว่างเปล่า ให้ Admin เป็นคนทำการออกบัตรให้กับลูกค้า
$query = mysqli_query($db,$sql);

$booking = $query -> fetch_assoc();

$pdf->AddPage();
$pdf->AddFont('sarabun','','THSarabun.php');
//บัตรที่นั่งของคอนเสิร์ต จะแสดงเป็นชื่อคอนเสิร์ต,สถานที่จัดคอนเสิร์ต
$pdf->SetFont('sarabun','',10);
$pdf->Cell(0,5,iconv('utf-8','cp874', $booking['name']),0,1,'C');
$pdf->Cell(0,5,iconv('utf-8','cp874','สถานที่จัดคอนเสิร์ต       ' .$booking['location']),0,1,'l');
$pdf->Cell(0,5,iconv('utf-8','cp874','โซนที่นั่ง                                 ' .$booking['s_zone']),0,1,'l');

$pdf->Output('F','booking_concert_pdf/ticket/'.$booking['m_fullname'].' - '.$booking['name'].' - '.$booking['location'].' - '.$booking['s_zone'].'.pdf');
}
?>