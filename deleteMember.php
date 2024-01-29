<meta charset="utf-8">

<?php
    include('dbconnect.php');

    $m_id = $_GET['m_id'];

    if(isset($_GET['member'])){
    $sql = "DELETE FROM member WHERE m_id=".$_GET['member'];
    }
    $result = mysqli_query($db, $sql);

    if ($result) {
    echo "<script> alert('ลบข้อมูลของสมาชิกเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='ManageMember.php'; </script>";
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>