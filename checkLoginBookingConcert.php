  <meta charset="utf-8">
  <?php
  if(!isset($_SESSION)){//เช็คข้อมูลมีค่ากำหนดไว้หรือไม่
    session_start();
  }
  //ไฟล์เชื่อมต่อฐานข้อมูล
  require_once('dbconnect.php');
  //ประกาศตัวแปรรับค่าจากฟอร์ม
  if(isset($_GET['m_username'])){
    $m_username = $_GET['m_username'];
    $m_password = $_GET['m_password'];
    //เช็คชื่อผู้ใช้และรหัสผ่านของสมาชิกที่ลงทะเบียนไว้ก่อนหน้านี้
    $sql = "SELECT * FROM member WHERE m_username='".$_GET['m_username']."' AND m_password='".$_GET['m_password']."'";
    $result = mysqli_query($db,$sql);
    //เช็คข้อมูลที่อยู่ในฐานข้อมูลหรือเปล่า ถ้าอยู่ในฐานข้อมูลจากการลงทะเบียนมาแล้ว สามารถเข้าสู่ระบบจองตั๋วคอนเสิร์ตได้
    if(mysqli_num_rows($result) == 1){
      $member = mysqli_fetch_array($result);
      $_SESSION["m_id"] = $member["m_id"];
      $_SESSION["m_username"] = $member["m_username"];
      $_SESSION["m_password"] = $member["m_password"];
      $_SESSION["m_email"] = $member["m_email"];
      if($_SESSION["m_id"] && $_SESSION["m_username"] && $_SESSION["m_password"]){
        echo "<script> alert ('ดีใจด้วยนะครับ เข้าสู่ระบบของสมาชิกได้สำเร็จ'); </script> ";
        echo "<script> window.location='PageBookingConcert.php'; </script> "; 
      }     
    }
    //ถ้าไม่ได้อยู่ในฐานข้อมูล ลูกค้าจะต้องทำการลงทะเบียนก่อนเท่านั้น
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เข้าสู่ระบบไม่สำเร็จ หรือไม่ได้อยู่ในระบบ จะต้องลงทะเบียนก่อนนะครับผม'); </script> ";
      echo "<script> window.location='formLoginMember.php'; </script> ";
    }
  }
  mysqli_close($db);
  ?>