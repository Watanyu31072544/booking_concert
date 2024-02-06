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
    //เช็คข้อมูลซ้ำที่อยู่ในฐานข้อมูลของผู้จอง
    $check = "SELECT * FROM booking where name = '$name' and s_zone = '$s_zone' and s_price = '$s_price'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
    //ผู้จองได้ที่นั่งไปแล้ว จะต้องกลับไปเลือกที่นั่งใหม่อีกครั้ง
    if($num > 0)
    {
    echo "<script> alert('คุณเพิ่งจองที่นั่งไว้แล้ว ไม่สามารถเลือกที่นั่งซ้ำได้แล้ว กรุณาเลือกชื่อคอนเสิร์ตใหม่อีกครั้ง หรือยกเลิกจองที่นั่งคอนเสิร์ตของคุณก่อน !'); </script> ";
    echo "<script> window.location='PageBookingConcert.php'; </script>";
    }else{
    //ผู้จองที่ยังไม่ได้เลือกที่นั่ง สามารถจองที่นั่งได้
    $sql = "INSERT INTO booking(m_fullname, m_email, m_phone, m_gender, birth_date, m_age, m_occupation, address, name, location, date, time, s_zone, s_price) value('$m_fullname','$m_email','$m_phone','$m_gender','$birth_date','$m_age','$m_occupation','$address','$name','$location','$date','$time','$s_zone','$s_price')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('จองที่นั่งของคอนเสิร์ตได้สำเร็จแล้ว ถ้าเปลี่ยนใจแล้ว สามารถยกเลิกจองที่นั่งของคุณได้เลย'); </script> ";
      echo "<script> window.location='PageHistoryBookingConcert.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('จองที่นั่งของคอนเสิร์ตไม่สำเร็จ เนื่องจากไม่ได้ฐานตารางข้อมูล'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
    }
  ?>