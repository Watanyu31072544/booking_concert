<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>โซนที่นั่ง โซน C</title>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                    </div>
                    <h1 class="mt-3" align="center" style="color:black;">โซนที่นั่ง โซน C</h1>
                        <form class="row g-4" method="post" action="#" style="color:black;">
                        <div class="col-6">
                            <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="col-6">
                            <label for="inputEmail" class="form-label">อีเมล์</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col-6">
                            <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-6">
                            <label for="inputGender" class="form-label">เพศ</label>
                            <input type="text" class="form-control" name="gender">
                        </div>           
                        <div class="col-6">
                            <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                            <input type="date" name="birth_date" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="inputAge" class="form-label">อายุ</label>
                            <input type="text" class="form-control" name="age">
                        </div>
                        <div class="col-12">
                            <label for="inputOccupation" class="form-label">อาชีพ</label>
                            <input type="text" class="form-control" name="occupation">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="col-4">
                            <label for="inputAddress" class="form-label">ชื่อคอนเสิร์ต</label>
                            <input type="text" class="form-control" name="s_name">
                        </div>
                        <div class="col-4">
                            <label for="inputAddress" class="form-label">โซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_zone">
                        </div>
                        <div class="col-4">
                            <label for="inputAddress" class="form-label">ราคาโซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_price">
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