<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ประวัติจองตั๋วคอนเสิร์ต</title>

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
                        include('connect.php');
                        $booking=$_POST["booking"];
                        $sql = "select * from booking where m_fullname LIKE '%$booking%' or name LIKE '%$booking%' or location LIKE '%$booking%'";
                        if(!$result = $db -> query($sql)){
                            die($db -> error);
                        }
                        $countResult = $result -> num_rows;
                    ?>
                    <?php
                        include('dbconnect.php');
                        $booking=$_POST["booking"];
                        $sql = "SELECT * FROM booking WHERE m_fullname LIKE '%$booking%' or name LIKE '%$booking%' or location LIKE '%$booking%'";
                        $query = mysqli_query($db,$sql);
                        $count = mysqli_num_rows($query);
                        $order = 1;
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ประวัติจองตั๋วคอนเสิร์ต
                        <button type="button" class="btn btn-sm btn-success"  style="width: 100px; height: 39px; color: black;">
                            <?php echo $countResult; ?> รายการ
                        </button>
                        </h1>
                        <a href="PageHistoryBookingConcert.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;ประวัติจองตั๋วคอนเสิร์ต</a>
                    </div>
                    <form action="PageSearchHistoryBookingConcert.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="booking" required style="color: black;" placeholder="กรุณากรอกชื่อของโซนที่นั่ง,ชื่อคอนเสิร์ตหรือสถานที่จัดคอนเสิร์ต"/>
                            <label class="form-label" for="form1"></label>
                        </div>
                    </div>
                    </form>
                    <?php if($count > 0) {?>
                    <table class="table table-striped mt-4">
                        <thead class="table-success text-color">
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อคอนเสิร์ต</th>
                            <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                            <th scope="col">โซนที่นั่ง</th>
                            <th scope="col">ปริ้นใบชำระเงิน</th>
                            <th scope="col">ยกเลิกจองตั๋วคอนเสิร์ต</th>
                            </tr>
                        </thead>
                        <tbody class="text-color">
                        
                        <?php
                            while($booking = mysqli_fetch_assoc($query)){?>
                            <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $booking['name']; ?></td>
                            <td><?php echo $booking['location']; ?></td>
                            <td><?php echo $booking['s_zone']; ?></td>
                            <td><a href="BookingConcertPay.php?booking=<?php echo $booking['booking_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-print"></i> ปริ้นใบชำระเงิน</a></td>
                            <td><a href="deleteBooking.php?booking=<?php echo $booking['booking_id']; ?>" onclick="return confirm('ยกเลิกการจองตั๋วคอนเสิร์ต <?php echo $booking['name']; ?> ?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i> ยกเลิกจองตั๋วคอนเสิร์ต</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                        <div class="alert alert-danger">
                            <b>ไม่มีอยู่ในระบบ เนื่องจากไม่ได้จองที่นั่งหรือยกเลิกจองตั๋วแล้ว เราไม่สามารถเช็คข้อมูลของผู้จองได้</b>
                        </div>
                        <?php }?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>