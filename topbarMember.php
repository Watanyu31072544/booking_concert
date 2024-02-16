<?php
if(!isset($_SESSION)){//เช็คข้อมูลมีค่ากำหนดไว้หรือไม่
    session_start();
}
require("dbconnect.php");
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <form class="form-inline">
            <a id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3" herf="#">
                <i class="fa fa-bars"></i>
            </a>
        </form> <!-- สามารถเปิดปิด -->
        <?php
        //include("dateToday.php");
        ?>
        <ul class="navbar-nav ml-auto">
        <?php
            if (!$_SESSION["m_id"]) {
            header("location:formLoginMember.php");
            } else {
            $sqlloginmember = "SELECT * FROM member WHERE m_id='" . $_SESSION["m_id"] . "'";
            $result = mysqli_query($db, $sqlloginmember);
            $member = mysqli_fetch_assoc($result);
        ?>
        <a class="navbar-brand" style="color: black;">สวัสดี <?php echo $member["m_username"];?></a>
        </ul>
        <?php  } ?>            
</nav>