<?php
include 'koneksi.php'; // Pastikan path ini sesuai dengan file koneksi Anda

// Ambil data kurikulum untuk ditampilkan
$query = "SELECT * FROM kurikulum ORDER BY FIELD(semester, 'ganjil', 'genap'), mata_pelajaran";
$result = $kon->query($query);

if (!$result) {
    die("Terjadi kesalahan pada query: " . $kon->error);
}

$kurikulum_data = [];
while ($row = $result->fetch_assoc()) {
    $kurikulum_data[$row['semester']][] = $row['mata_pelajaran'];
}

$kon->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo.jpg">
    <title>YPPHA | Kurikulum</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            background-color: #f8f9fa; /* Latar belakang abu-abu muda */
        }

        header.default-header {
            background: linear-gradient(to bottom, #1E90FF 50%, #004080 100%);
        }

        .navbar {
            background-color: #007BFF;
            padding: 5px 0;
            height: 80px;
        }

        .navbar-brand img {
            height: 60px;
        }

        .navbar-nav a {
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }

        .container {
            padding: 30px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .box {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .box:hover {
            transform: scale(1.02);
        }

        h3 {
            background-color: #0056b3;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            margin: -20px -20px 20px -20px;
            font-size: 1.3rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 0.85rem;
        }

        table th {
            background-color: #0056b3; /* Biru yang lebih gelap untuk header */
            color: white;
            font-size: 0.9rem;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        table td {
            background-color: #e9ecef; /* Warna abu-abu terang untuk latar belakang */
            color: #333; /* Warna teks yang lebih gelap untuk kontras yang lebih baik */
        }

        table tr:nth-child(even) td {
            background-color: #f8f9fa; /* Warna abu-abu yang sedikit lebih terang untuk baris genap */
        }

        table tr:hover td {
            background-color: #dee2e6; /* Warna abu-abu yang sedikit lebih gelap saat hover */
        }

        table tfoot td {
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            font-weight: bold;
        }

        .footer-area {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        .footer-area p {
            margin: 0;
        }

        /* Styling Menu Dropdown */
        .dropdown-menu {
            background-color: #007BFF; /* Blue background for dropdown */
        }

        .dropdown-item {
            color: #fff;
            padding: 8px; /* Adjust padding for dropdown items */
        }

        .dropdown-item:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Start Header Area -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg navbar-yellow">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="img/logo.jpg" class="img-fluid" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="text-white lnr lnr-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profil.php">Tentang Lembaga</a>
                                <a class="dropdown-item" href="visi.php">Visi & Misi</a>
                            </div>
                        </li>
                        <li><a href="prestasi.php">Prestasi</a></li>
                        <li><a href="kurikulum.php">Kurikulum</a></li>
                        <li><a href="gallery.php">Galeri</a></li>
                        <li><a href="kontak.php">Kontak</a></li>
                        <li><a class="getstarted" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Area -->

    <!-- Start Kurikulum Section -->
    <div class="container">
        <div class="box">
            <br><br><br>
            <h3>Daftar Mata Pelajaran Semester Ganjil</h3>
            <table>
                <thead>
                    <tr>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($kurikulum_data['ganjil']) && !empty($kurikulum_data['ganjil'])): ?>
                        <?php foreach ($kurikulum_data['ganjil'] as $mata_pelajaran): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($mata_pelajaran); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td>Data tidak tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="box">
            <br><br><br>
            <h3>Daftar Mata Pelajaran Semester Genap</h3>
            <table>
                <thead>
                    <tr>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($kurikulum_data['genap']) && !empty($kurikulum_data['genap'])): ?>
                        <?php foreach ($kurikulum_data['genap'] as $mata_pelajaran): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($mata_pelajaran); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td>Data tidak tersedia</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Kurikulum Section -->

    <!-- Start Footer Area -->
    <?php
    include 'footer.php';
    ?>
    <!-- Scripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
