<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran</title>
</head>
<body align="center">
    <header>
        <h1>Pendaftaran</h1>
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
    <main><br><br>
        <form action="register_process.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" >
            <br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" >
            <br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            <br><br>
            <input type="submit" value="Daftar">
        </form>
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