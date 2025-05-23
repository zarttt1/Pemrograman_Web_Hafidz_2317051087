<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Dashboard</title></head>
<body>
    <h1>Hello, <?= htmlspecialchars($_SESSION['user']); ?>!</h1>
    <p>Please upload a picture.</p>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gambar" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
