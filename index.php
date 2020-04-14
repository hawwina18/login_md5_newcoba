<html>
<head>
    <title>Tutorial Cara Membuat Login Dengan PHP MySQLi</title>
</head>
<body>
    <h2>Halaman Admin</h2>
    <!-- cek apakah sudah login -->
    <?php 
        session_start();
        if($_SESSION['status']!="login"){
            header("location:form_login.php?pesan=belum_login");
        }
    ?>
    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
    <br/>
    <a href="logout.php">LOGOUT</a>
</body>
</html>
