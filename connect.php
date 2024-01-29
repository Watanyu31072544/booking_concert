<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbName = "booking_concert";  // เปลี่ยนเป็นชื่อ DB ของนักศึกษาได้เองครับ

$db = new mysqli($host,$username,$pass,$dbName);

if( $db -> connect_errno > 0 ){
    die( $db -> connect_error );
	exit();          
}

if ( !$db -> set_charset("utf8") ) {
    die("utf8 : ". $db->error);
    exit();
}
?>