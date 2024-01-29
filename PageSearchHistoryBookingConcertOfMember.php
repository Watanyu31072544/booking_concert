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
            <div id="content">
                <?php
                include('topbarManage.php');
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <?php
                        include('dbconnect.php');
                        $booking=$_POST["booking"];
                        $sql = "SELECT * FROM booking WHERE s_zone LIKE '%$booking%' or m_fullname LIKE '%$booking%' or name LIKE '%$booking%' or location LIKE '%$booking%'";
                        $query = mysqli_query($db,$sql);
                        $count = mysqli_num_rows($query);
                        $order = 1;
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ประวัติจองตั๋วคอนเสิร์ตของลูกค้า</h1>
                        <a href="PageHistoryBookingConcertOfMember.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;ประวัติจองตั๋วคอนเสิร์ตของลูกค้า</a>
                    </div>
                    <form action="PageSearchHistoryBookingConcertOfMember.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="booking" required style="color: black;" placeholder="กรุณากรอกชื่อผู้จองโซนของโซนที่นั่ง,ชื่อคอนเสิร์ตหรือสถานที่จัดคอนเสิร์ต"/>
                            <label class="form-label" for="form1"></label>
                        </div>
                    </div>
                    <?php if($count > 0) {?>
                    <table class="table table-striped mt-4">
                        <thead class="table-success text-color">
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อผู้จองที่นั่ง</th>
                            <th scope="col">ชื่อคอนเสิร์ต</th>
                            <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                            <th scope="col">โซนที่นั่ง</th>
                            <th scope="col">แสดงบัตรคอนเสิร์ต</th>
                            <th scope="col">ยกเลิกการจองตั๋วคอนเสิร์ต</th>
                            </tr>
                        </thead>
                        <tbody class="text-color">                            
                            <?php
                            while($booking = mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $booking['m_fullname']; ?></td>
                            <td><?php echo $booking['name']; ?></td>
                            <td><?php echo $booking['location']; ?></td>
                            <td><?php echo $booking['s_zone']; ?></td>
                            <td><a href="TicketConcert.php?booking=<?php echo $booking['booking_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-ticket"></i> บัตรคอนเสิร์ต</a></td>
                            <td><a href="deleteBookingOfMember.php?booking=<?php echo $booking['booking_id']; ?>" onclick="return confirm('ยกเลิกการจองตั๋วคอนเสิร์ตของคุณ <?php echo $member['m_fullname']; ?> ?');" class="btn btn-danger btn-sm"><i class="fa-solid fa-ban"></i> ยกเลิกจองตั๋วคอนเสิร์ต</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } else{?>
                        <div class="alert alert-danger">
                            <b>ไม่มีอยู่ในระบบ เนื่องจากผู้จองไม่ได้จองที่นั่ง เราไม่สามารถเช็คข้อมูลของผู้จองได้</b>
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