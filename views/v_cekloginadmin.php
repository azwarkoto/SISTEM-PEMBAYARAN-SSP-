<?php
ob_start(); // untukmembuffer;
include ("lib/koneksi.php");

//membuatvariabeluntukmenampung input username dan password
	$username = $_POST['username'];
	$pass = md5($_POST['password']);//memproteksidarimysql injection

$username = stripslashes($username); // menghapus backslash padatampilanphp
$pass = stripslashes($pass);
$username = mysql_real_escape_string($username); // memfilterkarakterkhususmisal '
$pass = mysql_real_escape_string($pass);
		$sqlLogin = mysql_query("SELECT * FROM admin 
						WHERE username='$username' AND password='$pass'",$koneksi);
		$jml = mysql_num_rows($sqlLogin);
		$d=mysql_fetch_array($sqlLogin);
		if($jml > 0){
			session_start();
			$_SESSION['id']=$d['username'];
			
			header('location:dashboard.php');
		}else{
			echo "<script>alert('Username atau Password anda Salah!!!');location.href='admin.php';</script>";
}
ob_end_flush();
?> 