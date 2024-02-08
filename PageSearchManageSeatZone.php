<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>จัดการข้อมูลของลูกค้า</title>

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
    <div id="wrapper" style="width: auto; height: auto;">
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
                        include('dbconnect.php');
                        $seat_zone=$_POST["seat_zone"];
                        $sql = "SELECT * FROM seat_zone WHERE s_zone LIKE '%$seat_zone%' ORDER BY s_zone ASC";
                        $query = mysqli_query($db,$sql);
                        $count = mysqli_num_rows($query);
                        $order = 1;
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">จัดการพื้นที่ของโซนที่นั่ง
                            <a href="ManageSeatZone.php" class="btn btn-sm btn-danger" style="width: auto; height: auto; color: black;"><i class="fa-solid fa-arrow-left"></i>&nbsp;จัดการพื้นที่ของโซนที่นั่ง</a> <!-- เมื่อทำการค้นหาพื้นที่ของโซนที่นั่งแล้ว ให้กลับมาหน้าจัดการพื้นที่ของโซนที่นั่ง -->
                        </h1>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <form action="PageSearchManageSeatZone.php" class="form-group my-3" method="POST">
                        <div class="input-group" align="right">
                            <div class="form-outline col-12" data-mdb-input-init>
                                <input type="search" id="search" class="form-control" name="seat_zone" required style="color: black;" placeholder="กรุณากรอกชื่อโซนของโซนที่นั่ง"/>
                                <label class="form-label" for="form1"></label>
                            </div>
                        </div>
                        </form>
                        <?php if($count > 0){?>
                        <table class="table table-striped mt-4">
                            <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของโซนที่นั่ง -->
                            <thead class="table table-success text-color">
                                <tr>
                                <th scope="col" width="5%">ลำดับ</th>
                                <th scope="col" width="15%">ชื่อโซนที่นั่ง</th>
                                <th scope="col" width="20%">แก้ไขข้อมูลของลูกค้า</th>
                                <th scope="col" width="20%">ดูข้อมูลของลูกค้า</th>
                                <th scope="col" width="20%">ลบข้อมูลของลูกค้า</th>
                                </tr>
                            </thead>
                            <tbody class="text-color">
                                <?php while($seat_zone = mysqli_fetch_assoc($query)){?>
                                <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของโซนที่นั่ง -->
                                <td><?php echo $seat_zone['s_id']; ?></td>
                                <td><?php echo $seat_zone['s_zone']; ?></td>
                                <td><a href="formEditSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>"class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> แก้ไขพื้นที่ของโซนที่นั่ง</a></td> <!-- หน้าแก้ไขข้อมูลของโซนที่นั่ง -->
                                <td><a href="formViewSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของโซนที่นั่ง</a></td> <!-- หน้าดูข้อมูลของโซนที่นั่ง -->
                                <td><a href="deleteSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>" onclick="return confirm('ลบข้อมูล <?php echo $seat_zone['s_zone']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> ลบข้อมูลของโซนที่นั่ง</a></td>	<!-- ลบข้อมูลของโซนที่นั่ง -->
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php }else{?>
                            <div class="alert alert-danger">
                                <b>ไม่มีอยู่ในฐานข้อมูล เนื่องจากยังไม่มีโซนที่นั่ง เราไม่สามารถเช็คข้อมูลของโซนที่นั่งได้</b> <!-- ในกรณีที่ค้นหาอย่างอื่นหรือยังไม่มีเพิ่มพื้นที่โซนที่นั่งเข้ามา จะไม่สามารถหาเจอได้ เนื่องจากยังไม่มีเพิ่มพื้นที่โซนที่นั่งเข้ามา -->
                            </div>
                            <?php }?>   
                        </div>
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