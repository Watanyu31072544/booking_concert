<meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $m_fullname = $_POST['m_fullname'];
    $m_email = $_POST['m_email'];
    $m_phone = $_POST['m_phone'];
    $m_gender = $_POST['m_gender'];
    $birth_date = $_POST['birth_date'];
    $m_age = $_POST['m_age'];
    $m_occupation = $_POST['m_occupation'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $s_zone = $_POST['s_zone'];
    $s_price = $_POST['s_price'];

    $sql = "INSERT INTO booking(m_fullname, m_email, m_phone, m_gender, birth_date, m_age, m_occupation, address, name, location, date, time, s_zone, s_price) value('$m_fullname','$m_email','$m_phone','$m_gender','$birth_date','$m_age','$m_occupation','$address','$name','$location','$date','$time','$s_zone','$s_price')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('จองที่นั่งของคอนเสิร์ตได้สำเร็จแล้ว'); </script> ";
      echo "<script> window.location='PageHistoryBookingConcert.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('จองที่นั่งของคอนเสิร์ตไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
  
  ?>