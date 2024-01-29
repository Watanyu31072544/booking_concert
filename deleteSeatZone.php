<meta charset="utf-8">

<?php
    include('dbconnect.php');

    $s_id = $_GET['s_id'];

    if(isset($_GET['seat_zone'])){
    $sql = "DELETE FROM seat_zone WHERE s_id=".$_GET['seat_zone'];
    }
    $result = mysqli_query($db, $sql);

    if ($result) {
    echo "<script> alert('ลบข้อมูลของโซนที่นั่งเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='ManageSeatZone.php'; </script>";
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>