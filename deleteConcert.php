<meta charset="utf-8">

<?php
    include('dbconnect.php');

    $id = $_GET['id'];

    if(isset($_GET['concert'])){
    $sql = "DELETE FROM concert WHERE id=".$_GET['concert'];
    }
    $result = mysqli_query($db, $sql);

    if ($result) {
    echo "<script> alert('ลบข้อมูลของคอนเสิร์ตเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='ManageConcert.php'; </script>";
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>