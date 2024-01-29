<meta charset="utf-8">

<?php
    include('dbconnect.php');

    $booking_id = $_GET['booking_id'];

    if(isset($_GET['booking'])){
    $sql = "DELETE FROM booking WHERE booking_id=".$_GET['booking'];
    }
    $result = mysqli_query($db, $sql);

    if ($result) {
    echo "<script> alert('ยกเลิกการจองของโซนที่นั่งเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='PageHistoryBookingConcert.php'; </script>";
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>