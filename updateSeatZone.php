  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //รับค่าที่มาจากฟอร์มแก้ไข
    
    $s_zone = $_POST['s_zone'];
    $s_price = $_POST['s_price'];
    $s_qty = $_POST['s_qty'];

    if(isset($_GET['seat_zone'])){
    $sql = "UPDATE seat_zone SET s_zone='$s_zone', s_price='$s_price', s_qty='$s_qty' WHERE s_id=".$_GET['seat_zone'];
    }//ทำการแก้ไขพื้นที่ของโซนที่นั่ง
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('แก้ไขพื้นที่หรือราคาของโซนที่นั่งได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageSeatZone.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('แก้ไขข้อมูลของสมาชิกไม่สำเร็จ'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
  ?>