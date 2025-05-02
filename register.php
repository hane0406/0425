<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>報名系統</title>
</head>
<body>
    <h2>註冊表單</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        姓名: <input type="text" name="realname" required><br><br>
        電子郵件: <input type="email" name="contact_email" required><br><br>
        上傳照片: <input type="file" name="picture" accept="image/*" required><br><br>
        <input type="submit" value="送出">
    </form>
</body>
</html>
