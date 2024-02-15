<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เช็คจำนวนที่นั่งของคอนเสิร์ต </title>

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
                <?php
                    include('connect.php');
                    $sql = "select * from booking group by name asc";
                    if(!$result = $db -> query($sql)){
                        die($db -> error);
                    }
                    $countResult = $result -> num_rows; //นับจำนวนแถวจากคำสั่ง $sql
                ?>
                    <!-- Page Heading -->
                    <div class="card-body">
                        <div class="row">
                            <h1 class="h3 mb-0 text-color-800" id="website">เช็คจำนวนที่นั่งของคอนเสิร์ต
                            <button type="button" class="btn btn-sm btn-success" style="width: auto; height: auto; color: black;">
                                <?php echo $countResult; ?> คอนเสิร์ต
                            </button> <!-- แสดงจำนวนคอนเสิร์ตที่มีขึ้นโชว์ของผู้จอง -->
                            </h1>
                        </div>
                        <!-- กรอกค้นหาสถานที่จัดคอนเสิร์ต -->                    
                        <form action="PageSearchCheckBookingConcert.php" class="form-group my-3" method="POST">
                        <div class="input-group" align="right">
                                <div class="form-outline col-12" data-mdb-input-init>
                                    <input type="search" id="search" class="form-control" name="booking" required placeholder="กรุณากรอกชื่อสถานที่จัดคอนเสิร์ตด้วยครับ"/>
                                    <label class="form-label" for="form1"></label>
                                </div>                            
                        </div>
                        </form>   
                        <div class="table-responsive">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">                 
                        <table class="table table-striped">
                            <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของผู้จอง -->
                            <thead class="table-success text-color" align="center";>
                                <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อคอนเสิร์ต</th>
                                <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                                <th scope="col">วันและเวลาเริ่มคอนเสิร์ต</th>
                                <th scope="col">เช็คจำนวนที่นั่ง</th>                            
                                </tr>
                            </thead>
                            <tbody class="text-color" align="center";>
                            <?php
                                include('connect.php');
                                $sql = "SELECT * FROM booking ORDER BY booking_id ASC";
                                $query = mysqli_query($db,$sql);
                                $order = 1;
                            ?>
                            <?php
                                while($concert = $result -> fetch_assoc()){
                                    ?>
                                <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลจำนวนที่นั่งแต่ละโซนของคอนเสิร์ต -->
                                <td><?php echo $order++; ?></td>
                                <td><?php echo $concert['name']; ?></td>
                                <td><?php echo $concert['location']; ?></td>
                                <td><?php echo $concert['date']; ?> / <?php echo $concert['time']; ?></td>
                                <td><a href="PageCountBookingConcertSeatZone.php?booking=<?php echo $concert['booking_id']; ?>" class="btn btn-success btn-sm" style="color:black"><i class="fa-solid fa-chair"></i> เช็คจำนวนที่นั่ง</a></td> <!-- หน้าเช็คจำนวนที่นั่งของคอนเสิร์ต ให้ Admin สามารถดูจำนวนที่นั่งได้ -->
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