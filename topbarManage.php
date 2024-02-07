<?php
if(!isset($_SESSION)){
    session_start();
}
require("dbconnect.php");
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="ManageConcert.php">หน้าแรกของ Manage</a>
        <a class="navbar-brand" href="PageHistoryBookingConcertOfMember.php">ประวัติจองตั๋วคอนเสิร์ตของลูกค้า</a>
        <ul class="navbar-nav ml-auto">
        <?php
            if (!$_SESSION["ad_id"]) {
            header("location:formLoginAdmin.php");
            } else {
            $sqlloginmanage = "SELECT * FROM admin WHERE ad_id='" . $_SESSION["ad_id"] . "'";
            $result = mysqli_query($db, $sqlloginmanage);
            $manage = mysqli_fetch_assoc($result);
        ?>
        <p style="color: black;"> สวัสดี <?php echo $manage["ad_username"];?></p>
        </ul>
        <?php  } ?>
    </div>
</nav>