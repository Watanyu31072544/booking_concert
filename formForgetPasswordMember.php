<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>ลืมรหัสผ่าน *สำหรับ คนที่จำรหัสผ่านไม่ได้*</title>

</head>
<body>
        <div class="container-md" id="website">
            <h1 class="mt-3" align="center">ลืมรหัสผ่าน *สำหรับ คนที่จำรหัสผ่านไม่ได้*</h1>
            <form class="row g-4" method="post" action="editPasswordOfMemberBookingConcert.php">
            <div class="col-12">
                <label for="inputUserName" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="m_username" placeholder="กรุณากรอกชื่อผู้ใช้ด้วยครับ" style="color: black;" required>
            </div>
            <div class="col-12">
                <label for="inputPassword" class="form-label">รหัสผ่านใหม่</label>
                <input type="password" class="form-control" name="m_password" placeholder="กรุณาใส่รหัสผ่านใหม่ด้วยครับ" style="color: black;" required>
            </div>
            <div class="col-12">
                <label for="inputComfirmPassword" class="form-label">ยืนยันรหัสผ่านใหม่</label>
                <input type="password" class="form-control" name="comfrim_password" placeholder="กรุณาใส่รหัสผ่านอีกครั้งใหม่ด้วยครับ" style="color: black;" required>
            </div>
            <div class="my-3">
                <input type="submit" value="ยืนยันเปลี่ยนรหัสผ่าน" class="btn btn-success">
                <a href="formLoginMember.php" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิกเปลี่ยนรหัสผ่าน</a>
            </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>