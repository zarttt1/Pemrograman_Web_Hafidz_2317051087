<?php
session_start();
include 'koneksi/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE ussername='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
    exit;
} else {
    echo "login gagal";
}
?>
