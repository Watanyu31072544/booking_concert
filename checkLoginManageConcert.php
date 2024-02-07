  <meta charset="utf-8">
  <?php
  if(!isset($_SESSION)){
    session_start();
  }
  //ไฟล์เชื่อมต่อฐานข้อมูล
  include('dbconnect.php');
  //ประกาศตัวแปรรับค่าจากฟอร์ม
  if(isset($_GET['ad_username'])){
    $ad_username = $_GET['ad_username'];
    $ad_password = $_GET['ad_password'];
    //เช็คชื่อผู้ใช้และรหัสผ่านของผู้ดูแลที่Adminเพิ่มสมาชิกไว้ก่อนหน้านี้
    $sql = "SELECT * FROM admin WHERE ad_username='".$_GET['ad_username']."' AND ad_password='".$_GET['ad_password']."'";
    $result = mysqli_query($db,$sql);
    //เช็คข้อมูลที่อยู่ในฐานข้อมูลหรือเปล่า ถ้าอยู่ในฐานข้อมูลจากการเพิ่มสมาชิกมาแล้ว สามารถเข้าสู่จัดการข้อมูลของคอนเสิร์ตได้
    if(mysqli_num_rows($result) == 1){
      $admin = mysqli_fetch_array($result);
      $_SESSION["ad_id"] = $admin["ad_id"];
      $_SESSION["ad_username"] = $admin["ad_username"];
      $_SESSION["ad_password"] = $admin["ad_password"];
      if($_SESSION["ad_id"] && $_SESSION["ad_username"] && $_SESSION["ad_password"]){
        echo "<script> alert ('ดีใจด้วยนะครับ เข้าสู่ระบบของผู้ดูแลได้สำเร็จ'); </script> ";
        echo "<script> window.location='ManageConcert.php'; </script> "; 
      }     
    }
    //ถ้าไม่ได้อยู่ในฐานข้อมูล Adminจะต้องทำการเพิ่มสมาชิกก่อนเท่านั้น ถึงจะเข้ามาจัดการข้อมูลของคอนเสิร์ตได้
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เข้าสู่ระบบไม่สำเร็จ เนื่องจากผู้ดูแลไม่ได้เพิ่มสมาชิกเข้าร่วมทำงาน User กับ รหัสผ่านไม่ตรงกัน หรือไม่ได้อยู่ในระบบ จะต้องขอ Admin เป็นคนมีสิทธิ์เพิ่มสมาชิกด้วยนะครับผม'); </script> ";
      echo "<script> window.location='formLoginAdmin.php'; </script> ";
    }
  }
  mysqli_close($db);
  ?>