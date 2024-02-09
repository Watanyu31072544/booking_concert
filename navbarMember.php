<?php
require("dbconnect.php");
?>
<!-- Navbar ของระบบจองตั๋วคอนเสิร์ต สำหรับ ลูกค้า -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="PageBookingConcert.php">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-ticket"></i>
        </div>
    <div class="sidebar-brand-text">Booking Concert</div>
    </a>
    <hr class="sidebar-divider my-0">          
    <li class="nav-item active">
        <!-- หน้าดูข้อมูลของคอนเสิร์ต ลูกค้าสามารถเข้ามาดูข้อมูลของคอนเสิร์ตได้ -->
        <a class="nav-link" href="PageDataConcert.php">
            <i class="fa-solid fa-info"></i>
            <span>ข้อมูลคอนเสิร์ต</span>
        </a>
    </li>
    <li class="nav-item active">
        <!-- หน้าจองตั๋วคอนเสิร์ต ลูกค้าสามารถเข้ามาจองที่นั่งของคอนเสิร์ตได้ -->
        <a class="nav-link" href="PageBookingConcert.php">
            <i class="fa-solid fa-ticket"></i>
            <span>จองตั๋วคอนเสิร์ต</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <!-- หน้าประวัติจองตั๋วคอนเสิร์ต ลูกค้าสามารถเข้ามาดูประวัติจองตั๋วคอนเสิร์ตได้ -->
        <a class="nav-link" href="PageHistoryBookingConcert.php">
            <i class="fa-regular fa-clock"></i>
            <span>ประวัติจองตั๋วคอนเสิร์ต</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <!-- หน้าโปรไฟล์ของลูกค้า ลูกค้าสามารถเข้ามาดูโปรไฟล์ของลูกค้าเองได้ -->
        <a class="nav-link" href="ProFileMember.php">
            <i class="fa-solid fa-user"></i>
            <span>โปรไฟล์ของลูกค้า</span>
        </a>
    </li>
    <li class="nav-item active">
        <!-- เมื่อใช้งานเสร็จแล้ว ลูกค้าสามารถออกจากระบบได้ -->
        <a class="nav-link" href="formLoginMember.php">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span>ออกจากระบบ</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>