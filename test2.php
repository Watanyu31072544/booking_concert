<?php
    // เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';

    // คำสั่ง SQL สำหรับแยกข้อมูลตามโซนและนับจำนวนที่นั่งในแต่ละโซน
    $sql = "SELECT c.name AS concert_name, b.s_zone, COUNT(b.s_zone) AS seat_count
            FROM concert c
            LEFT JOIN booking b ON c.id = b.booking_id
            WHERE c.name IS NULL
            GROUP BY c.name, b.s_zone";

    // ดึงข้อมูลจากฐานข้อมูล
    $result = mysqli_query($db, $sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if (mysqli_num_rows($result) > 0) {
        // แสดงข้อมูลโดยวนลูปผ่านผลลัพธ์ที่ได้
        while($row = mysqli_fetch_assoc($result)) {
            echo "คอนเสิร์ต: " . $row["name"]. " - โซน: " . $row["s_zone"]. " - จำนวนที่นั่ง: " . $row["seat_count"]. "<br>";
        }
    } else {
        echo "ไม่มีข้อมูลโซนที่นั่ง";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($db);
?>
