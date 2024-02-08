<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>โปรไฟล์ของลูกค้า</title>

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
        include('navbarMember.php');
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content" style="background-color: pink;">
            <?php
            include('topbarMember.php');
            ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <?php
                        //แสดงโปรไฟล์ของผู้จอง
                        require('dbconnect.php');
                        $sqlprofilemember = "SELECT * FROM member WHERE m_id='" . $_SESSION["m_id"] . "'";
                        $result = mysqli_query($db, $sqlprofilemember);
                        $member = mysqli_fetch_assoc($result);
                    ?>
                    <div class="container-md" id="website">
                        <h1 class="mt-3" align="center">โปรไฟล์ของลูกค้า</h1>
                        <!-- หน้าโปรไฟล์ของผู้จอง -->
                        <form class="row g-4" method="post" action="updateProFileMember.php?member=<?php echo $member['m_id']; ?>">
                        <input type="hidden" class="form-control" name="m_id" disabled value="<?php echo $member['m_id']; ?>">
                        <div class="col-12">
                            <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                            <input type="text" class="form-control" name="m_fullname" style="color: black;" value="<?php echo $member['m_fullname']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">ชื่อผู้ใช้ของลูกค้า</label>
                            <input type="text" class="form-control" name="m_username" style="color: black;" value="<?php echo $member['m_username']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">อีเมล์</label>
                            <input type="text" class="form-control" name="m_email" style="color: black;" value="<?php echo $member['m_email']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="m_phone" style="color: black;" value="<?php echo $member['m_phone']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputGender" class="form-label">เพศ</label>
                            <input type="text" class="form-control" name="m_gender" style="color: black;" value="<?php echo $member['m_gender']; ?>">
                        </div>           
                        <div class="col-12">
                            <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                            <input type="date" name="birth_date" class="form-control" style="color: black;" value="<?php echo $member['birth_date']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAge" class="form-label">อายุ</label>
                            <input type="text" class="form-control" name="m_age" style="color: black;" value="<?php echo $member['m_age']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputOccupation" class="form-label">อาชีพ</label>
                            <input type="text" class="form-control" name="m_occupation" style="color: black;" value="<?php echo $member['m_occupation']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" name="address" style="color: black;" value="<?php echo $member['address']; ?>">
                        </div>
                        <div class="row my-2 mx-0">
                            <div class="col-auto">
                            <input type="submit" value="ยืนยันแก้ไขข้อมูลของสมาชิก" class="btn btn-success" style="color: black;"> <!-- เมื่อลูกค้าทำการแก้ไขโปรไฟล์ของตัวเองแล้ว สามารถบันทึกแก้ไขข้อมูลได้ -->
                            </div>
                        </div>
                        <div class="row my-2 mx-0">
                            <div class="col-auto">
                            <a href="PageBookingConcert.php" class="btn btn-danger" style="color: black;"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิกแก้ไข</a> <!-- ในกรณีไม่อยากแก้ไขโปรไฟล์ของผู้จอง ให้กลับมาหน้าระบบจองตั๋วคอนเสิร์ต -->
                            </div>
                        </div>
                        </div>
                        </form>
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