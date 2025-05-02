<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "web_assign";

$conn = new mysqli($host, $user, $pass, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}
?>
