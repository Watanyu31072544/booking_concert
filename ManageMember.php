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
            <div id="content">
                <?php
                include('topbarManage.php');
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <?php
                        include('connect.php');
                        $sql = "SELECT * FROM member";
                        $query = mysqli_query($db,$sql);
                    ?>
                    <?php
                    include('connect.php');
                    $sql = "select * from member";
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูลของลูกค้า <button type="button" class="btn btn-sm btn-success" disabled style="width: 100px; height: 39px;">
                            <?php echo $countResult; ?> คน
                        </button>
                        <button type="button" class="btn btn-sm btn-warning" disabled style="width: 100px; height: 39px;">
                            หน้าที่ <?php echo $page; ?>
                        </button></h1>
                        <div align="center">
                        
                        </div>
                    </div>
                    <form action="PageSearchManageMember.php" class="form-group my-3" method="POST">
                    <div class="input-group" align="right">
                        <div class="form-outline col-12" data-mdb-input-init>
                            <input type="search" id="search" class="form-control" name="member" required style="color: black;" placeholder="กรุณากรอกชื่อเต็มของสมาชิก"/>
                            <label class="form-label" for="form1"></label>
                        </div>
                    </div>
                    </form>
                    <table class="table table-striped mt-4">
                        <thead class="table text-color">
                            <tr>
                            <th scope="col" width="5%">ลำดับ</th>
                            <th scope="col" width="15%">ชื่อลูกค้า</th>
                            <th scope="col" width="15%">เบอร์โทรศัพท์</th>
                            <th scope="col" width="20%">แก้ไขข้อมูลของลูกค้า</th>
                            <th scope="col" width="20%">ดูข้อมูลของลูกค้า</th>                            
                            <th scope="col" width="20%">ลบข้อมูลของลูกค้า</th>
                            </tr>
                        </thead>
                        <tbody class="text-color">
                            <?php for($i=1; $i<=$countPageResult; $i++){
                                $member = $result -> fetch_assoc(); ?>
                            <tr>
                            <td><?php echo $member['m_id']; ?></td>
                            <td><?php echo $member['m_fullname']; ?></td>
                            <td><?php echo $member['m_phone']; ?></td>
                            <td><a href="formEditMember.php?member=<?php echo $member['m_id']; ?>"class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i> แก้ไขข้อมูลของลูกค้า</a></td>
                            <td><a href="formViewMember.php?member=<?php echo $member['m_id']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i> ดูข้อมูลของลูกค้า</a></td>
                            <td><a href="deleteMember.php?member=<?php echo $member['m_id']; ?>" onclick="return confirm('ลบข้อมูล <?php echo $member['m_fullname']; ?> ?');" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i> ลบข้อมูลของลูกค้า</a></td>	
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
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>