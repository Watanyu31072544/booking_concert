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
                        $sql = "select * from booking group by m_fullname asc";
                        if(!$result = $db -> query($sql)){
                            die($db -> error);
                        }
                        $countResult = $result -> num_rows;//แสดงจำนวนสมาชิกจองตั๋วคอนเสิร์ตของลูกค้าทั้งหมดที่จองที่นั่งมา
                    ?>
                    <div class="card-body">                            
                            <h1 class="h3 mb-0 text-color-800" id="website">เช็คสะสมคะแนนของลูกค้า
                                <button type="button" class="btn btn-sm btn-success" style="width: auto; height: auto; color: black;"><?php echo $countResult; ?> คน</button>
                            </h1>
                            <!-- กรอกค้นหาสมาชิกทั้งหมดที่สะสมคะแนนไปก่อนหน้านี้ -->
                            <form action="PageSearchCheckScoreBookingConcertOfMember.php" class="form-group my-3" method="POST">
                            <div class="input-group" align="right">
                                <div class="form-outline col-12" data-mdb-input-init>
                                    <input type="search" id="search" class="form-control" name="booking" required style="color: black;" placeholder="กรุณากรอกชื่อผู้จองที่สะสมคะแนนไว้อยู่"/>
                                    <label class="form-label" for="form1"></label>
                                </div>
                            </div>
                            <div class="table-responsive">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <table class="table table-striped mt-4">
                                <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของทั้งหมดที่สะสมคะแนนของผู้จอง -->
                                <thead class="table-success text-color" align="center">
                                    <tr>
                                    <th scope="col">ลำดับ</th>
                                    <th scope="col">ชื่อผู้จองที่นั่ง</th>
                                    <th scope="col">สะสมคะแนน (คะแนน)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-color" align="center">
                                    <?php
                                        //แสดงสะสมคะแนนของผู้จองทั้งหมด
                                        $sql2 = "SELECT m_fullname,sum(s_price) AS sum_price FROM booking group by m_fullname asc order by sum_price desc";//เรียงคะแนนที่สะสมจากน้อยไปมาก
                                        $query2 = mysqli_query($db,$sql2);
                                        $order = 1;
                                    ?>
                                    <?php
                                    while($booking = $query2 -> fetch_assoc()){
                                    ?>
                                    <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของสะสมคะนนของผู้จอง -->
                                    <td><?php echo $order++; ?></td>
                                    <td><?php echo $booking['m_fullname']; ?></td>
                                    <td><?php echo number_format($booking['sum_price']/20,0); ?></td>
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