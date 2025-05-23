<?php
session_start();
include 'koneksi/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$file = $_FILES['gambar'];
$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if (in_array($ext, ['jpg','jpeg','png'])) {
    $folder = 'uploads/';
    if (!is_dir($folder)) mkdir($folder, 0755);
    $newName = uniqid() . ".$ext";
    $path = $folder . $newName;

    if (move_uploaded_file($file['tmp_name'], $path)) {
        $user = $_SESSION['user'];
        mysqli_query($conn, "UPDATE user SET upload='$path' WHERE ussername='$user'");
        echo "Upload sukses! <a href='dashboard.php'>Kembali</a>";
    } else {
        echo "Gagal upload file.";
    }
} else {
    echo "Format file tidak didukung.";
}
