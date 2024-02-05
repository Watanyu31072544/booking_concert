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

    $check = "SELECT * FROM concert where name = '$name'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script> alert('เพิ่มชื่อข้อมูลของคอนเสิร์ตซ้ำไป กรุณาเพิ่มชื่อข้อมูลของคอนเสิร์ตใหม่อีกครั้ง !'); </script> ";
    echo "<script> window.location='formAddConcert.php'; </script>";
    }else{

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
    }
  ?>