<?php
session_start();
require 'db.php'; // Menghubungkan ke database

// Mengambil data dari form
$name = $_POST['name'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

// Validasi pendaftaran (misalnya, cek apakah username sudah ada)
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user) {
    echo "Username sudah terdaftar. Silakan pilih username lain.";
    exit();
}

// Simpan pengguna baru
$stmt = $pdo->prepare("INSERT INTO users (name, username, password) VALUES (?, ?, ?)");
$stmt->execute([$name, $username, $password]);

// Pendaftaran berhasil
echo "Pendaftaran berhasil. Silakan <a href='login.php'>login</a>.";
?>