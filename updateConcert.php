  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //รับค่าที่มาจากฟอร์มแก้ไข
    
    $name = $_POST['name'];
    $data = $_POST['data'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    if(isset($_GET['concert'])){
    $sql = "UPDATE concert SET name='$name', data='$data', location='$location', date='$date', time='$time' WHERE id=".$_GET['concert'];
    }//ทำการแก้ไขข้อมูลของคอนเสิร์ต
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('แก้ไขข้อมูลของคอนเสิร์ตได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageConcert.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('แก้ไขข้อมูลของคอนเสิร์ตไม่สำเร็จ'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
  ?>