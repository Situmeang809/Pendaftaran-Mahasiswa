
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Profil Pembuat Website</title>
</head>
<body align="center">
    <header>
        <h1>Profile saya</h1>
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
        <?php
include ("wow.html");
?>

        <h2>Profile</h2>
        <p><strong>Nama:</strong> D.SANTA RIYANI SITUMEANG</p>
        <p><strong>Email:</strong> dewisitumeang101@gmail.com</p>
        <p><strong>Universitas:</strong> Universitas Mahkota Tricom Unggul</p>
        
    </style>
</head>
<body>
    <h2>Deskripsi</h2>
    <p>
        Saya adalah seorang mahasiswa semester tiga di jurusan Sistem Informasi. Saya memiliki ketertarikan yang besar dalam dunia teknologi dan coding. Saat ini, saya menguasai beberapa bahasa pemrograman, seperti Python, Java, C++, dan beberapa lainnya. Saya aktif dalam klub pemrograman dan sering berpartisipasi dalam hackathon, di mana saya berkolaborasi dengan teman-teman untuk mengerjakan proyek aplikasi dan website.
    </p>
    <p>
        Di luar akademik, saya senang bermain game dan membaca buku. Dengan semangat belajar yang tinggi, saya bercita-cita menjadi software engineer yang dapat berkontribusi dalam pengembangan teknologi yang bermanfaat bagi masyarakat.
    </p>
       
        <p><strong>Kontak:</strong> 081262803889 </p>
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