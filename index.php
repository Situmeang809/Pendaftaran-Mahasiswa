<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Website Sederhana</title>
</head>
<body align="center">
    <header>
        <h1>Selamat Datang di Website Sederhana</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profil</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Pendaftaran</a></li>
                <li><a href="students.php">Data Mahasiswa</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Halaman Utama</h2>
        <p>Ini adalah website sederhana menggunakan PHP dan HTML.</p>
    </main>
    <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="profile.php">Profil</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="add_student.php">Tambah Mahasiswa</a></li> <!-- Link untuk tambah mahasiswa -->
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Pendaftaran</a></li>
        <?php endif; ?>
        <li><a href="students.php">Data Mahasiswa</a></li>
    </ul>
</nav>
</body>
</html>
