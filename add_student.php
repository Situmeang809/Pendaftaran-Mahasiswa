<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran Mahasiswa</title>
</head>
<body>
    <header>
        <h1>Pendaftaran Mahasiswa</h1>
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
        <form action="add_student_process.php" method="POST">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <input type="submit" value="Daftar Mahasiswa">
        </form>
    </main>

    <script>
function validateForm() {
    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;

    if (name == "" || username == "") {
        alert("Semua field harus diisi!");
        return false;
    }
    return true;
}
</script>
<form action="add_student_process.php" method="POST" onsubmit="return validateForm()">

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