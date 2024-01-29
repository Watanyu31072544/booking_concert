  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $name = $_POST['name'];
    $data = $_POST['data'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO concert(name, data, location, date, time) value('$name','$data','$location','$date','$time')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('เพิ่มข้อมูลของคอนเสิร์ตได้สำเร็จ'); </script> ";
      echo "<script> window.location='ManageConcert.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('เพิ่มข้อมูลไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
  
  ?>