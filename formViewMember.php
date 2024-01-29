<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ดูข้อมูลของลูกค้า</title>

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
                        if(isset($_GET['member'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM member where m_id=".$_GET['member'];
                            $query = mysqli_query($db,$sql);
                            while($member = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="container-md" id="website">
                        <h1 class="mt-3" align="center">ดูข้อมูลของลูกค้า</h1>
                        <form class="row g-4" method="post" action="#">
                        <div class="col-6">
                            <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                            <input type="text" class="form-control" name="m_fullname" style="color: black;" disabled value="<?php echo $member['m_fullname']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputEmail" class="form-label">อีเมล์</label>
                            <input type="text" class="form-control" name="m_email" style="color: black;" disabled value="<?php echo $member['m_username']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="m_phone" style="color: black;" disabled value="<?php echo $member['m_phone']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputGender" class="form-label">เพศ</label>
                            <input type="text" class="form-control" name="m_gender" style="color: black;" disabled value="<?php echo $member['m_phone']; ?>">
                        </div>           
                        <div class="col-6">
                            <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                            <input type="date" name="birth_date" class="form-control" style="color: black;" disabled value="<?php echo $member['birth_date']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="inputAge" class="form-label">อายุ</label>
                            <input type="text" class="form-control" name="m_age" style="color: black;" disabled value="<?php echo $member['m_age']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputOccupation" class="form-label">อาชีพ</label>
                            <input type="text" class="form-control" name="m_occupation" style="color: black;" disabled value="<?php echo $member['m_occupation']; ?>">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" name="address" style="color: black;" disabled value="<?php echo $member['address']; ?>">
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