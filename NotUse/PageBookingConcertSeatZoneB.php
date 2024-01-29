<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>โซนที่นั่ง โซน B</title>

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
            <div id="content">
                <?php
                include('topbarMember.php');
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <?php
                        require('dbconnect.php');
                        $sqlbookingconcertmember = "SELECT concert.name,seat_zone.s_zone,seat_zone.s_price FROM concert INNER JOIN seat_zone ON concert.id = seat_zone.s_id";
                        $result = mysqli_query($db, $sqlbookingconcertmember);
                        $bookingconcert = mysqli_fetch_assoc($result);
                    ?>                 
                    <h1 class="mt-3" align="center" style="color:black;">โซนที่นั่ง โซน B</h1>
                        <form class="row g-4" method="post" action="#" style="color:black;">
                        <div class="col-6">
                            <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                            <input type="text" class="form-control" name="m_fullname" disabled style="color: black;" value="<?php echo $member['m_fullname']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputEmail" class="form-label">อีเมล์</label>
                            <input type="text" class="form-control" name="m_email" disabled style="color: black;" value="<?php echo $member['m_email']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="m_phone" disabled style="color: black;" value="<?php echo $member['m_phone']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputGender" class="form-label">เพศ</label>
                            <input type="text" class="form-control" name="m_gender" disabled style="color: black;" value="<?php echo $member['m_gender']; ?>">
                        </div>           
                        <div class="col-6">
                            <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                            <input type="date" name="birth_date" class="form-control" disabled style="color: black;" value="<?php echo $member['birth_date']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAge" class="form-label">อายุ</label>
                            <input type="text" class="form-control" name="m_age" disabled style="color: black;" value="<?php echo $member['m_age']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputOccupation" class="form-label">อาชีพ</label>
                            <input type="text" class="form-control" name="m_occupation" disabled style="color: black;" value="<?php echo $member['m_occupation']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" name="address" disabled style="color: black;" value="<?php echo $member['address']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ชื่อคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="name" disabled style="color: black;" value="<?php echo $bookingconcert['name']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">โซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_zone" disabled style="color: black;" value="<?php echo $bookingconcert['s_zone']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress" class="form-label">ราคาโซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_price" disabled style="color: black;" value="<?php echo $bookingconcert['s_price']; ?>">
                        </div>
                        <div class="d-grid gap-2 col-sm-4">
                            <br><buttom type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>&nbsp;จองที่นั่ง</buttom>
                        </div>
                        <div class="d-grid gap-2 col-sm-4" align="center">
                            <br><buttom type="reset" class="btn btn-warning">ล้างข้อมูล</buttom>
                        </div>
                        <div class="d-grid gap-2 col-sm-4" align="right">
                            <br><buttom type="buttom" class="btn btn-danger" onClick="window.location='PageBookingConcertSeatZone.php'"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิก</buttom>
                        </div>
                        </form>                                        
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