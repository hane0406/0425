<?php
include("db.php");

$result = $conn->query("SELECT * FROM registration");
?>

<h2>註冊名單</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>Email</th>
        <th>照片</th>
    </tr>
<?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['full_name']) ?></td>
        <td><?= htmlspecialchars($row['email_addr']) ?></td>
        <td><img src="<?= $row['photo_path'] ?>" width="100"></td>
    </tr>
<?php endwhile; ?>
</table>
