<?php
include("db.php");

$name = $_POST['realname'];
$email = $_POST['contact_email'];
$photo = $_FILES['picture']['name'];
$tmp = $_FILES['picture']['tmp_name'];

$target = "uploads/" . time() . "_" . basename($photo);
move_uploaded_file($tmp, $target);

$stmt = $conn->prepare("INSERT INTO registration (full_name, email_addr, photo_path) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $target);
$stmt->execute();

$subject = "註冊通知：成功";
$content = " $name，您已成功註冊。\n\n照片已成功上傳。";

mail($email, $subject, $content);

echo "<h3>註冊成功</h3><a href='list.php'>查看所有註冊資料</a>";
?>
