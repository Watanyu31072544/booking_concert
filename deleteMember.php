<meta charset="utf-8">

<?php
    include('dbconnect.php');
    //เช็ครหัส ID ของลูกค้า ว่าได้รับรหัส ID ของลูกค้าหรือยัง
    $m_id = $_GET['m_id'];
    //ถ้ารับค่ารหัส ID ของลูกค้า
    if(isset($_GET['member'])){
    $sql = "DELETE FROM member WHERE m_id=".$_GET['member'];//เมื่อเจอพบแล้ว ให้ Admin สามารถลบข้อมูลของลูกค้าออกจากระบบฐานข้อมูล
    }
    $result = mysqli_query($db, $sql);
    //ถ้าเจอ Admin สามารถลบข้อมูลของลูกค้าได้
    if ($result) {
    echo "<script> alert('ลบข้อมูลของสมาชิกเรียบร้อยแล้วครับ'); </script>";
    echo "<script> window.location='ManageMember.php'; </script>";//เมื่อลบข้อมูลของลูกค้าแล้ว ข้อความแจ้งเตือนขึ้นมา จากนั้นกลับมาหน้าจัดการข้อมูลของลูกค้าได้
    } else {
    echo "ไม่สามารถลบได้ หรือ มีข้อผิดพลาดเกิดขึ้น";
    }
    mysqli_close($db);
?>