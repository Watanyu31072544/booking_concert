  <meta charset="utf-8">
  <?php
    //ไฟล์เชื่อมต่อฐานข้อมูล
    include('dbconnect.php');
    //รับค่าที่มาจากฟอร์มแก้ไข
    
    $m_fullname = $_POST['m_fullname'];
    $m_username = $_POST['m_username'];
    $m_email = $_POST['m_email'];
    $m_phone = $_POST['m_phone'];
    $m_gender = $_POST['m_gender'];
    $birth_date = $_POST['birth_date'];
    $m_age = $_POST['m_age'];
    $m_occupation = $_POST['m_occupation'];
    $address = $_POST['address'];

    if(isset($_GET['member'])){
    $sql = "UPDATE member SET m_fullname='$m_fullname', m_username='$m_username', m_email='$m_email', m_phone='$m_phone', m_gender='$m_gender', birth_date='$birth_date', m_age='$m_age', m_occupation='$m_occupation' ,address='$address' WHERE m_id=".$_GET['member'];
    }
    $result = mysqli_query($db,$sql);
    if($result){
      echo "<script> alert ('แก้ไขข้อมูลของสมาชิกได้สำเร็จ'); </script> ";
      echo "<script> window.location='ProFileMember.php'; </script> ";
    }
    else{
      echo "Error:" . $sql . "<br>" . mysqli_error($db);
      echo "<script> alert ('แก้ไขข้อมูลของสมาชิกไม่สำเร็จ'); </script> ";
    }
    mysqli_close($db);
  ?>