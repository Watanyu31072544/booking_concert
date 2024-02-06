<?php
require("dbconnect.php");
?>
<!-- Navbar ของจัดการข้อมูลของคอนเสิร์ต สำหรับ ผู้ดูแล -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="ManageConcert.php">    
        <div class="sidebar-brand-text">Manage Booking Concert</sup></div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <!-- หน้าจัดการข้อมูลของคอนเสิร์ต สามารถเข้ามาหน้าจัดการเพิ่ม,แก้ไข,ดูข้อมูล และลบข้อมูลของคอนเสิร์ต -->
        <a class="nav-link" href="ManageConcert.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการข้อมูลของคอนเสิร์ต</span>
        </a>
    </li>
    <li class="nav-item active">
        <!-- หน้าจัดการข้อมูลของลูกค้า สามารถเข้ามาหน้า เพิ่ม,แก้ไข,ดูข้อมูล และลบข้อมูลของลูกค้า -->
        <a class="nav-link" href="ManageMember.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการข้อมูลของลูกค้า</span>
        </a>
    </li>
    <li class="nav-item active">
        <!-- หน้าจัดการข้อมูลของผู้ดูแล สามารถเข้ามาหน้าจัดการเพิ่ม,แก้ไข,ดูข้อมูล และลบข้อมูลของผู้ดูแล -->
        <a class="nav-link" href="ManageAdmin.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการข้อมูลของผู้ดูแล</span>
        </a>
    </li>
    <li class="nav-item active">
        <!-- หน้าจัดการพื้นที่ของโซนที่นั่ง สามารถเข้ามาหน้าจัดการเพิ่ม,แก้ไข,ดูข้อมูล และลบข้อมูลของโซนที่นั่ง -->
        <a class="nav-link" href="ManageSeatZone.php">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>จัดการพื้นที่ของโซนที่นั่ง</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <!-- หน้าประวัติจองตั๋วคอนเสิร์ตของลูกค้า สามารถเข้ามาหน้าจัดการเพิ่ม,แก้ไข,ดูข้อมูล และลบข้อมูลของคอนเสิร์ต -->
        <a class="nav-link" href="PageHistoryBookingConcertOfMember.php">
            <i class="fa-regular fa-clock"></i>
            <span>ประวัติจองตั๋วคอนเสิร์ตของลูกค้า</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <!-- หน้าประวัติจองตั๋วคอนเสิร์ตของลูกค้า สามารถเข้ามาหน้าจัดการเพิ่ม,แก้ไข,ดูข้อมูล และลบข้อมูลของคอนเสิร์ต -->
        <a class="nav-link" href="ProFileAdmin.php">
            <i class="fa-solid fa-user"></i>
            <span>โปรไฟล์ของผู้ดูแล</span>
        </a>
    </li>
    <li class="nav-item active">
        <!-- เมื่อใช้งานเสร็จแล้ว ผู้ดูแลสามารถออกจากระบบได้ -->
        <a class="nav-link" href="formLoginAdmin.php">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span>ออกจากระบบ</span>
        </a>
    </li>
</ul>