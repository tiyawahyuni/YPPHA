<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/logo.jpg">
  <title>YPPHA | Lembaga </title>
  <meta name="description" content="Sejarah Pondok Pesantren Haji Abdullah Alin Tagak di Pasaman Barat, Sumatra Barat, Indonesia.">
  <meta name="keywords" content="Pondok Pesantren, Pasaman Barat, sejarah, Sumatra Barat, Indonesia, pendidikan Islam">
  <style>
    body {
      background-color: white; /* Mengatur latar belakang halaman menjadi putih */
      color: #333; /* Mengatur warna teks menjadi gelap */
    }
    .full-width-image {
      width: 100%;
      height: 100vh; /* Tinggi penuh viewport */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .carousel-container {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    h1, h6 {
      font-size: 1 rem; /* Ukuran font besar untuk header */
      color: #333; /* Warna teks header */
    }
    p {
      font-size: 1.3rem; /* Ukuran font besar untuk paragraf */
      color: #333; /* Warna teks paragraf */
      line-height: 1.6; /* Jarak antar baris untuk keterbacaan lebih baik */
    }
    .card-body {
      padding: 2rem; /* Padding lebih untuk body card */
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

   

    /* Styling Navbar Tambahan */
    .navbar {
      background-color: #007BFF; /* Warna latar belakang navbar */
    }

    .navbar-nav a {
      color: #fff; /* Warna teks link navbar */
    }

    .navbar-nav a:hover {
      background-color: #0056b3; /* Warna biru gelap saat hover */
      color: #fff; /* Pastikan warna teks tetap putih */
      border-radius: 5px; /* Rounded corners on hover */
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div class="bloglist singlepost">
    <main>
      <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active">
              <div class="full-width-image" style="background-image: url('img/latar3.jpg');">
                <div class="carousel-container">
                  <div class="container"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="caption text-center mt-20"></div>

      <div class="caption text-center mt-20">
        <div class="info-thumb"></div>
        <br>
        <h6 class="text-uppercase"></h6>
        <div class="card-body">
          <h1 class="text-uppercase">Pondok Pesantren Haji Abdullah Alin Tagak</h1>
          <br>
          <p>Pondok Pesantren Haji Abdullah Alin Tagak yang berada di Kampung Alin Tagak Kejorongan Simpang Tigo Alin Kecamatan Muara Kiawai Barat Kabupaten Pasaman Barat Provinsi Sumatera Barat. Berdiri pada tahun 1991. Pondok pesantren ini menjadi salah satu POMPES yang tertua Di Kabupaten Pasaman Barat. Didirikan oleh Bapak Haji Abdullah dan beberapa anak serta keluarga beliau, diantaranya Bapak Afredi (anak), Bapak Afrinal (anak), dan yang lainnya. Bapak Haji Abdullah merupakan seorang tokoh masyarakat atau Buya/Kiai yang aktif dalam mendakwahkan Islam di Pasaman Barat ketika itu, hingga melekatnya gelar Buya Tuanku Guru Alin Tagak pada diri Beliau, yang sangat akrab dipanggil Buya Alin Tagak.</p>
          <p>Pondok pesantren ini didirikan oleh Buya Alin dengan tujuan untuk mendakwahkan Islam dan meningkatkan kualitas pendidikan masyarakat Pasaman Barat. Karena keaktifannya dalam mendakwahkan Islam, beliau merasa belum cukup hanya dengan mendakwahkan Islam dari kampung ke kampung. Mengingat sulit dan sedikitnya pendidikan di kalangan masyarakat setempat ketika itu, maka Buya Alin memutuskan untuk mendirikan sebuah lembaga pendidikan yang diberi nama Yayasan Haji Abdullah Alin Tagak.</p>
          <p>Hingga saat ini, Yayasan Haji Abdullah Alin Tagak masih berdiri tegap dalam meningkatkan kualitas pendidikan dengan adanya Madrasah Tsanawiyah (MTS), Madrasah Aliyah (MA), Panti Asuhan Anak Yatim, dan berbagai kegiatan keagamaan lainnya. Semua ini dilakukan demi meningkatkan kehidupan bangsa ini yang lebih baik dan bermartabat.</p>
        </div>
      </div>
    </main>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
