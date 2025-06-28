<?php
session_start();
require 'db.php'; // Menghubungkan ke database

// Mengambil data dari form
$name = $_POST['name'];
$username = $_POST['username'];

// Validasi pendaftaran (misalnya, cek apakah username sudah ada)
$stmt = $pdo->prepare("SELECT * FROM students WHERE username = ?");
$stmt->execute([$username]);
$student = $stmt->fetch();

if ($student) {
    echo "Username sudah terdaftar. Silakan pilih username lain.";
    exit();
}

// Simpan mahasiswa baru
$stmt = $pdo->prepare("INSERT INTO students (name, username) VALUES (?, ?)");
$stmt->execute([$name, $username]);

// Pendaftaran berhasil
echo "Pendaftaran mahasiswa berhasil. Kembali ke <a href='students.php'>Data Mahasiswa</a>.";
?>