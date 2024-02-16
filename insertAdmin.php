  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $ad_fullname = $_POST['ad_fullname'];
    $ad_username = $_POST['ad_username'];
    $ad_email = $_POST['ad_email'];
    $ad_role = $_POST['ad_role'];
    $ad_password = $_POST['ad_password'];
    //เช็คข้อมูลซ้ำที่อยู่ในฐานข้อมูลของผู้ดูแล
    $check = "SELECT * FROM admin where ad_fullname = '$ad_fullname' and ad_username = '$ad_username' and ad_email = '$ad_email' and ad_role = '$ad_role' and ad_password = '$ad_password'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
    //มีข้อมูลซ้ำกัน จะต้องกลับไปเพิ่มสมาชิกผู้ดูแลใหม่อีกครั้ง
    if($num > 0)
    {
    echo "<script> alert('ข้อมูลของผู้ดูแลซ้ำไป กรุณาเพิ่มสมาชิกของผู้ดูแลใหม่อีกครั้ง !'); </script> ";
    echo "<script> window.location='formAddAdmin.php'; </script>";
    }else{
    //ข้อมูลไม่มีซ้ำ สามารถเพิ่มสมาชิกผู้ดูแลได้
    $sql = "INSERT INTO admin(ad_fullname, ad_username, ad_email, ad_role, ad_password) value('$ad_fullname','$ad_username','$ad_email','$ad_role','$ad_password')";
    $result = mysqli_query($db,$sql);
    if($result){
    echo "<script> alert ('เพิ่มข้อมูลของผู้ดูแลได้สำเร็จ'); </script> ";
    echo "<script> window.location='ManageAdmin.php'; </script> ";
    }
    else{
    echo "Error:" . $sql . "<br>" . mysqli_error($db);
    echo "<script> alert ('เพิ่มข้อมูลของผู้ดูแลไม่สำเร็จ เนื่องจากไม่ได้ฐานตารางข้อมูล'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
  }
  ?>