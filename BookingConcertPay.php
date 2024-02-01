<?php
require('pdf/fpdf.php');

$pdf = new FPDF('P','mm','A4');

if(isset($_GET['booking'])){
include('connect.php');
$sql = "SELECT distinct * FROM booking where booking_id=".$_GET['booking'];

$query = mysqli_query($db,$sql);

$booking = $query -> fetch_assoc();

$pdf->AddPage();
$pdf->AddFont('sarabun','','THSarabun.php');

$pdf->SetFont('sarabun','',20);
$pdf->Cell(0,10,iconv('utf-8','cp874','ใบชำระเงินของผู้จองคอนเสิร์ต'),0,1,'C');
$pdf->Cell(0,15,iconv('utf-8','cp874','ชื่อ-นามสกุล                   '. $booking['m_fullname']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','อีเมล์                            '. $booking['m_email']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','เบอร์โทรศัพท์                  '. $booking['m_phone']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','เพศ                              '. $booking['m_gender']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','วันเดือนปีเกิด                  '. $booking['birth_date']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','อายุ                              '. $booking['m_age']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','อาชีพ                            '. $booking['m_occupation']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','ที่อยู่                             '. $booking['address']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','ชื่อคอนเสิร์ต                    '. $booking['name']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','ชื่อสถานที่จัดคอนเสิร์ต        '. $booking['location']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','วันที่เริ่มแสดงคอนเสิร์ต       '. $booking['date']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','เวลาที่เริ่มแสดงคอนเสิร์ต     '. $booking['time']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','โซนที่นั่ง                         '. $booking['s_zone']),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','ราคาโซนที่นั่ง                   '. $booking['s_price'].'    บาท'),0,1,'L');
$pdf->Cell(0,15,iconv('utf-8','cp874','สแกนจ่าย                '),0,1,'L');
$pdf->Image('receipt_20240126161657.png',63,235,50,0,'','');

$pdf->Output('F',''.$booking['booking_id'].'.'.$booking['m_fullname'].' - '.$booking['name'].'.pdf');
}
?>