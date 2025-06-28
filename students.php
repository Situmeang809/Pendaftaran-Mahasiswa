<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <header>
        <h1>Data Mahasiswa</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profil</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Pendaftaran</a></li>
                <?php endif; ?>
                <li><a href="students.php">Data Mahasiswa</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Daftar Mahasiswa</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Username</th>
            </tr>
            <?php
            require 'db.php'; // Menghubungkan ke database

            // Mengambil data mahasiswa dari database
            $stmt = $pdo->query("SELECT * FROM users");
            while ($student = $stmt->fetch()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($student['name']) . "</td>";
                echo "<td>" . htmlspecialchars($student['username']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
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