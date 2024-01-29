  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $ad_fullname = $_POST['ad_fullname'];
    $ad_username = $_POST['ad_username'];
    $ad_role = $_POST['ad_role'];
    $ad_password = $_POST['ad_password'];

    $sql = "INSERT INTO admin(ad_fullname, ad_username, ad_role, ad_password) value('$ad_fullname','$ad_username','$ad_role','$ad_password')";
    $result = mysqli_query($db,$sql);
    if($result){
    echo "<script> alert ('เพิ่มข้อมูลของผู้ดูแลได้สำเร็จ'); </script> ";
    echo "<script> window.location='ManageAdmin.php'; </script> ";
    }
    else{
    echo "Error:" . $sql . "<br>" . mysqli_error($db);
    echo "<script> alert ('เพิ่มข้อมูลของผู้ดูแลไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);

  ?>