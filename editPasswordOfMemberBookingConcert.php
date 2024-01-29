  <meta charset="utf-8">
  <?php
  //ไฟล์เชื่อมต่อฐานข้อมูล
  include('dbconnect.php');
  //รับค่าที่มาจากฟอร์มแก้ไข
  
  $m_username = $_POST['m_username'];
  $m_password = $_POST['m_password'];
  $comfrim_password = $_POST['comfrim_password'];

  
  $sql = "UPDATE member SET m_password='$m_password', comfrim_password='$comfrim_password' WHERE m_username='$m_username'";
  
  $result = mysqli_query($db,$sql);
  if($result){
    echo "<script> alert ('แก้ไขรหัสผ่านของสมาชิก $m_username ได้สำเร็จแล้ว'); </script> ";
    echo "<script> window.location='formLoginMember.php'; </script> ";
  }
  else{
    echo "Error:" . $sql . "<br>" . mysqli_error($db);
    echo "<script> alert ('แก้ไขรหัสผ่านของสมาชิกไม่สำเร็จ เนื่องจากไม่ได้อยู่ในฐานระบบข้อมูล กรุณาลงทะเบียนก่อนเข้าสู่ระบบด้วยนะ'); </script> ";
  }
  mysqli_close($db);
  ?>