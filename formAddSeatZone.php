<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เพิ่มข้อมูลของคอนเสิร์ต</title>

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
                    <div class="container-md" id="website">
                        <h1 class="mt-3" align="center">เพิ่มข้อมูลของโซนที่นั่ง</h1>
                        <form class="row g-4" method="post" action="insertSeatZone.php">
                        <div class="col-12">
                            <label for="inputFullName" class="form-label">ชื่อโซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_zone" style="color: black;" required>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">ราคาโซนที่นั่ง</label>
                            <input type="text" class="form-control" name="s_price" style="color: black;" required>
                        </div>
                        <div class="my-3">
                            <input type="submit" value="ยืนยันเพิ่มข้อมูลของโซนที่นั่ง" class="btn btn-success">
                            <input type="reset" value="ล้างข้อมูล" class="btn btn-warning">
                            <a href="ManageSeatZone.php" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>&nbsp;กลับหน้าแรก</a>
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