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

    $check = "SELECT * FROM booking where m_fullname = '$m_fullname' and m_email = '$m_email' and m_phone = '$m_phone' and m_gender = '$m_gender' and birth_date = '$birth_date' and m_age = '$m_age' and m_occupation = '$m_occupation' and address = '$address' and name = '$name' and location = '$location' and date = '$date' and time = '$time' or s_zone = '$s_zone' and s_price = '$s_price'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script> alert('เพิ่งจองที่นั่งไว้แล้ว ไม่สามารถเลือกที่นั่งเพิ่มอีกได้แล้ว กรุณาเลือกชื่อคอนเสิร์ตใหม่อีกครั้ง หรือยกเลิกจองที่นั่งคอนเสิร์ตของคุณก่อน !'); </script> ";
    echo "<script> window.location='PageBookingConcert.php'; </script>";
    }else{

    $sql = "INSERT INTO booking(m_fullname, m_email, m_phone, m_gender, birth_date, m_age, m_occupation, address, name, location, date, time, s_zone, s_price) value('$m_fullname','$m_email','$m_phone','$m_gender','$birth_date','$m_age','$m_occupation','$address','$name','$location','$date','$time','$s_zone','$s_price')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('จองที่นั่งของคอนเสิร์ตได้สำเร็จแล้ว ถ้าเปลี่ยนใจแล้ว สามารถยกเลิกจองที่นั่งของคุณได้เลย'); </script> ";
      echo "<script> window.location='PageHistoryBookingConcert.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('จองที่นั่งของคอนเสิร์ตไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
    }
  ?>