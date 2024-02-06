<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>จองตั๋วคอนเสิร์ต</title>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">จองตั๋วคอนเสิร์ต<h1>
                        <a href="PageBookingConcert.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;จองตั๋วคอนเสิร์ต</a><!-- เมื่อค้นหาเสร็จแล้ว สามารถกดย้อนกลับหน้าจองตั๋วคอนเสิร์ต -->
                    </div>
                    <?php
                        //ค้นหาข้อมูลสถานที่จัดคอนเสิร์ต
                        include('dbconnect.php');
                        $concert=$_POST["concert"];
                        $sql = "SELECT * FROM concert WHERE location LIKE '%$concert%' ORDER BY location ASC";
                        $query = mysqli_query($db,$sql);
                        $count = mysqli_num_rows($query);
                        $order = 1;
                    ?>
                    <!-- ถ้าอยากจะกรอกข้อมูลอีกครั้ง สามารถกรอกสถานที่จัดคอนเสิร์ตอีกครั้งได้ -->
                    <form action="PageSearchBookingConcert.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="concert" required style="color: black;" placeholder="กรุณากรอกชื่อสถานที่จัดคอนเสิร์ตด้วยครับ"/>
                            <label class="form-label" for="form1"></label>
                        </div>                            
                    </div>                    
                    </form>
                    <!-- ถ้าเจอข้อมูลของสถานที่จัดคอนเสิร์ต -->
                    <?php if($count > 0){?>
                    <table class="table table-striped">
                        <thead class="table-success text-color" align="center";>
                            <tr>
                            <th scope="col" width="2%">ลำดับ</th>
                            <th scope="col">ชื่อคอนเสิร์ต</th>
                            <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                            <th scope="col">วันและเวลาเริ่มคอนเสิร์ต</th>
                            <th scope="col">รายละเอียดของคอนเสิร์ต</th>
                            <th scope="col">จองที่นั่ง</th>
                            </tr>
                        </thead>
                        <tbody class="text-color" align="center";>
                        <?php
                            while($concert = mysqli_fetch_assoc($query)){?>
                            <tr>
                            <td><?php echo $order++; ?></td>
                            <td><?php echo $concert['name']; ?></td>
                            <td><?php echo $concert['location']; ?></td>
                            <td><?php echo $concert['date']; ?> / <?php echo $concert['time']; ?></td>
                            <td align="center";><a href="formViewConcertOfMember.php?concert=<?php echo $concert['id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของ<br>คอนเสิร์ต</a></td> <!-- หน้าดูข้อมูลของคอนเสิร์ต สามารถดูได้ -->                            
                            <td><a href="PageBookingConcertSeatZone.php?concert=<?php echo $concert['id']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-chair"></i> จองที่นั่ง</a></td> <!-- หน้าจองที่นั่งคอนเสิร์ต สามารถเลือกที่นั่งได้ตามความต้องการ -->
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{?>
                        <div class="alert alert-danger">
                            <b>ไม่ได้อยู่ในฐานข้อมูลการจองตั๋วของคอนเสิร์ต ต้องติดตามผ่านสื่อออนไลน์ด้วยครับ ขออภัยด้วยครับ</b><!-- ในกรณีที่ค้นหาอย่างอื่นหรือยังไม่มีสถานที่จัดคอนเสิร์ต จะไม่สามารถหาเจอได้ เนื่องจากยังไม่มีจัดคอนเสิร์ตที่ยังไม่มีเพิ่มสถานที่จัดคอนเสิร์ต -->
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