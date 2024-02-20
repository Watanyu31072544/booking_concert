<?php
    // เชื่อมต่อฐานข้อมูล
    require_once 'connect.php';

    // คำสั่ง SQL สำหรับแยกข้อมูลจำนวนที่นั่งของแต่ละโซนที่ถูกจองและโซนที่ยังไม่ได้เลือกตามชื่อคอนเสิร์ต
    $sql = "SELECT c.name AS concert_name, 
                   b.s_zone, 
                   SUM(CASE WHEN b.s_zone IS NOT NULL THEN 1 ELSE 0 END) AS reserved_seats,
                   SUM(CASE WHEN b.s_zone IS NULL THEN 1 ELSE 0 END) AS available_seats
            FROM concert c
            LEFT JOIN booking b ON c.id = c.id
            GROUP BY c.name, b.s_zone";

    // ดึงข้อมูลจากฐานข้อมูล
    $result = mysqli_query($db, $sql);

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if (mysqli_num_rows($result) > 0) {
        // แสดงข้อมูลโดยวนลูปผ่านผลลัพธ์ที่ได้
        while($row = mysqli_fetch_assoc($result)) {
            echo "คอนเสิร์ต: " . $row["concert_name"]. " - โซน: " . $row["s_zone"]. " - จำนวนที่นั่งที่ถูกจอง: " . $row["reserved_seats"]. " - จำนวนที่นั่งที่ยังไม่ได้เลือก: " . $row["available_seats"]. "<br>";
        }
    } else {
        echo "ไม่มีข้อมูลโซนที่นั่ง";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($db);
?>
