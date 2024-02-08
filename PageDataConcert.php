<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ข้อมูลของคอนเสิร์ต</title>

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
                        include('connect.php');
                        $sql = "select * from concert";
                        if(!$result = $db -> query($sql)){
                            die($db -> error);
                        }
                        $countResult = $result -> num_rows; //แสดงจำนวนคอนเสิร์ต
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
                    <!-- Page Heading -->
                    <div class="card-body">
                        <div class="table-responsive">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-color-800" id="website">ข้อมูลของคอนเสิร์ต
                            <button type="button" class="btn btn-sm btn-success" style="width: auto; height: auto; color: black;">
                                    <?php echo $countResult; ?> คอนเสิร์ต
                            </button> <!-- แสดงจำนวนคอนเสิร์ต -->
                            <button type="button" class="btn btn-sm btn-warning" style="width: auto; height: auto; color: black;">
                                    หน้าที่ <?php echo $page; ?>
                            </button> <!-- แสดงจำนวนหน้าที่ของคอนเสิร์ต --> </h1>
                        </div>
                        <?php
                            include('connect.php');
                            $sql = "SELECT * FROM concert";
                            $query = mysqli_query($db,$sql);
                        ?>
                        <!-- กรอกค้นหาสถานที่จัดคอนเสิร์ต -->
                        <form action="PageSearchDataConcert.php" class="form-group my-3" method="POST">
                            <div class="input-group" align="right">
                                <div class="form-outline col-12" data-mdb-input-init>
                                    <input type="search" id="search" class="form-control" name="concert" required style="color: black;" placeholder="กรุณากรอกชื่อสถานที่จัดคอนเสิร์ตด้วยครับ"/>
                                    <label class="form-label" for="form1"></label>
                                </div>                            
                            </div>
                        </form>
                        <table class="table table-striped mt-4">
                            <!-- หัวข้อชื่อตารางที่กำหนดขึ้นมาเองของข้อมูลคอนเสิร์ต -->
                            <thead class="table-success text-color" align="center">
                                <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">ชื่อคอนเสิร์ต</th>
                                <th scope="col">สถานที่จัดคอนเสิร์ต</th>
                                <th scope="col">รายละเอียดของคอนเสิร์ต</th>
                                </tr>
                            </thead>
                            <tbody class="text-color" align="center">
                            <?php for($i=1; $i<=$countPageResult; $i++){
                                    $concert = $result -> fetch_assoc(); ?>
                                <tr> <!-- แสดงตารางที่อยู่ในฐานข้อมูลของคอนเสิร์ต -->
                                <td><?php echo $concert['id']; ?></td>
                                <td><?php echo $concert['name']; ?></td>
                                <td><?php echo $concert['location']; ?></td>
                                <td><a href="formViewConcertOfMember.php?concert=<?php echo $concert['id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของคอนเสิร์ต</a></td> <!-- หน้าดูข้อมูลของคอนเสิร์ต สามารถดูได้ -->
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