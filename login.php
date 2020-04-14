<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
	$password = md5($_POST['password']);
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM `user` WHERE nama='$username' and pass='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:index.php");
    }
    else{
        header("location:form_login.php?pesan=gagal");
    }
?>