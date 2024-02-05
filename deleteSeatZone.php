<meta charset="utf-8">

<?php
    include('dbconnect.php');
    //เช็ครหัส ID ของโซนที่นั่ง ว่าได้รับรหัส ID ของโซนที่นั่งหรือยัง
    $s_id = $_GET['s_id'];
    //ถ้ารับค่ารหัส ID ของโซนที่นั่ง
    if(isset($_GET['seat_zone'])){
    $sql = "DELETE FROM seat_zone WHERE s_id=".$_GET['seat_zone'];//เมื่อเจอพบแล้ว ให้ Admin สามารถลบข้อมูลของโซนที่นั่งออกจากระบบฐานข้อมูล
    }
    $result = mysqli_query($db, $sql);
    //ถ้าเจอ Admin สามารถลบข้อมูลของโซนที่นั่งได้
    if ($result) {
    echo "<script> alert('ลบข้อมูลของโซนที่นั่งเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='ManageSeatZone.php'; </script>";//เมื่อลบข้อมูลของโซนที่นั่งแล้ว ข้อความแจ้งเตือนขึ้นมา จากนั้นกลับมาหน้าจัดการข้อมูลของโซนที่นั่งได้
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>