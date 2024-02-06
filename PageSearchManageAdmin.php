<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>จัดการข้อมูลของผู้ดูแล</title>

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
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูลของผู้ดูแล</h1>
                        <a href="ManageAdmin.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;จัดการข้อมูลของผู้ดูแล</a> <!-- เมื่อทำการค้นหาของผู้ดูแลแล้ว ให้กลับมาหน้าจัดการข้อมูลของผู้ดูแล -->
                    </div>
                    <?php
                        include('dbconnect.php');
                        $admin=$_POST["admin"];
                        $sql = "SELECT * FROM admin WHERE ad_username LIKE '%$admin%' ORDER BY ad_username ASC";
                        $query = mysqli_query($db,$sql);
                        $count = mysqli_num_rows($query);
                        $order = 1;
                    ?>
                    <!-- กรอกค้นหาของสมาชิกผู้ดูแล -->
                    <form action="PageSearchManageAdmin.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="admin" required style="color: black;" placeholder="กรุณากรอกชื่อผู้ใช้"/>
                            <label class="form-label" for="form1"></label>
                        </div>
                    </div>                    
                    </form>
                    <?php if($count > 0) {?>
                    <table class="table table-striped mt-4">
                        <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของผู้ดูแล -->
                        <thead class="table text-color">
                            <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของผู้ดูแล -->
                            <th scope="col" width="5%">ลำดับ</th>
                            <th scope="col" width="15%">ชื่อผู้ดูแล</th>
                            <th scope="col" width="15%">หน้าที่</th>
                            <th scope="col" width="20%">แก้ไขข้อมูลของผู้ดูแล</th>
                            <th scope="col" width="20%">ดูข้อมูลของผู้ดูแล</th>                            
                            <th scope="col" width="20%">ลบข้อมูลของผู้ดูแล</th>
                            </tr>
                        </thead>
                        <tbody class="text-color">
                            <?php while($admin = mysqli_fetch_assoc($query)){?>
                            <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $admin['ad_username']; ?></td>
                            <td><?php echo $admin['ad_role']; ?></td>
                            <td><a href="formEditAdmin.php?admin=<?php echo $admin['ad_id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> แก้ไขข้อมูลของผู้ดูแล</a></td> <!-- หน้าแก้ไขข้อมูลของผู้ดูแล -->
                            <td><a href="formViewAdmin.php?admin=<?php echo $admin['ad_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของผู้ดูแล</a></td> <!-- หน้าดูข้อมูลของผู้ดูแล -->
                            <td><a href="deleteAdmin.php?admin=<?php echo $admin['ad_id']; ?>" onclick="return confirm('ลบข้อมูล <?php echo $admin['ad_username']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> ลบข้อมูลของผู้ดูแล</a></td>	<!-- ลบข้อมูลของผู้ดูแล -->
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                        <div class="alert alert-danger">
                            <b>ไม่มีอยู่ในฐานข้อมูล เนื่องจากไม่ได้เพิ่มผู้ดูแล เราไม่สามารถเช็คข้อมูลของผู้ดูแลได้</b> <!-- ในกรณีที่ค้นหาอย่างอื่นหรือยังไม่มีเพิ่มสมาชิกเข้ามา จะไม่สามารถหาเจอได้ เนื่องจากยังไม่มีสมาชิกเข้ามาร่วมทำงาน -->
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