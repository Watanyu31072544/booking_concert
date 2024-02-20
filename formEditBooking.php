<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เช็คโซนที่นั่ง</title>

    <!-- Custom fonts for this template-->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php
        include('navbarManage.php');
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background-color: #B5DE0C;">
                <?php
                include('topbarManage.php');
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                        <?php
                            //แสดงรหัส ID ของโซนที่นั่ง
                            if(isset($_GET['booking'])){
                                require_once 'connect.php';
                                $sql = "SELECT * FROM booking where booking_id=".$_GET['booking'];
                                $query = mysqli_query($db,$sql);
                                while($booking = mysqli_fetch_assoc($query)){
                        ?>
                        <!-- แสดงชื่อโซนที่นั่ง -->
                        <h1 align="center" style="color: black;">เปลี่ยนโซนที่นั่ง</h1>
                        <h1 align="center" style="color: black;"><?php echo $booking['m_fullname']; ?> - <?php echo $booking['name']; ?></h1>
                        <div class="container-md" id="website">
                            <!-- แสดงชื่อผู้จองตั๋วคอนเสิร์ต -->    
                            <form class="row g-4" method="post" action="updateBooking.php?booking=<?php echo $booking['booking_id']; ?>">
                            <div class="col-6">
                                <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                                <input type="text" class="form-control" name="m_fullname" style="color: black;" value="<?php echo $booking['m_fullname']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputEmail" class="form-label">อีเมล์</label>
                                <input type="text" class="form-control" name="m_email" style="color: black;" value="<?php echo $booking['m_email']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="m_phone" style="color: black;" value="<?php echo $booking['m_phone']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputGender" class="form-label">เพศ</label>
                                <input type="text" class="form-control" name="m_gender" style="color: black;" value="<?php echo $booking['m_gender']; ?>">
                            </div>           
                            <div class="col-6">
                                <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                                <input type="date" name="birth_date" class="form-control" style="color: black;" value="<?php echo $booking['birth_date']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAge" class="form-label">อายุ</label>
                                <input type="text" class="form-control" name="m_age" style="color: black;" value="<?php echo $booking['m_age']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputOccupation" class="form-label">อาชีพ</label>
                                <input type="text" class="form-control" name="m_occupation" style="color: black;" value="<?php echo $booking['m_occupation']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" name="address" style="color: black;" value="<?php echo $booking['address']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">ชื่อคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="name" style="color: black;" value="<?php echo $booking['name']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">ชื่อสถานที่จัดคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="location" style="color: black;" value="<?php echo $booking['location']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">วันที่เริ่มแสดงคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="date" style="color: black;" value="<?php echo $booking['date']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">เวลาที่เริ่มแสดงคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="time" style="color: black;" value="<?php echo $booking['time']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">โซนที่นั่ง</label>
                                <input type="text" class="form-control" name="s_zone" style="color: black;" value="<?php echo $booking['s_zone']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ราคาโซนที่นั่ง</label>
                                <input type="text" class="form-control" name="s_price" style="color: black;" value="<?php echo $booking['s_price']; ?>">
                            </div>
                            <?php }}?>
                                <div class="row my-2 mx-0">
                                    <div class="col-auto">
                                    <input type="submit" value="ยืนยันเปลี่ยนโซนที่นั่ง" class="btn btn-success">
                                    </div> <!-- ถ้าเลือกที่นั่งได้แล้ว กดยืนยันจองที่นั่งของคอนเสิร์ตได้ -->
                                </div>
                                    
                            </form>   
                        </div>                                         
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>