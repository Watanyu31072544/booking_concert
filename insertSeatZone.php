  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $s_zone = $_POST['s_zone'];
    $s_price = $_POST['s_price'];
    $s_qty = $_POST['s_qty'];
    //เช็คข้อมูลซ้ำที่อยู่ในฐานข้อมูลของโซนที่นั่ง
    $check = "SELECT * FROM seat_zone where s_zone = '$s_zone' and s_price = '$s_price'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
    //มีข้อมูลซ้ำกัน จะต้องกลับไปเพิ่มโซนที่นั่งใหม่อีกครั้ง
    if($num > 0)
    {
    echo "<script> alert('คุณเพิ่งเพิ่มโซนที่นั่งไปแล้ว กรุณาเพิ่มชื่อโซนที่นั่งใหม่อีกครั้ง !'); </script> ";
    echo "<script> window.location='formAddSeatZone.php'; </script>";
    }else{
    //ข้อมูลไม่มีซ้ำ สามารถเพิ่มโซนที่นั่งได้
    $sql = "INSERT INTO seat_zone(s_zone, s_price,s_qty) value('$s_zone','$s_price','$s_qty')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('เพิ่มพื้นที่ของโซนที่นั่งได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageSeatZone.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เพิ่มข้อมูลโซนที่นั่งไม่สำเร็จ เนื่องจากไม่ได้ฐานตารางข้อมูล'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
    }
  ?>