  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //รับค่าที่มาจากฟอร์มแก้ไข
    
    $ad_fullname = $_POST['ad_fullname'];
    $ad_username = $_POST['ad_username'];
    $ad_email = $_POST['ad_email'];
    $ad_role = $_POST['ad_role'];
    $ad_password = $_POST['ad_password'];

    if(isset($_GET['admin'])){
    $sql = "UPDATE admin SET ad_fullname='$ad_fullname', ad_username='$ad_username', ad_email='$ad_email', ad_role='$ad_role', ad_password='$ad_password' WHERE ad_id=".$_GET['admin'];
    }//ทำการแก้ไขข้อมูลของผู้ดูแล
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('แก้ไขข้อมูลของผู้ดูแลได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageAdmin.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('แก้ไขข้อมูลของสมาชิกไม่สำเร็จ'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
  ?>