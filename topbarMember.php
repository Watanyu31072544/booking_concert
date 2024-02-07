<?php
if(!isset($_SESSION)){//เช็คข้อมูลมีค่ากำหนดไว้หรือไม่
    session_start();
}
require("dbconnect.php");
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="PageBookingConcert.php">หน้าแรกของ Member</a>
        <a class="navbar-brand" href="PageHistoryBookingConcert.php">ประวัติจองตั๋วคอนเสิร์ตของตัวเอง</a>
        <ul class="navbar-nav ml-auto">
        <?php
            if (!$_SESSION["m_id"]) {
            header("location:formLoginMember.php");
            } else {
            $sqlloginmember = "SELECT * FROM member WHERE m_id='" . $_SESSION["m_id"] . "'";
            $result = mysqli_query($db, $sqlloginmember);
            $member = mysqli_fetch_assoc($result);
        ?>
        <p style="color: black;"> สวัสดี <?php echo $member["m_fullname"];?></p>
        </ul>
        <?php  } ?>        
    </div>
</nav>