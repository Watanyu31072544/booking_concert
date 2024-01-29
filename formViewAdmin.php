<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ดูข้อมูลของผู้ดูแล</title>

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
                    <?php
                        if(isset($_GET['admin'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM admin where ad_id=".$_GET['admin'];
                            $query = mysqli_query($db,$sql);
                            while($admin = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="container-md" id="website">
                        <h1 class="mt-3" align="center">ดูข้อมูลของผู้ดูแล</h1>
                        <form class="row g-4" method="post">
                        <div class="col-6">
                            <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                            <input type="text" class="form-control" style="color: black;" name="ad_fullname" disabled value="<?php echo $admin['ad_fullname']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputEmail" class="form-label">หน้าที่</label>
                            <input type="text" class="form-control" style="color: black;" name="ad_role" disabled value="<?php echo $admin['ad_role']; ?>">
                        </div>
                        </form>
                    </div>
                <!-- /.container-fluid -->
                    <?php
                            }
                        }
                    ?>
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>