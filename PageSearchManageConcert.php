<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>จัดการข้อมูลของคอนเสิร์ต</title>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" id="website">จัดการข้อมูลของคอนเสิร์ต</h1>
                        <a href="ManageConcert.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;จัดการข้อมูลของคอนเสิร์ต</a>
                    </div>
                    <?php
                        include('dbconnect.php');
                        $concert=$_POST["concert"];
                        $sql = "SELECT * FROM concert WHERE location LIKE '%$concert%' OR name LIKE '%$concert%' ORDER BY location ASC";
                        $query = mysqli_query($db,$sql);
                        $count = mysqli_num_rows($query);
                        $order = 1;
                    ?>
                    <form action="PageSearchManageConcert.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="concert" required style="color: black;" placeholder="กรุณากรอกชื่อสถานที่จัดคอนเสิร์ตหรือชื่อคอนเสิร์ต"/>
                            <label class="form-label" for="form1"></label>
                        </div>
                    </div>                    
                    </form>
                    <?php if($count > 0){?>
                    <table class="table table-striped mt-4">
                        <thead class="table text-color">
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อคอนเสิร์ต</th>
                            <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                            <th scope="col">รายละเอียดของคอนเสิร์ต</th>
                            <th scope="col">วันที่เริ่มแสดงของคอนเสิร์ต</th>                            
                            <th scope="col">เวลาเริ่มแสดงของคอนเสิร์ต</th>
                            <th scope="col">แก้ไขข้อมูลของคอนเสิร์ต</th>
                            <th scope="col">ดูข้อมูลของคอนเสิร์ต</th>
                            <th scope="col">ลบข้อมูลของคอนเสิร์ต</th>
                            </tr>
                        </thead>
                        <tbody class="text-color">
                            <?php while($concert = mysqli_fetch_assoc($query)){?>
                            <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $concert['name']; ?></td>
                            <td><?php echo $concert['location']; ?></td>
                            <td><?php echo $concert['data']; ?></td>
                            <td><?php echo $concert['date']; ?></td>
                            <td><?php echo $concert['time']; ?></td>
                            <td><a href="formEditConcert.php?concert=<?php echo $concert['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> แก้ไขข้อมูลของคอนเสิร์ต</a></td>
                            <td><a href="formViewConcert.php?concert=<?php echo $concert['id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของคอนเสิร์ต</a></td>
                            <td><a href="deleteConcert.php?concert=<?php echo $concert['id']; ?>" onclick="return confirm('ลบข้อมูล <?php echo $concert['name']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> ลบข้อมูลของคอนเสิร์ต</a></td>	
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                        <div class="alert alert-danger">
                            <b>ไม่มีอยู่ในฐานข้อมูล เนื่องจากไม่ได้เพิ่มชื่อคอนเสิร์ต กรุณาเพิ่มชื่อคอนเสิร์ต</b>
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