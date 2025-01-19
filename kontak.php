<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo.jpg">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="Halaman Kontak Kami">
    <!-- Meta Keyword -->
    <meta name="keywords" content="kontak, formulir kontak, lokasi">
    <!-- Meta Character Set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>YPPH | Kontak</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!-- CSS -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .main-content {
            flex: 1;
        }
        .contact-container {
            display: flex;
            gap: 20px;
            margin: 20px auto;
            max-width: 1200px;
        }
        .contact-form {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            background: #ffffff; /* Latar belakang putih */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contact-form h3 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }
        .contact-form form {
            display: flex;
            flex-direction: column;
        }
        .contact-form form .form-group {
            margin-bottom: 15px;
        }
        .contact-form form .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .contact-form form input, 
        .contact-form form textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .contact-form form button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form form button:hover {
            background-color: #0056b3;
        }
        .map-container {
            flex: 1;
            min-width: 300px;
            background: #ffffff; /* Latar belakang putih */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .map-container iframe {
            width: 100%;
            height: 500px;
            border: 0;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <!-- Start Banner Area -->
    <section class="banner-area" id="home">
        <?php include 'navbar.php'; ?>
        <div class="jumbotron jumbotron-fluid main-content">
            <div class="container">
                <h2>Kontak</h2>

                <?php
                if (isset($_GET['status'])) {
                    if ($_GET['status'] == 'success') {
                        echo '<div class="alert alert-success" role="alert">Pesan berhasil dikirim!</div>';
                    } elseif ($_GET['status'] == 'error') {
                        echo '<div class="alert alert-danger" role="alert">Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.</div>';
                    } elseif ($_GET['status'] == 'invalid') {
                        echo '<div class="alert alert-warning" role="alert">Metode pengiriman tidak valid.</div>';
                    }
                }
                ?>

                <div class="contact-container">
                    <!-- Formulir Kontak -->
                    <div class="contact-form">
                        <h3>Hubungi Kami</h3>
                        <form action="proses_kontak.php" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="subjek">Subjek</label>
                                <input type="text" id="subjek" name="subjek" placeholder="Subjek" required>
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                <textarea id="pesan" name="pesan" placeholder="Pesan" rows="5" required></textarea>
                            </div>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                    <!-- Peta -->
                    <div class="map-container">
                        <h3>Lokasi Kami</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15959.124115616149!2d99.70234999999998!3d0.24772280000000554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302a696e8b11babf%3A0x9b3cd4d0c66a0e7e!2sPondok%20Pesantren%20Haji%20Abdullah%20Alin%20Tagak!5e0!3m2!1sid!2sid!4v1723479016488!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/owl.carousel.min.js"></script>            
    <script src="js/jquery.sticky.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>        
    <script src="js/main.js"></script>    
</body>
</html>
