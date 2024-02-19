<?php
    // เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';

    // คำสั่ง SQL สำหรับแยกข้อมูลตามโซนและนับจำนวนที่นั่งในแต่ละโซน
    $sql = "SELECT s_zone, COUNT(*) AS seat_count FROM booking GROUP BY s_zone";

    // ดึงข้อมูลจากฐานข้อมูล
    $result = mysqli_query($db, $sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if (mysqli_num_rows($result) > 0) {
        // แสดงข้อมูลโดยวนลูปผ่านผลลัพธ์ที่ได้
        while($row = mysqli_fetch_assoc($result)) {
            echo "โซน: " . $row["s_zone"]. " - จำนวนที่นั่ง: " . $row["seat_count"]. "<br>";
        }
    } else {
        echo "ไม่มีข้อมูลโซนที่นั่ง";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($db);
?>