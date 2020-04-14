<?php 
    session_start();
     
    // menghapus semua session
    session_destroy();
 
    // mengalihkan halaman dan mengirim pesan logout
    header("location:form_login.php?pesan=logout");
?>