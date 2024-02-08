<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>แก้ไขข้อมูลของคอนเสิร์ต</title>

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
                    <!-- เมื่อกดปุ่มมาหน้าที่แก้ไขข้อมูลของคอนเสิร์ต รหัส ID ของคอนเสิร์ตจะต้องตรงกัน -->
                    <?php
                        if(isset($_GET['concert'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                            $query = mysqli_query($db,$sql);
                            while($concert = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="container-md" id="website">
                        <!-- เมื่อกดปุ่มมาหน้าที่แก้ไขข้อมูลของคอนเสิร์ต ให้ Admin ทำการแก้ไขข้อมูลของคอนเสิร์ต -->
                        <h1 class="mt-3" align="center">แก้ไขข้อมูลของคอนเสิร์ต</h1>
                        <form class="row g-4" method="post" action="updateConcert.php?concert=<?php echo $concert['id']; ?>"> <!-- ส่งค่ารหัส ID ของคอนเสิร์ต เมื่อทำการแก้ไขข้อมูลของคอนเสิร์ตได้ -->
                        <input type="hidden" class="form-control" name="id" disabled value="<?php echo $concert['id']; ?>"> <!-- ค่ารหัส ID ของคอนเสิร์ต -->
                        <div class="col-12">
                            <label for="inputFullName" class="form-label">ชื่อคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="name" required style="color: black;" value="<?php echo $concert['name']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">รายละเอียดของคอนเสิร์ต</label>
                            <textarea class="form-control" name="data" style="color: black;" required><?php echo $concert['data']; ?></textarea>
                        </div>
                        <div class="col-12">
                            <label for="inputUserName" class="form-label">สถานที่จัดคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="location" style="color: black;" required value="<?php echo $concert['location']; ?>">
                        </div>                        
                        <div class="col-12">
                            <label for="inputPhone" class="form-label">วันที่เริ่มแสดงของคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="date" style="color: black;" required value="<?php echo $concert['date']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputGender" class="form-label">เวลาเริ่มแสดงของคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="time" style="color: black;" required value="<?php echo $concert['time']; ?>">
                        </div> 
                        <div class="row my-2 mx-0">
                            <div class="col-auto">
                                <input type="submit" value="ยืนยันแก้ไขข้อมูลของคอนเสิร์ต" class="btn btn-success"> <!-- เมื่อทำการแก้ไขข้อมูลของคอนเสิร์ต สามารถกดยืนยันแก้ไขข้อมูลของคอนเสิร์ต -->
                            </div>
                        </div>
                        <div class="row my-2 mx-0">
                            <div class="col-auto">
                                <a href="ManageConcert.php" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิกแก้ไข</a> <!-- ไม่อยากแก้ไขข้อมูลของคอนเสิร์ต ให้ทำการกลับมาหน้าจัดการข้อมูลของคอนเสิร์ต -->
                            </div>
                        </div>
                        </form>                    
                    </div>
                <!-- /.container-fluid -->
                    <?php
                        }
                    }
                    ?>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
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