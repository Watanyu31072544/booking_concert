<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เลือกโซนที่นั่งคอนเสิร์ต</title>

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
                    <?php
                        if(isset($_GET['concert'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                            $query = mysqli_query($db,$sql);
                            while($concert = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="color: black;">
                            <h3>ชื่อคอนเสิร์ต : <?php echo $concert['name']; ?></h3>
                    </div>
                    <?php
                            }
                        }
                    ?>
                    <?php
                        include('connect.php');
                        $sql = "SELECT * FROM seat_zone WHERE s_id = 1";
                        $sql1 = "SELECT * FROM seat_zone WHERE s_id = 2";
                        $query1 = mysqli_query($db,$sql);
                        $query2 = mysqli_query($db,$sql1);
                    ?>
                    <div class="col p-3 rounded-start" align="center">
                        <h3 style="color:black;">กรุณาเลือกโซนที่นั่งด้วยครับ</h3>
                        <div align="center">
                            <center style="width: 1000px; height: 100px; background-color :LightGray; color :black">Stage</center>
                        </div>
                        <hr>
                        <?php foreach($query1 as $seat_zone){ ?>
                        <div class="btn">
                            <button type="button" class="btn" style="width: 300px; height: 100px; background-color :red; color :black" onClick="window.location='PageBookingConcertSeatZoneA.php'">Zone A<br>ยังว่าง <?php echo $seat_zone['s_qty'] ?> ที่นั่ง <br> จองแล้ว 0 ที่นั่ง</button>
                        </div>
                        <?php foreach($query2 as $seat_zone){ ?>
                        <div class="btn" align="center">
                            <button type="button" class="btn" style="width: 300px; height: 100px; background-color :green; color :black" onClick="window.location='PageBookingConcertSeatZoneB.php'">Zone B<br>ยังว่าง <?php echo $seat_zone['s_qty'] ?> ที่นั่ง <br> จองแล้ว 0 ที่นั่ง</button>
                        </div>
                        <div class="btn" align="right">
                            <button type="button" class="btn" style="width: 300px; height: 100px; background-color :yellow; color :black" onClick="window.location='PageBookingConcertSeatZoneC.php'">Zone C</button>
                        </div>
                        <div class="btn">
                            <button type="button" class="btn" style="width: 300px; height: 100px; background-color :pink; color :black" onClick="window.location='PageBookingConcertSeatZoneD.php'">Zone D</button>
                        </div>
                        <div class="btn" align="center">
                            <button type="button" class="btn" style="width: 300px; height: 100px; background-color :orange; color :black" onClick="window.location='PageBookingConcertSeatZoneE.php'">Zone E</button>
                        </div>
                        <div class="btn" align="right">
                            <button type="button" class="btn" style="width: 300px; height: 100px; background-color :violet; color :black" onClick="window.location='PageBookingConcertSeatZoneF.php'">Zone F</button>
                        </div>
                        <div class="btn" align="right">
                            <button type="button" class="btn" style="width: 960px; height: 100px; background-color :LightGray; color :black" onClick="window.location='PageBookingConcertSeatZoneG.php'">Zone G</button>
                        </div>
                        <?php }} ?>
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