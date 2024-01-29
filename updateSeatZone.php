  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    
    
    $s_zone = $_POST['s_zone'];
    $s_price = $_POST['s_price'];

    if(isset($_GET['seat_zone'])){
    $sql = "UPDATE seat_zone SET s_zone='$s_zone', s_price='$s_price' WHERE s_id=".$_GET['seat_zone'];
    }
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('แก้ไขพื้นที่หรือราคาของโซนที่นั่งได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageSeatZone.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('แก้ไขข้อมูลของสมาชิกไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
  ?>