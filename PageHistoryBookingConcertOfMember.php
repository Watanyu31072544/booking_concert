<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ประวัติจองตั๋วคอนเสิร์ตของลูกค้า</title>

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
                        include('connect.php');
                        $sql = "select * from booking";
                        if(!$result = $db -> query($sql)){
                            die($db -> error);
                        }
                        $countResult = $result -> num_rows;//แสดงจำนวนรายการจองตั๋วคอนเสิร์ตของลูกค้าทั้งหมดที่จองที่นั่งมา
                    ?>
                    <div class="card-body">                            
                            <h1 class="h3 mb-0 text-color-800" id="website">ประวัติจองตั๋วคอนเสิร์ตของลูกค้า
                                <button type="button" class="btn btn-sm btn-success" style="width: auto; height: auto; color: black;"><?php echo $countResult; ?> รายการ</button>
                                <?php
                                $sql1 = "select sum(s_price) AS sum_price from booking";
                                $query = mysqli_query($db,$sql1);
                                $total = mysqli_fetch_assoc($query);
                                ?>
                                <button type="button" class="btn btn-sm btn-success" style="width: auto; height: auto; color: black;"><?php echo number_format($total['sum_price'],0); ?> บาท</button>
                            </h1>
                            <!-- กรอกค้นหาข้อมูลทั้งหมดที่จองไปก่อนหน้านี้ -->
                            <form action="PageSearchHistoryBookingConcertOfMember.php" class="form-group my-3" method="POST">
                            <div class="input-group" align="right">
                                <div class="form-outline col-12" data-mdb-input-init>
                                    <input type="search" id="search" class="form-control" name="booking" required style="color: black;" placeholder="กรุณากรอกชื่อผู้จองโซนของโซนที่นั่ง,ชื่อคอนเสิร์ตหรือสถานที่จัดคอนเสิร์ต"/>
                                    <label class="form-label" for="form1"></label>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <table class="table table-striped mt-4">
                                <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของทั้งหมดที่ผู้จองคอนเสิร์ต -->
                                <thead class="table-success text-color">
                                    <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ชื่อผู้จองที่นั่ง</th>
                                    <th scope="col">ชื่อคอนเสิร์ต</th>
                                    <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                                    <th scope="col">โซนที่นั่ง</th>
                                    <th scope="col">แสดงบัตรคอนเสิร์ต</th>
                                    <th scope="col">Download บัตรคอนเสิร์ต</th>
                                    <th scope="col">ยกเลิกการจองตั๋วคอนเสิร์ต</th>
                                    </tr>
                                </thead>
                                <tbody class="text-color">
                                    <?php
                                        //แสดงรายการจองตั๋วคอนเสิร์ตของลูกค้าทั้งหมด
                                        include('connect.php');
                                        $sql = "SELECT * FROM booking";
                                        $query = mysqli_query($db,$sql);
                                        $order = 1;
                                    ?>
                                    <?php
                                    for($i=1; $i<=$countResult; $i++){
                                        $booking = $query -> fetch_assoc();
                                    ?>
                                    <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของผู้จองทั้งหมด -->
                                    <td><?php echo $order++; ?></td>
                                    <td><?php echo $booking['m_fullname']; ?></td>
                                    <td><?php echo $booking['name']; ?></td>
                                    <td><?php echo $booking['location']; ?></td>
                                    <td><?php echo $booking['s_zone']; ?></td>
                                    <td><a href="TicketConcert.php?booking=<?php echo $booking['booking_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-ticket"></i> บัตรคอนเสิร์ต</a></td> <!-- เมื่อลูกค้าจองที่นั่งแล้ว ให้ Admin สามารถทำการออกบัตรคอนเสิร์ตได้ -->
                                    <td><a href="TicketConcertDownload.php?booking=<?php echo $booking['booking_id']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-download"></i> Download บัตรคอนเสิร์ต</a></td> <!-- ให้ Admin สามารถทำการออกบัตรคอนเสิร์ตแบบอิเล็กทรอนิกส์ได้-->
                                    <td><a href="deleteBookingOfMember.php?booking=<?php echo $booking['booking_id']; ?>" onclick="return confirm('ยกเลิกการจองตั๋วคอนเสิร์ตของคุณ <?php echo $booking['m_fullname']; ?> ?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i> ยกเลิกจองตั๋วคอนเสิร์ต</a></td> <!-- เมื่อไม่อยากออกบัตรคอนเสิร์ต สามารถยกเลิกจองตั๋วคอนเสิร์ตได้ ไม่สามารถออกบัตรได้ เนื่องจากให้ลูกค้าจะต้องไปเลือกที่นั่งใหม่อีกครั้งได้ -->
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                            </div>
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