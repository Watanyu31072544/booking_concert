<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>เข้าสู่ระบบจองตั๋วคอนเสิร์ต สำหรับ Admin</title>
</head>
<body>
        <div class="container-md" id="website">
            <!-- หน้าล็อกอินของผู้ดูแล -->            
            <h1 class="mt-3" align="center">เข้าสู่ระบบจองตั๋วคอนเสิร์ต สำหรับ Admin</h1>
            <form class="row g-3" action="checkLoginManageConcert.php">
            <div class="col-12">
                <label for="inputUserName" class="form-label">ชื่อผู้ใช้</label>
                <input type="username" class="form-control" id="ad_username" style="color: black;" name="ad_username" required>
            <div class="col-12">
                <label for="inputPassword" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="ad_password" style="color: black;" name="ad_password" required>
            </div>
            <br>
            <div class="row g-4">
                <div class="d-grid gap-2 col-sm-2">
                <input type="submit" value="เข้าสู่ระบบ" class="btn btn-success"> <!-- เมื่อ Admin กรอกมาแล้ว สามารถทำการเข้าสู่เช็ค Username และ Password ของผู้ดูแล --> 
                </div>
                <div class="d-grid gap-2 col-sm-2">
                <a href="formClickUser.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i>&nbsp;กลับเข้าสู่ปุ่ม User</a> <!-- เมื่อเผลอกดปุ่มผิดหน้าให้กลับมาหน้าสู่ระบบจองตั๋วคอนเสิร์ต ในฐานะว่าอะไร --> 
                </div>
            </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<script>src="https://code.jquery.com/jquery-3.6.0.min.js"</script>
<script src="jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>