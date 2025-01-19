<?php
// Koneksi database
include 'koneksi.php';

// Ambil data foto dari database
$sql = "SELECT * FROM prestasi";
$result = mysqli_query($kon, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($kon);
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YPPHA | Prestasi</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.jpg">
    
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    
    <!-- Meta Description -->
    <meta name="description" content="">
    
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    
    <style>
        .jumbotron {
            padding: 0;
            margin: 0;
        }
        .jumbotron .card {
            border: none;
            overflow: hidden;
            margin-bottom: 30px;
        }
        .jumbotron .card img {
            height: 300px;
            width: 100%;
            object-fit: cover;
            transition: 0.8s ease;
        }
        .jumbotron .card img:hover {
            opacity: 0.8;
            transform: scale(1.1);
        }
        .card-body {
            text-align: center;
        }
        .card-body h5 {
            margin: 15px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <?php include 'navbar.php'; ?>
        
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2>Keberhasilan Santri/Santriwati </h2>
                <br>
                <div class="row">
                    <?php while ($data = mysqli_fetch_assoc($result)): ?>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="card">
                                <?php
                                $fotoPath = 'img/' . htmlspecialchars($data['foto']);
                                if (file_exists($fotoPath)): // Memastikan file ada
                                ?>
                                    <a target="_blank" href="<?php echo $fotoPath; ?>">
                                        <img src="<?php echo $fotoPath; ?>" alt="Foto Prestasi">
                                    </a>
                                <?php else: ?>
                                    <img src="img/default.jpg" alt="Foto Tidak Tersedia">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5><?php echo htmlspecialchars($data['penjelasan']); ?></h5>
                                    <p><?php echo htmlspecialchars($data['tanggal']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div> <!-- End-Row -->
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
<?php
// Tutup koneksi
mysqli_close($kon);
?>
