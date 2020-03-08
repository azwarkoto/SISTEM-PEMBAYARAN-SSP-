<?php
ob_start();
    session_start();
    unset($_SESSION['id']);
    session_destroy();
 	echo "<script>alert('Anda Telah Berhasil Keluar!');window.location='login.php';</script>";
ob_flush();
?>