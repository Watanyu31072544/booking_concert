  <meta charset="utf-8">
  <?php
  session_start();
  //ไฟล์เชื่อมต่อฐานข้อมูล
  include('dbconnect.php');
  //ประกาศตัวแปรรับค่าจากฟอร์ม
  if(isset($_GET['ad_username'])){
    $ad_username = $_GET['ad_username'];
    $ad_password = $_GET['ad_password'];

    $sql = "SELECT * FROM admin WHERE ad_username='".$_GET['ad_username']."' AND ad_password='".$_GET['ad_password']."'";
    $result = mysqli_query($db,$sql);
    
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
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เข้าสู่ระบบไม่สำเร็จ เนื่องจากผู้ดูแลไม่ได้เพิ่มสมาชิกเข้าร่วมทำงาน User กับ รหัสผ่านไม่ตรงกัน หรือไม่ได้อยู่ในระบบ จะต้องขอ Admin เป็นคนมีสิทธิ์เพิ่มสมาชิกด้วยนะครับผม'); </script> ";
      echo "<script> window.location='formLoginAdmin.php'; </script> ";
    }
  }
  mysqli_close($db);
  ?>