<meta charset="utf-8">

<?php
    include('dbconnect.php');

    $ad_id = $_GET['ad_id'];

    if(isset($_GET['admin'])){
    $sql = "DELETE FROM admin WHERE ad_id=".$_GET['admin'];
    }
    $result = mysqli_query($db, $sql);

    if ($result) {
    echo "<script> alert('ลบข้อมูลของผู้ดูแลเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='ManageAdmin.php'; </script>";
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>