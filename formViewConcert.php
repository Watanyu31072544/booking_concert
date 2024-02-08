<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ดูข้อมูลของคอนเสิร์ต</title>

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
                    <!-- เมื่อกดปุ่มมาหน้าที่ดูข้อมูลของคอนเสิร์ต รหัส ID ของคอนเสิร์ตจะต้องตรงกัน --> 
                    <?php
                        if(isset($_GET['concert'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                            $query = mysqli_query($db,$sql);
                            while($concert = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="container-md" id="website">
                        <!-- เมื่อกดปุ่มมาหน้าที่ดูข้อมูลของคอนเสิร์ต ให้ Admin ทำการดูข้อมูลของคอนเสิร์ต ไม่สามารถแก้ไขได้ ดูอย่างเดียวเท่านั้น-->
                        <h1 class="mt-3 text-black" align="center">ดูข้อมูลของคอนเสิร์ต</h1>
                        <form class="row g-4" method="post">                       
                        <div class="col-12">
                            <label for="inputFullName" class="form-label">ชื่อคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="name" style="color: black;" disabled value="<?php echo $concert['name']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">รายละเอียดของคอนเสิร์ต</label>
                            <textarea type="text" class="form-control" name="data" style="color: black;" disabled><?php echo $concert['data']; ?></textarea>
                        </div>
                        <div class="col-12">
                            <label for="inputUserName" class="form-label">สถานที่จัดคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="location" style="color: black;" disabled value="<?php echo $concert['location']; ?>">
                        </div>                        
                        <div class="col-12">
                            <label for="inputPhone" class="form-label">วันที่เริ่มแสดงของคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="date" style="color: black;" disabled value="<?php echo $concert['date']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputGender" class="form-label">เวลาเริ่มแสดงของคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="time" style="color: black;" disabled value="<?php echo $concert['time']; ?>">
                        </div>
                        </form>
                        <div class="my-3">
                            <a href="ManageConcert.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;กลับข้อมูลของคอนเสิร์ต</a> <!-- เมื่อดูข้อมูลของคอนเสิร์ต ให้ทำการกลับมาหน้าจัดการข้อมูลของคอนเสิร์ต -->         
                        </div>                     
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