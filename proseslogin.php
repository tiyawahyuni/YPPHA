<?php
include "koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['password'];

// Periksa apakah username ada
$usernameCheck = mysqli_query($kon, "SELECT * FROM admin WHERE username = '$username'");
if (mysqli_num_rows($usernameCheck) > 0) {
    // Username ditemukan, sekarang periksa password
    $login = mysqli_query($kon, "SELECT * FROM admin WHERE username = '$username' AND password='$pass'");
    if (mysqli_num_rows($login) > 0) {
        // Password benar
        $row = mysqli_fetch_array($login);
        session_start();
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        echo "<script>
                alert('Berhasil Masuk !!!');
                window.location.href='admin/index.php';
              </script>";
    } else {
        // Password salah
        echo "<script>
                alert('Kata Sandi Salah!!!');
                window.location.href='login.php';
              </script>";
    }
} else {
    // Username tidak ditemukan
    // Cek juga jika username dan password salah
    $passwordCheck = mysqli_query($kon, "SELECT * FROM admin WHERE password = '$pass'");
    if (mysqli_num_rows($passwordCheck) == 0) {
        // Kedua-duanya salah
        echo "<script>
                alert('Nama Pengguna dan Kata Sandi Salah!!!');
                window.location.href='login.php';
              </script>";
    } else {
        // Hanya username yang salah
        echo "<script>
                alert('Nama Pengguna Tidak Ditemukan!!!');
                window.location.href='login.php';
              </script>";
    }
}
?>
