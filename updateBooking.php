  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //รับค่าที่มาจากฟอร์มแก้ไข
    
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

    if(isset($_GET['booking'])){
    $sql = "UPDATE booking SET m_fullname='$m_fullname', m_email='$m_email', m_phone='$m_phone', m_gender='$m_gender', birth_date='$birth_date', m_age='$m_age', m_occupation='$m_occupation', address='$address', name='$name', location='$location', date='$date', time='$time', s_zone='$s_zone', s_price='$s_price' WHERE booking_id=".$_GET['booking'];
    }//ทำการแก้ไขข้อมูลของคอนเสิร์ต
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('แก้ไขข้อมูลของผู้จองได้สำเร็จ'); </script> ";
      echo "<script> window.location='PageHistoryBookingConcertOfMember.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('แก้ไขข้อมูลของคอนเสิร์ตไม่สำเร็จ'); </script> ";//ไม่อยู่ในฐานข้อมูล เนื่องจากไม่ได้สร้างฐานข้อมูล หรือมีข้อผิดพลาด
    }
    mysqli_close($db);
  ?>