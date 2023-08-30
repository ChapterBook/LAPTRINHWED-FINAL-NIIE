<?php
session_start();
require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $videoId = $_POST["video_id"];
    $points = $_POST["points"];
    $userId = $_SESSION["user_id"]; // Lấy ID của người dùng đã đăng nhập

    // Chèn dữ liệu vào bảng watched_videos
    $insertQuery = "INSERT INTO watched_videos (user_id, video_id, points_earned) VALUES (?, ?, ?)";
    if ($stmt = $mysql_db->prepare($insertQuery)) {
        $stmt->bind_param("iss", $userId, $videoId, $points);
        $stmt->execute();
        $stmt->close();
    }
}
?>
