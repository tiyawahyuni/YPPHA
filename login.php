<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php
    session_start();
    echo ""; // Debugging output
    if (isset($_SESSION['username'])) {
        echo "User is logged in. Redirecting to admin page.<br>"; // Debugging output
        header('location:admin/index.php');
        exit(); // Pastikan skrip berhenti setelah header redirect
    }
    echo ""; // Debugging output
    require_once("koneksi.php");
    ?>
    <link rel="shortcut icon" href="img/logo.jpg">
    <title>Login | Admin</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="box">
    <img src="img/admin1.png" alt="Logo" class="logo"> 
        <h2>ADMIN</h2>
        <form action="proseslogin.php" method="post">
            <div class="inputbox">
                <input type="text" name="username" required="" maxlength="10">
                <label>Nama Pengguna</label>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required="" maxlength="10">
                <label>Kata Sandi</label>
            </div>
            <input type="submit" name="Masuk" value="Masuk">
        </form>
    </div>
</body>
</html>