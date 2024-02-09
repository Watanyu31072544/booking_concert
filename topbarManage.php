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
        </form>
        <?php
        include("dateToday.php");
        ?>
        <ul class="navbar-nav ml-auto">
        <?php
            if (!$_SESSION["ad_id"]) {
            header("location:formLoginAdmin.php");
            } else {
            $sqlloginmanage = "SELECT * FROM admin WHERE ad_id='" . $_SESSION["ad_id"] . "'";
            $result = mysqli_query($db, $sqlloginmanage);
            $manage = mysqli_fetch_assoc($result);
        ?>
        <a class="navbar-brand" style="color: black;"> สวัสดี <?php echo $manage["ad_username"];?></a>
        </ul>
        <?php  } ?>    
</nav>