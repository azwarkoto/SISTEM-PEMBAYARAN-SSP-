<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPP SEKOLAH</title>
</head>
<body>
<?php
include("lib/koneksi.php");
	$a=$_POST['nis_murid'];
    $b=$_POST['nama_murid'];
    $c=$_POST['kelas'];
    $d=$_POST['jurusan'];
    $e=$_POST['keterangan'];
    $n=$_POST['isisurat'];
    
    
if (!empty($a)) {
	echo "";
}
else {
	die ("<script>alert('Nis Murid Harus di Isi!');history.go(-1);</script>");
}

if (!empty($b)) {
	echo "";
}
else {
	die ("<script>alert('Nama Murid Harus di Isi!');history.go(-1);</script>");
}

if (!empty($c)) {
	echo "";
}
else {
	die ("<script>alert('Kelas Harus di Isi!');history.go(-1);</script>");
}

if (!empty($d)) {
	echo "";
}
else {
	die ("<script>alert('Jurusan Harus di Isi!');history.go(-1);</script>");
}
if (!empty($e)) {
	echo "";
}
else {
	die ("<script>alert('keterangan Harus di Isi!');history.go(-1);</script>");
}
if (!empty($n)) {
	echo "";
}
else {
	die ("<script>alert('Isi Surat Harus di Isi!');history.go(-1);</script>");
}

$perintah="INSERT into surat_teguran_pembayaran VALUES('','$a','$b','$c','$d','$e','$n')";
$simpan=mysql_query($perintah,$koneksi);


if($simpan) {
	header("location:konfirmasi_pembayaran.php");
}
else {
	echo "<script>alert('Maaf Data Gagal Tersimpan!');history.go(-1);</script>";
}

?>
</body>
</html>