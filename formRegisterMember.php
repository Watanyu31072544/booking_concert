<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>ลงทะเบียน *สำหรับ คนที่ยังไม่มีสมาชิก*</title>

</head>
<body>
        <div class="container-md" id="website">
            <h1 class="mt-3" align="center">ลงทะเบียน *สำหรับ คนที่ยังไม่มีสมาชิก*</h1>
            <form class="row g-4" method="post" action="insertRegister.php">
            <div class="col-6">
                <label for="inputFullName" class="form-label">ชื่อเต็ม</label>
                <input type="text" class="form-control" name="m_fullname" style="color: black;" placeholder="กรุณากรอกชื่อเต็มด้วยครับ" required>
            </div>
            <div class="col-6">
                <label for="inputUserName" class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="m_username" style="color: black;" placeholder="กรุณากรอกชื่อผู้ใช้ด้วยครับ" required>
            </div>
            <div class="col-6">
                <label for="inputEmail" class="form-label">อีเมล์</label>
                <input type="text" class="form-control" name="m_email" style="color: black;" placeholder="กรุณากรอกอีเมล์ด้วยครับ" required>
            </div>
            <div class="col-6">
                <label for="inputPhone" class="form-label">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" name="m_phone" style="color: black;" placeholder="กรุณากรอกเบอร์โทรศัพท์ด้วยครับ" required>
            </div>
            <div class="col-6">
                <label for="inputGender" class="form-label">เพศ</label>
                <input type="text" class="form-control" name="m_gender" style="color: black;" placeholder="กรุณากรอกเพศด้วยครับ" required>
            </div>           
            <div class="col-6">
                <label for="inputBirthDate" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" name="birth_date" class="form-control" style="color: black;" required>
            </div>
            <div class="col-6">
                <label for="inputAge" class="form-label">อายุ</label>
                <input type="text" class="form-control" name="m_age" style="color: black;" placeholder="อายุเท่าไหร่" required>
            </div>
            <div class="col-6">
                <label for="inputOccupation" class="form-label">อาชีพ</label>
                <input type="text" class="form-control" name="m_occupation" style="color: black;" placeholder="กรุณากรอกอาชีพด้วยครับ" required>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" name="address" style="color: black;" placeholder="กรุณากรอกที่อยู่ด้วยครับ" required>
            </div>
            <div class="col-6">
                <label for="inputPassword" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="m_password" style="color: black;" placeholder="กรุณาใส่รหัสผ่านด้วยครับ" required>
            </div>
            <div class="col-6">
                <label for="inputComfirmPassword" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="comfrim_password" style="color: black;" placeholder="กรุณาใส่รหัสผ่านอีกครั้งด้วยครับ" required>
            </div>
            <div class="my-3">
                    <input type="submit" value="ยืนยันลงทะเบียน" class="btn btn-success">
                    <input type="reset" value="ล้างข้อมูล" class="btn btn-warning">
                    <a href="formLoginMember.php" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ยกเลิก</a>
            </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>