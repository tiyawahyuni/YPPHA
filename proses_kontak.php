<?php
include 'koneksi.php'; // Pastikan path ini sesuai dengan lokasi file koneksi Anda

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($kon, $_POST['nama']);
    $email = mysqli_real_escape_string($kon, $_POST['email']);
    $subjek = mysqli_real_escape_string($kon, $_POST['subjek']);
    $pesan = mysqli_real_escape_string($kon, $_POST['pesan']);

    $query = "INSERT INTO kontak (nama, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";
    if (mysqli_query($kon, $query)) {
        header("Location: kontak.php?status=success");
    } else {
        header("Location: kontak.php?status=error");
    }
} else {
    header("Location: kontak.php?status=invalid");
}
?>
