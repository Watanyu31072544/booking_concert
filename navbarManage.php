<?php
require("dbconnect.php");
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="ManageConcert.php">    
        <div class="sidebar-brand-text">Manage Booking Concert</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="ManageConcert.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการข้อมูลของคอนเสิร์ต</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="ManageMember.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการข้อมูลของลูกค้า</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="ManageAdmin.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการข้อมูลของผู้ดูแล</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="ManageSeatZone.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการพื้นที่ของโซนที่นั่ง</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="PageHistoryBookingConcertOfMember.php">
            <i class="fa-regular fa-clock"></i>
            <span>ประวัติจองตั๋วคอนเสิร์ตของลูกค้า</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="formLoginAdmin.php">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span>ออกจากระบบ</span>
        </a>
    </li>
</ul>