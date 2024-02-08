<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>แก้ไขข้อมูลของลูกค้า</title>

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
                    <!-- เมื่อกดปุ่มมาหน้าที่แก้ไขข้อมูลของโซนที่นั่ง รหัส ID ของโซนที่นั่งจะต้องตรงกัน -->
                    <?php      
                        if(isset($_GET['seat_zone'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM seat_zone where s_id=".$_GET['seat_zone'];
                            $query = mysqli_query($db,$sql);
                            while($seat_zone = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="container-md" id="website">
                        <!-- เมื่อกดปุ่มมาหน้าที่แก้ไขข้อมูลของโซนที่นั่ง ให้ Admin ทำการแก้ไขข้อมูลของโซนที่นั่ง -->
                        <h1 class="mt-3" align="center">แก้ไขพื้นที่ของโซนที่นั่ง</h1>
                        <form class="row g-4" method="post" action="updateSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>"> <!-- ส่งค่ารหัส ID ของโซนที่นั่ง เมื่อทำการแก้ไขข้อมูลของโซนที่นั่งได้ -->
                        <input type="hidden" class="form-control" name="s_id" disabled value="<?php echo $seat_zone['s_id']; ?>"> 
                        <div class="col-12">
                            <label for="inputFullName" class="form-label">ชื่อโซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_zone" style="color: black;"value="<?php echo $seat_zone['s_zone']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">ราคาโซนที่นั่ง (บาท)</label>
                            <input type="text" class="form-control" name="s_price" style="color: black;" value="<?php echo $seat_zone['s_price']; ?>">
                        </div>
                        <div class="row my-2 mx-0">
                            <div class="col-auto">
                                <input type="submit" value="ยืนยันแก้ไขพื้นที่ของโซนที่นั่ง" class="btn btn-success"> <!-- เมื่อทำการแก้ไขข้อมูลของโซนที่นั่ง สามารถกดยืนยันแก้ไขข้อมูลของโซนที่นั่ง -->
                            </div>
                        </div>
                        <div class="row my-2 mx-0">
                            <div class="col-auto">
                                <a href="ManageSeatZone.php" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิกแก้ไขโซนที่นั่ง</a> <!-- ไม่อยากแก้ไขข้อมูลของโซนที่นั่ง ให้ทำการกลับมาหน้าจัดการข้อมูลของโซนที่นั่ง -->
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