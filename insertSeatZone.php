  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $s_zone = $_POST['s_zone'];
    $s_price = $_POST['s_price'];

    $check = "SELECT * FROM seat_zone where s_zone = '$s_zone' and s_price = '$s_price'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script> alert('คุณเพิ่งเพิ่มโซนที่นั่งไปแล้ว กรุณาเพิ่มชื่อโซนที่นั่งใหม่อีกครั้ง !'); </script> ";
    echo "<script> window.location='formAddSeatZone.php'; </script>";
    }else{

    $sql = "INSERT INTO seat_zone(s_zone, s_price) value('$s_zone','$s_price')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('เพิ่มพื้นที่ของโซนที่นั่งได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageSeatZone.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เพิ่มข้อมูลโซนที่นั่งไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
    }
  ?>