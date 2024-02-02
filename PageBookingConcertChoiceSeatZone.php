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
            <div id="content" style="background-color: pink;">
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
                            <a href="PageBookingConcert.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;กลับเมนูจองตั๋วคอนเสิร์ต</a>
                    </div>
                    <?php
                            }
                        }
                    ?>
                    <div class="col p-3 rounded-start" align="center">
                        <h3 style="color:black;">กรุณาเลือกโซนที่นั่งด้วยครับ</h3>
                        <div align="center">
                            <center style="width: 1000px; height: 100px; background-color :LightGray; color :black">Stage</center>
                        </div>
                        <hr>
                        <?php
                        if(isset($_GET['concert'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                            $query = mysqli_query($db,$sql);
                            while($concert = mysqli_fetch_array($query)){
                        ?>
                        <div align="center">
                            <?php
                                include('connect.php');                                
                                $sql = "select * from booking";
                                if(!$result = $db -> query($sql)){
                                    die($db -> error);
                                }
                                $countResult = $result -> num_rows;
                                $sql0 = "SELECT * FROM seat_zone WHERE s_id = 1";
                                $sql1 = "SELECT * FROM seat_zone WHERE s_id = 2";
                                $sql2 = "SELECT * FROM seat_zone WHERE s_id = 3";
                                $sql3 = "SELECT * FROM seat_zone WHERE s_id = 4";
                                $sql4 = "SELECT * FROM seat_zone WHERE s_id = 5";
                                $sql5 = "SELECT * FROM seat_zone WHERE s_id = 6";
                                $sql6 = "SELECT * FROM seat_zone WHERE s_id = 7";
                                $sql7 = "SELECT * FROM seat_zone WHERE s_id = 8";
                                $sql8 = "SELECT * FROM seat_zone WHERE s_id = 9";
                                $sql9 = "SELECT * FROM seat_zone WHERE s_id = 10";
                                $sql10 = "SELECT * FROM seat_zone WHERE s_id = 11";
                                $sql11 = "SELECT * FROM seat_zone WHERE s_id = 12";
                                $query1 = mysqli_query($db,$sql0);
                                $query2 = mysqli_query($db,$sql1);
                                $query3 = mysqli_query($db,$sql2);
                                $query4 = mysqli_query($db,$sql3);
                                $query5 = mysqli_query($db,$sql4);
                                $query6 = mysqli_query($db,$sql5);
                                $query7 = mysqli_query($db,$sql6);
                                $query8 = mysqli_query($db,$sql7);
                                $query9 = mysqli_query($db,$sql8);
                                $query10 = mysqli_query($db,$sql9);
                                $query11 = mysqli_query($db,$sql10);
                                $query12 = mysqli_query($db,$sql11);
                            ?>
                            <?php foreach($query1 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone A</a>
                            <?php } ?>
                            <?php foreach($query2 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone B</a>
                            <?php } ?>
                            <?php foreach($query3 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone C</a>
                            <?php } ?>
                        </div>
                        <br>
                        <div align="center">
                            <?php foreach($query4 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone D</a>
                            <?php } ?>
                            <?php foreach($query5 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone E</a>
                            <?php } ?>
                            <?php foreach($query6 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone F</a>
                            <?php } ?>
                        </div>
                        <br>
                        <div align="center">
                            <?php foreach($query7 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone G</a>
                            <?php } ?>
                            <?php foreach($query8 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone H</a>
                            <?php } ?>
                            <?php foreach($query9 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone I</a>
                            <?php } ?>
                        </div>
                        <div align="center">
                            <?php foreach($query10 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone G</a>
                            <?php } ?>
                            <?php foreach($query11 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone H</a>
                            <?php } ?>
                            <?php foreach($query12 as $seat_zone){ ?>
                            <a href="PageBookingConcertCheckSeatZone.php?concert=<?php echo $concert['id']; ?>&seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-success btn-sm" style="width: 300px; height: 100px;"><i class="fa-solid fa-chair"></i> Zone I</a>
                            <?php } ?>
                        </div>
                        <?php
                            }
                        }
                        ?>
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