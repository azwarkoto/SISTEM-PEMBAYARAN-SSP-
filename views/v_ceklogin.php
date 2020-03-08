<?php
ob_start(); // untukmembuffer;
include ("lib/koneksi.php");

//membuatvariabeluntukmenampung input username dan password
	$nis_murid = $_POST['nis_murid'];
	$pass = md5($_POST['password']);//memproteksidarimysql injection

$nis_murid = stripslashes($nis_murid); // menghapus backslash padatampilanphp
$pass = stripslashes($pass);
$nis_murid = mysql_real_escape_string($nis_murid); // memfilterkarakterkhususmisal '
$pass = mysql_real_escape_string($pass);
		$sqlLogin = mysql_query("SELECT * FROM siswa 
						WHERE nis_murid='$nis_murid' AND password='$pass'",$koneksi);
		$jml = mysql_num_rows($sqlLogin);
		$d=mysql_fetch_array($sqlLogin);
		if($jml > 0){
			session_start();
			$_SESSION['id']		= $d['nis_murid'];
			$_SESSION['nama']	= $d['nama_murid'];
			
			header('location:siswa.php');
		}else{
			echo "<script>alert('NIS atau Password anda Salah!!!');location.href='index.php';</script>";
}
ob_end_flush();
?> 