  <meta charset="utf-8">
  <?php
  //ไฟล์เชื่อมต่อฐานข้อมูล
  include('dbconnect.php');
  //รับค่าที่มาจากฟอร์มแก้ไข
  $m_username = $_POST['m_username'];
  $m_password = $_POST['m_password'];
  $comfrim_password = $_POST['comfrim_password'];
  //เมื่อลูกค้าลืมรหัสผ่านแล้ว ให้มาทำการเปลี่ยนรหัสผ่าน
  $sql = "UPDATE member SET m_password='$m_password', comfrim_password='$comfrim_password' WHERE m_username='$m_username'";  
  $result = mysqli_query($db,$sql);
  //ถ้าทำการเปลี่ยนรหัสผ่านแล้ว
  if($result){
    echo "<script> alert ('แก้ไขรหัสผ่านของสมาชิก $m_username ได้สำเร็จแล้ว'); </script> ";
    echo "<script> window.location='formLoginMember.php'; </script> ";//เมื่อทำการเปลี่ยนรหัสผ่านแล้ว สามารถกลับมาหน้าเข้าสู่ระบบจองตั๋วคอนเสิร์ตได้ตามปกติ
  }
  else{
    echo "Error:" . $sql . "<br>" . mysqli_error($db);
    echo "<script> alert ('แก้ไขรหัสผ่านของสมาชิกไม่สำเร็จ เนื่องจากไม่ได้อยู่ในฐานระบบข้อมูล กรุณาลงทะเบียนก่อนเข้าสู่ระบบด้วยนะ'); </script> ";//ระบบฐานข้อมูลมีข้อผิดพลาด เนื่องจากไม่ได้สร้างตารางไว้ จะไม่สามารถเปลี่ยน Password ใหม่ได้
  }
  mysqli_close($db);
  ?>