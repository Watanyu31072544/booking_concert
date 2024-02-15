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
                        //แสดงรหัส ID ของคอนเสิร์ต
                        if(isset($_GET['concert'])){
                            require_once 'connect.php';
                            $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                            $query = mysqli_query($db,$sql);
                            while($concert = mysqli_fetch_array($query)){
                    ?>
                    <!-- Page Heading -->
                    <div class="card-body">
                            <div class="table-responsive">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="color: black;">
                            <!-- แสดงชื่อคอนเสิร์ตตรงกับรหัส ID ของคอนเสิร์ต -->
                            <h3>ชื่อคอนเสิร์ต : <?php echo $concert['name']; ?>
                            <a href="PageBookingConcert.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;กลับเมนูจองตั๋วคอนเสิร์ต</a></h3>
                    </div>
                    
                    <div class="col p-3 rounded-start" align="center">
                            <h3 style="color:black;">กรุณาเลือกโซนที่นั่งด้วยครับ</h3>
                            <div align="center">
                                <center style="width: auto; height: 100px; background-color :LightGray; color :black">Stage</center>
                            </div>
                            <br>
                            <table class="table table-striped">
                            <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของโซนที่นั่งต้องเลือกโซนใดโซนหนึ่ง -->
                            <thead class="table-success text-color" align="center";>
                                <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">โซนที่นั่ง</th>
                                <th scope="col">จำนวนที่นั่ง</th>
                                <th scope="col">ที่นั่งที่ถูกจองแล้ว</th>
                                <th scope="col">จำนวนที่นั่งที่เหลือ</th>
                                <th scope="col">เลือกโซนที่นั่ง</th>
                                </tr>
                            </thead>
                            <tbody class="text-color" align="center";>
                            <?php
                                include('connect.php');
                                $sql1 = "SELECT name,count(s_zone) FROM booking where s_zone is not null and name = '".$concert['name']."'GROUP BY s_zone";
                                if(!$result1 = $db -> query($sql1)){
                                    die($db -> error);
                                }
                                $countResult1 = $result1 -> num_rows;
                            ?>
                            <?php
                            include('connect.php');
                                $sql = "select * from seat_zone";
                                if(!$result = $db -> query($sql)){
                                    die($db -> error);
                                }
                                $countResult = $result -> num_rows; //นับจำนวนแถวจากคำสั่ง $sql
                                //////////////////////////////////////
                                if( !isset( $_GET['page'] ) ){
                                    $page = 1;
                                } else{
                                    $page = $_GET['page'];
                                }
                                $perPage = 40;
                                $totalPage = ceil(10/2); // floor , round , ceil
                                $startLimit = ($page-1) * $perPage; // 1 = (1-1)*4 , 2 = (2-1)*4 , หน้า3 = (3-1)*4 = 8
                                $sql .= "  limit $startLimit,$perPage"; // $sql = $sql . "  limit 0,$perPage";
                                if(!$result = $db -> query($sql)){
                                    die($db -> error);
                                }
                                $countPageResult = $result -> num_rows; // นับจำนวนที่มีในแต่ละหน้า
                                //////////////////////////////////////
                            ?>
                            <?php
                                for($i=1; $i<=$countPageResult; $i++){
                                    $seat_zone = $result -> fetch_assoc();
                                    $booking = $result1 -> fetch_assoc();?>
                                <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของโซนที่นั่ง -->
                                <td><?php echo $seat_zone['s_id']; ?></td>
                                <td><?php echo $seat_zone['s_zone']; ?></td>
                                <td><?php echo $seat_zone['s_qty']; ?></td>
                                <td><?php if(isset($booking['count(s_zone)']) != null){
                                    echo $booking['count(s_zone)'];
                                }else{
                                    echo 0;
                                } ?></td>
                                <td><?php if(isset($booking['count(s_zone)']) != null){
                                    echo $seat_zone['s_qty']-$booking['count(s_zone)'];
                                }else{
                                    echo $seat_zone['s_qty'];
                                } ?></td>
                                <td><?php if((isset($booking['count(s_zone)']) - $seat_zone['s_qty']) == 0){
                                    //โซนของที่นั่งเต็มแล้ว จะไม่สามารถกดปุ่มเลือกที่นั่งได้แล้ว
                                    echo '<a href="#" class="btn btn-danger btn-sm disabled">เต็มแล้ว</a>';
                                } else{//ถ้าที่นั่งยังว่างอยู่ สามารถเลือกที่นั่งตามใจชอบได้?><a href="PageBookingConcertCheckSeatZone.php?&seat_zone=<?php echo $seat_zone['s_id']; ?><?php
                                    //แสดงรหัส ID ของคอนเสิร์ต
                                    if(isset($_GET['concert'])){
                                        require_once 'connect.php';
                                        $sql = "SELECT * FROM concert where id=".$_GET['concert'];
                                        $query = mysqli_query($db,$sql);
                                        while($concert = mysqli_fetch_array($query)){
                                ?>&concert=<?php echo $concert['id']; }}?>" class="btn btn-success btn-sm"><i class="fa-solid fa-chair"></i> เลือกโซนที่นั่ง</a><?php }?></td> <!-- สามารถเลือกโซนที่นั่งได้ตามที่ต้องการ -->
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                            </div>
                        </div>                             
                    </div>   
                    <?php
                            }
                        }
                    ?>                
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>