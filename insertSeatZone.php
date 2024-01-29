  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $s_zone = $_POST['s_zone'];
    $s_price = $_POST['s_price'];
    $s_qty = $_POST['s_qty'];

    $sql = "INSERT INTO seat_zone(s_zone, s_price, s_qty) value('$s_zone','$s_price','$s_qty')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('เพิ่มพื้นที่ของโซนที่นั่งได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageSeatZone.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เพิ่มข้อมูลไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
  
  ?>