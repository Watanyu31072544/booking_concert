  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $ad_fullname = $_POST['ad_fullname'];
    $ad_username = $_POST['ad_username'];
    $ad_role = $_POST['ad_role'];
    $ad_password = $_POST['ad_password'];

    $check = "SELECT * FROM admin where ad_fullname = '$ad_fullname' or ad_username = '$ad_username' or ad_role = '$ad_role' or ad_password = '$ad_password'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script> alert('ข้อมูลองผู้ดูแลซ้ำไป กรุณาเพิ่มสมาชิกใหม่อีกครั้ง !'); </script> ";
    echo "<script> window.location='formAddAdmin.php'; </script>";
    }else{

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
  }
  ?>