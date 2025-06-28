<?php
session_start();
require 'db.php'; // Menghubungkan ke database

// Mengambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi login
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $username;
    header('Location: index.php'); // Redirect ke halaman utama
    exit();
}

// Jika login gagal
echo "Login gagal. Username atau password salah.";
?>