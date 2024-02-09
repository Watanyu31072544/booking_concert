<?php
echo "<meta charset='utf-8'>";
function ThDate()
{
//วันภาษาไทย
$ThDay = array ( "อ.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส." );
//เดือนภาษาไทย
$ThMonth = array ( "ม.ค", "ก.พ", "มี.ค", "เม.ย","พ.ค", "มิ.ย", "ก.ค", "ส.ค","ก.ย", "ต.ค", "พ.ย", "ธ.ค");

//กำหนดคุณสมบัติ
$week = date( "w" ); // ค่าวันในสัปดาห์ (0-6)
$months = date( "m" )-1; // ค่าเดือน (1-12)
$day = date( "d" ); // ค่าวันที่(1-31)
$years = date( "Y" )+543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

return "$day  
		$ThMonth[$months] 
		$years";
}

?>
<a class="navbar-brand" style="color: black;"><?php echo ThDate(); ?></a>