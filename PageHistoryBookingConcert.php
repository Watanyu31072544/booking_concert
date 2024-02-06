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
                        //รับค่าที่กรอกข้อมูลของคอนเสิร์ต
                        include('connect.php');
                        $sql = "select * from booking where m_email = '".$_SESSION['m_email']."'";
                        if(!$result = $db -> query($sql)){
                            die($db -> error);
                        }
                        $countResult = $result -> num_rows;//แสดงจำนวนรายการจองตั๋วคอนเสิร์ตของลูกค้า
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ประวัติจองตั๋วคอนเสิร์ต
                        <button type="button" class="btn btn-sm btn-success" style="width: 100px; height: 39px; color: black;">
                            <?php echo $countResult; ?> รายการ
                        </button>
                        </h1>
                    </div>
                    <!-- กรอกค้นหาข้อมูลที่จองไปก่อนหน้านี้ -->
                    <form action="PageSearchHistoryBookingConcert.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="booking" required style="color: black;" placeholder="กรุณากรอกชื่อของโซนที่นั่ง,ชื่อคอนเสิร์ตหรือสถานที่จัดคอนเสิร์ต"/>
                            <label class="form-label" for="form1"></label>
                        </div>
                    </div>
                    </form>
                    <table class="table table-striped mt-4">
                        <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของผู้จองคอนเสิร์ต -->
                        <thead class="table-success text-color">
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อผู้จอง</th>
                            <th scope="col">ชื่อคอนเสิร์ต</th>
                            <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                            <th scope="col">โซนที่นั่ง</th>
                            <th scope="col">ปริ้นใบชำระเงิน</th>
                            <th scope="col">ยกเลิกจองตั๋วคอนเสิร์ต</th>
                            </tr>
                        </thead>
                        <tbody class="text-color">
                        <?php
                            //แสดงรายการจองตั๋วคอนเสิร์ตของลูกค้า
                            include('connect.php');
                            $sql = "SELECT * FROM booking where m_email = '".$_SESSION['m_email']."'";
                            $query = mysqli_query($db,$sql);
                            $order = 1;
                        ?>
                        <?php while($booking = mysqli_fetch_assoc($query)){?>
                            <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของผู้จอง -->
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $booking['m_fullname']; ?></td>
                            <td><?php echo $booking['name']; ?></td>
                            <td><?php echo $booking['location']; ?></td>
                            <td><?php echo $booking['s_zone']; ?></td>
                            <td><a href="BookingConcertPay.php?booking=<?php echo $booking['booking_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-print"></i> ปริ้นใบชำระเงิน</a></td> <!-- เมื่อลูกค้าจองที่นั่งไว้แล้ว สามารถชำระเงินผ่าน QR Code -->
                            <td><a href="deleteBooking.php?booking=<?php echo $booking['booking_id']; ?>" onclick="return confirm('ยกเลิกการจองตั๋วคอนเสิร์ต <?php echo $booking['name']; ?> ?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i> ยกเลิกจองตั๋วคอนเสิร์ต</a></td> <!-- เมื่อลูกค้าอยากเลือกที่นั่งใหม่ สามารถยกเลิกจองตั๋วด้วยลูกค้าเองได้ -->
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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