<?php
require("dbconnect.php");
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="PageBookingConcert.php">        
        <div class="sidebar-brand-text">Booking Concert</div>
    </a>
    <hr class="sidebar-divider my-0">          
    <li class="nav-item active">
        <a class="nav-link" href="PageDataConcert.php">
            <i class="fa-solid fa-info"></i>
            <span>ข้อมูลคอนเสิร์ต</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="PageBookingConcert.php">
            <i class="fa-solid fa-ticket"></i>
            <span>จองตั๋วคอนเสิร์ต</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="PageHistoryBookingConcert.php">
            <i class="fa-regular fa-clock"></i>
            <span>ประวัติจองตั๋วคอนเสิร์ต</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="ProFileMember.php">
            <i class="fa-solid fa-user"></i>
            <span>โปรไฟล์</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="formLoginMember.php">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span>ออกจากระบบ</span>
        </a>
    </li>
</ul>