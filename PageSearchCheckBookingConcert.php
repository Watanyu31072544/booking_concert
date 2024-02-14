<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เช็คจำนวนที่นั่งของคอนเสิร์ต</title>

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
                    <div class="card-body">
                            <div class="row">
                            <?php
                                include('connect.php');
                                $booking=$_POST["booking"];
                                $sql = "select * from booking WHERE location LIKE '%$booking%' group by name asc";
                                if(!$result = $db -> query($sql)){
                                    die($db -> error);
                                }
                                $countResult = $result -> num_rows; //นับจำนวนแถวจากคำสั่ง $sql
                            ?>
                                <h1 class="h3 mb-0 text-color-800" id="website">เช็คจำนวนที่นั่งของคอนเสิร์ต
                                <button type="button" class="btn btn-sm btn-success" style="width: auto; height: auto; color: black;">
                                    <?php echo $countResult; ?> คอนเสิร์ต
                                </button>
                                <a href="PageCheckBookingConcert.php" class="btn btn-sm btn-danger" style="width: auto; height: auto; color: black;"><i class="fa-solid fa-arrow-left"></i>&nbsp;เช็คจำนวนที่นั่งของคอนเสิร์ต</a><!-- เมื่อค้นหาเสร็จแล้ว สามารถกดย้อนกลับหน้าจองตั๋วคอนเสิร์ต --><h1>
                            </div>
                            <?php
                                //ค้นหาข้อมูลสถานที่จัดคอนเสิร์ต
                                include('dbconnect.php');
                                $booking=$_POST["booking"];
                                $sql = "SELECT * FROM booking WHERE location LIKE '%$booking%' group BY name ASC";
                                $query = mysqli_query($db,$sql);
                                $count = mysqli_num_rows($query);
                                $order = 1;
                            ?>
                            <!-- ถ้าอยากจะกรอกข้อมูลอีกครั้ง สามารถกรอกสถานที่จัดคอนเสิร์ตอีกครั้งได้ -->
                            <form action="PageSearchCheckBookingConcert.php" class="form-group my-3" method="POST">
                            <div class="input-group" align="right">
                                <div class="form-outline col-12" data-mdb-input-init>
                                    <input type="search" id="search" class="form-control" name="booking" required style="color: black;" placeholder="กรุณากรอกชื่อคอนเสิร์ตด้วยครับ"/>
                                    <label class="form-label" for="form1"></label>
                                </div>
                            </div>                    
                            </form>
                            <!-- ถ้าเจอข้อมูลของสถานที่จัดคอนเสิร์ต -->
                            <?php if($count > 0){?>
                            <div class="table-responsive">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <table class="table table-striped">
                                <thead class="table-success text-color" align="center";>
                                    <tr>
                                    <th scope="col" width="2%">ลำดับ</th>
                                    <th scope="col">ชื่อคอนเสิร์ต</th>
                                    <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                                    <th scope="col">วันและเวลาเริ่มคอนเสิร์ต</th>
                                    <th scope="col">เช็คจำนวนที่นั่ง</th>
                                    </tr>
                                </thead>
                                <tbody class="text-color" align="center";>
                                <?php
                                    while($concert = mysqli_fetch_assoc($query)){?>
                                    <tr>
                                    <td><?php echo $order++; ?></td>
                                    <td><?php echo $concert['name']; ?></td>
                                    <td><?php echo $concert['location']; ?></td>
                                    <td><?php echo $concert['date']; ?> / <?php echo $concert['time']; ?></td>                      
                                    <td><a href="PageCountBookingConcertSeatZone.php?booking=<?php echo $concert['booking_id']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-chair"></i> เช็คจำนวนที่นั่ง</a></td> <!-- หน้าเช็คจำนวนที่นั่งของคอนเสิร์ต ให้ Admin สามารถดูจำนวนที่นั่งได้ -->
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                            </div>
                            <?php }else{?>
                                <div class="alert alert-danger">
                                    <b>ไม่ได้อยู่ในฐานข้อมูลการจองตั๋วของคอนเสิร์ต ต้องติดตามผ่านสื่อออนไลน์ด้วยครับ ขออภัยด้วยครับ</b><!-- ในกรณีที่ค้นหาอย่างอื่นหรือยังไม่มีสถานที่จัดคอนเสิร์ต จะไม่สามารถหาเจอได้ เนื่องจากยังไม่มีจัดคอนเสิร์ตที่ยังไม่มีเพิ่มสถานที่จัดคอนเสิร์ต -->
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