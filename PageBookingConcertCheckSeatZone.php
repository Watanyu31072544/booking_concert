<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เช็คโซนที่นั่ง</title>

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
                            if(isset($_GET['seat_zone'])){
                                require_once 'connect.php';
                                $sql = "SELECT * FROM seat_zone where s_id=".$_GET['seat_zone'];
                                $query = mysqli_query($db,$sql);
                                while($seatzone = mysqli_fetch_assoc($query)){
                        ?>
                        <h1 align="center" style="color: black;">โซนที่นั่ง โซน <?php echo $seatzone['s_zone']; ?></h1><?php }}?>
                        <div class="container-md" id="website">    
                            <form class="row g-4" method="post" action="insertBooking.php">
                            <div class="col-6">
                                <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                                <input type="text" class="form-control" name="m_fullname" style="color: black;" value="<?php echo $member['m_fullname']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputEmail" class="form-label">อีเมล์</label>
                                <input type="text" class="form-control" name="m_email" style="color: black;" value="<?php echo $member['m_email']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="m_phone" style="color: black;" value="<?php echo $member['m_phone']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputGender" class="form-label">เพศ</label>
                                <input type="text" class="form-control" name="m_gender" style="color: black;" value="<?php echo $member['m_gender']; ?>">
                            </div>           
                            <div class="col-6">
                                <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                                <input type="date" name="birth_date" class="form-control" style="color: black;" value="<?php echo $member['birth_date']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAge" class="form-label">อายุ</label>
                                <input type="text" class="form-control" name="m_age" style="color: black;" value="<?php echo $member['m_age']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputOccupation" class="form-label">อาชีพ</label>
                                <input type="text" class="form-control" name="m_occupation" style="color: black;" value="<?php echo $member['m_occupation']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">ที่อยู่</label>
                                <input type="text" class="form-control" name="address" style="color: black;" value="<?php echo $member['address']; ?>">
                            </div>
                            <?php
                                if(isset($_GET['concert'])){
                                    require_once 'connect.php';
                                    $sqlconcertname = "SELECT * FROM concert WHERE id=" .$_GET['concert'];
                                    $result = mysqli_query($db, $sqlconcertname);
                                    while($concert_name = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">ชื่อคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="name" style="color: black;" value="<?php echo $concert_name['name']; ?>">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">ชื่อสถานที่จัดคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="location" style="color: black;" value="<?php echo $concert_name['location']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">วันที่เริ่มแสดงคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="date" style="color: black;" value="<?php echo $concert_name['date']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">เวลาที่เริ่มแสดงคอนเสิร์ต</label>
                                <input type="text" class="form-control" name="time" style="color: black;" value="<?php echo $concert_name['time']; ?>">
                            </div>
                            <?php 
                                    }
                                }
                            ?>
                            <?php
                                if(isset($_GET['seat_zone'])){
                                    require_once 'connect.php';
                                    $sqlseatzone = "SELECT * FROM seat_zone WHERE s_id=" .$_GET['seat_zone'];
                                    $result = mysqli_query($db, $sqlseatzone);
                                    while($seatzone = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">โซนที่นั่ง</label>
                                <input type="text" class="form-control" name="s_zone" style="color: black;" value="<?php echo $seatzone['s_zone']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">ราคาโซนที่นั่ง</label>
                                <input type="text" class="form-control" name="s_price" style="color: black;" value="<?php echo $seatzone['s_price']; ?>">
                            </div>
                            <?php 
                                    }
                                }
                            ?>
                            <div class="my-3">
                                <input type="submit" value="ยืนยันการจองตั๋วคอนเสิร์ต" class="btn btn-success">
                                <?php
                                    if(isset($_GET['concert'])){
                                        require_once 'connect.php';
                                        $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                                        $query = mysqli_query($db,$sql);
                                        while($concert = mysqli_fetch_array($query)){
                                ?>
                                <a href="PageBookingConcertChoiceSeatZone.php?concert=<?php echo $concert['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิกการจองตั๋วคอนเสิร์ต</a>
                                <?php }} ?>
                            </div>
                            </form>   
                        </div>                                         
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