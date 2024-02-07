<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>จัดการข้อมูลของลูกค้า</title>

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
    <div id="wrapper" style="width: auto; height: auto;">
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
                    <?php
                    include('connect.php');
                    $sql = "select * from seat_zone";
                    if(!$result = $db -> query($sql)){
                        die($db -> error);
                    }
                    $countResult = $result -> num_rows; //นับจำนวนแถวจากคำสั่ง $sql
                    if( !isset( $_GET['page'] ) ){
                        $page = 1;
                    } else{
                        $page = $_GET['page'];
                    }
                    $perPage = 5;
                    $totalPage = ceil(10/3); // floor , round , ceil
                    $startLimit = ($page-1) * $perPage; // 1 = (1-1)*4 , 2 = (2-1)*4 , หน้า3 = (3-1)*4 = 8
                    $sql .= "  limit $startLimit,$perPage"; // $sql = $sql . "  limit 0,$perPage";
                    if(!$result = $db -> query($sql)){
                        die($db -> error);
                    }
                    $countPageResult = $result -> num_rows;
                    ?>
                    <div class="card-body">
                            <div class="table-responsive">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">จัดการพื้นที่ของโซนที่นั่ง <button type="button" class="btn btn-sm btn-success" style="width: 100px; height: 39px; color:black;">
                                    <?php echo $countResult; ?> ที่นั่ง
                                </button> <!-- แสดงจำนวนโซนที่นั่ง -->
                                <button type="button" class="btn btn-sm btn-warning" style="width: 100px; height: 39px; color:black;">
                                    หน้าที่ <?php echo $page; ?>
                                </button> <!-- แสดงจำนวนหน้าที่ของโซนที่นั่ง --></h1>
                                <div align="center">
                                    <button type="submit" class="btn btn-success" onClick="window.location='formAddSeatZone.php'"><i class="fa-solid fa-plus"></i>
                                    &nbsp;เพิ่มข้อมูลของโซนที่นั่ง</button> <!-- หน้าเพิ่มข้อมูลของโซนที่นั่ง -->
                                </div>
                            </div>
                            <!-- กรอกค้นหาของโซนที่นั่ง -->
                            <form action="PageSearchManageSeatZone.php" class="form-group my-3" method="POST">
                            <div class="input-group" align="right">
                                <div class="form-outline col-12" data-mdb-input-init>
                                    <input type="search" id="search" class="form-control" name="seat_zone" required style="color: black;" placeholder="กรุณากรอกชื่อโซนของโซนที่นั่ง"/>
                                    <label class="form-label" for="form1"></label>
                                </div>
                            </div>
                            </form>
                            <?php
                                //แสดงฐานข้อมูลของโซนที่นั่ง
                                include('connect.php');
                                $sql = "SELECT * FROM seat_zone";
                                $query = mysqli_query($db,$sql);
                            ?>
                            <table class="table table-striped mt-4">
                                <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของโซนที่นั่ง -->
                                <thead class="table table-success text-color">
                                    <tr>
                                    <th scope="col" width="5%">ลำดับ</th>
                                    <th scope="col" width="15%">ชื่อโซนที่นั่ง</th>
                                    <th scope="col" width="20%">แก้ไขข้อมูลของลูกค้า</th>
                                    <th scope="col" width="20%">ดูข้อมูลของลูกค้า</th>                            
                                    <th scope="col" width="20%">ลบข้อมูลของลูกค้า</th>
                                    </tr>
                                </thead>
                                <tbody class="text-color">
                                    <?php for($i=1; $i<=$countPageResult; $i++){
                                        $seat_zone = $result -> fetch_assoc(); ?>
                                    <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของโซนที่นั่ง -->
                                    <td><?php echo $seat_zone['s_id']; ?></td>
                                    <td><?php echo $seat_zone['s_zone']; ?></td>
                                    <td><a href="formEditSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>"class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> แก้ไขพื้นที่ของโซนที่นั่ง</a></td> <!-- หน้าแก้ไขข้อมูลของโซนที่นั่ง -->
                                    <td><a href="formViewSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของโซนที่นั่ง</a></td> <!-- หน้าดูข้อมูลของโซนที่นั่ง -->
                                    <td><a href="deleteSeatZone.php?seat_zone=<?php echo $seat_zone['s_id']; ?>" onclick="return confirm('ลบข้อมูล <?php echo $seat_zone['s_zone']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> ลบข้อมูลของโซนที่นั่ง</a></td>	<!-- ลบข้อมูลของโซนที่นั่ง -->
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                        <li class="page-item  <?php if( $page==1 ){ echo "disabled"; } ?>">
                                        <a class="page-link" href="?page=<?php echo $page-1; ?>">Previous</a>
                                        </li>
                                        <?php for($p=1; $p<=$totalPage; $p++){ ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                                        <?php }?>
                                        <li class="page-item  <?php if( $page==$totalPage ){ echo "disabled"; } ?>">
                                        <a class="page-link" href="?page=<?php echo $page+1; ?>">Next</a>
                                        </li>
                                </ul>
                            </nav>   
                        </div>    
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