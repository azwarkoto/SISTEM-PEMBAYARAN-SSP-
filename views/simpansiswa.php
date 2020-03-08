<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPP PAYMENT</title>
</head>
<body>
<?php
include("lib/koneksi.php");
	$a=$_POST['nis_murid'];
    $b=$_POST['nama_murid'];
    $c=$_POST['tempatlahir'];
    $d=$_POST['tanggallahir'];
    $e=$_POST['jeniskelamin'];
    $f=$_POST['orangtua'];
    $g=$_POST['alamat'];
    $h=$_POST['agama'];
    $i=$_POST['kelas'];
    $j=$_POST['tahunajaran'];
    $k=$_POST['jurusan'];
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
	die ("<script>alert('Tempat Lahir Harus di Isi!');history.go(-1);</script>");
}
if (!empty($d)) {
	echo "";
}
else {
	die ("<script>alert('Tanggal Lahir Harus di Isi!');history.go(-1);</script>");
}
if (!empty($e)) {
	echo "";
}
else {
	die ("<script>alert('Jenis Kelamin Harus di Isi!');history.go(-1);</script>");
}
if (!empty($f)) {
	echo "";
}
else {
	die ("<script>alert('Orangtua Harus di Isi!');history.go(-1);</script>");
}

if (!empty($g)) {
	echo "";
}
else {
	die ("<script>alert('Alamat Harus di Isi!');history.go(-1);</script>");
}

if (!empty($h)) {
	echo "";
}
else {
	die ("<script>alert('Agama Harus di Isi!');history.go(-1);</script>");
}
if (!empty($i)) {
	echo "";
}
else {
	die ("<script>alert('kelas Harus di Isi!');history.go(-1);</script>");
}
if (!empty($j)) {
	echo "";
}
else {
	die ("<script>alert('Tahun Ajaran Harus di Isi!');history.go(-1);</script>");
}
if (!empty($k)) {
	echo "";
}
else {
	die ("<script>alert('jurusan Harus di Isi!');history.go(-1);</script>");
}

$perintah="insert into siswa values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
$simpan=mysql_query($perintah,$koneksi);

if($simpan) {
	header("location:dashboard.php");
}
else {
	echo "<script>alert('Maaf Data Gagal Tersimpan!');history.go(-1);</script>";
}
?>
</body>
</html>