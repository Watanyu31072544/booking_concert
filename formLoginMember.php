<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>เข้าสู่ระบบจองตั๋วคอนเสิร์ต สำหรับ Member</title>
</head>
<body>    
        <div class="container-md" id="website">
            <h1 class="mt-3" align="center">เข้าสู่ระบบจองตั๋วคอนเสิร์ต สำหรับ Member</h1>
            <form class="row g-3" action="checkLoginBookingConcert.php">
            <div class="col-12">
                <label for="inputUserName" class="form-label">ชื่อผู้ใช้</label>
                <input type="username" class="form-control" id="m_username" name="m_username" style="color: black;" required>
            <div class="col-12">
                <label for="inputPassword" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="m_password" name="m_password" style="color: black;" required>
            </div>
            <br>
            <div class="my-3">
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success">
                <a href="formRegisterMember.php" class="btn btn-success">ลงทะเบียน</a>
                <a href="formForgetPasswordMember.php" class="btn btn-warning">ลืมรหัสผ่าน</a>
                <a href="formClickUser.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;กลับเข้าสู่ปุ่ม User</a>
            </div>
            </form>
        </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<script>src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
<script src="jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>