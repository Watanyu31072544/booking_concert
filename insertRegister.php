  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $m_fullname = $_POST['m_fullname'];
    $m_username = $_POST['m_username'];
    $m_email = $_POST['m_email'];
    $m_phone = $_POST['m_phone'];
    $m_gender = $_POST['m_gender'];
    $birth_date = $_POST['birth_date'];
    $m_age = $_POST['m_age'];
    $m_occupation = $_POST['m_occupation'];
    $address = $_POST['address'];
    $m_password = $_POST['m_password'];
    $comfrim_password = $_POST['comfrim_password'];

    $check = "SELECT * FROM member where m_fullname = '$m_fullname' and m_username = '$m_username' and m_email = '$m_email' and m_phone = '$m_phone'";

    $result1 = mysqli_query($db, $check) or die(mysqli_error($db));
    $num=mysqli_num_rows($result1);
 
    if($num > 0)
    {
    echo "<script> alert('คุณเพิ่งเพิ่มข้อมูลสมาชิกไปแล้ว กรุณาเพิ่มชื่อข้อมูลของสมาชิกใหม่อีกครั้ง !'); </script> ";
    echo "<script> window.location='formRegisterMember.php'; </script>";
    }else{
    
    $sql = "INSERT INTO member(m_fullname, m_username, m_email, m_phone, m_gender, birth_date, m_age, m_occupation, address, m_password, comfrim_password) value('$m_fullname','$m_username','$m_email','$m_phone','$m_gender','$birth_date','$m_age','$m_occupation','$address','$m_password','$comfrim_password')";
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('ดีใจด้วยนะ ลงทะเบียนไว้ได้สำเร็จ'); </script> ";
      echo "<script> window.location='formLoginMember.php'; </script> ";
    }
    else{
      echo "<script> alert ('ลงทะเบียนไม่สำเร็จ จะต้องลงทะเบียนใหม่'); </script> ";
    }
    mysqli_close($db);
  }
  ?>