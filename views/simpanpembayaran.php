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
    $e=$_POST['tanggalbayar'];
    $f=$_POST['uangpangkal'];
    $g=$_POST['ulanganumum'];
    $h=$_POST['akhirtahun'];
    $i=$_POST['sppbulanan'];
    $j=$_POST['totalbayar'];
    $k=$_POST['bukti_kwitansi'];
    $l=$_POST['keterangan'];
    
    
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
	die ("<script>alert('Tanggal bayar Harus di Isi!');history.go(-1);</script>");
}

if (!empty($f)) {
	echo "";
}
else {
	die ("<script>alert('Uang Pangkal Harus di Isi!');history.go(-1);</script>");
}

if (!empty($g)) {
	echo "";
}
else {
	die ("<script>alert('Ulangan Umum Harus di Isi!');history.go(-1);</script>");
}

if (!empty($h)) {
	echo "";
}
else {
	die ("<script>alert('Akhir Tahun Harus di Isi!');history.go(-1);</script>");
}

if (!empty($i)) {
	echo "";
}
else {
	die ("<script>alert('Spp Bulanan Harus di Isi!');history.go(-1);</script>");
}
if (!empty($j)) {
	echo "";
}
else {
	die ("<script>alert('Total bayar Harus di Isi!');history.go(-1);</script>");
}
if (!empty($k)) {
	echo "";
}
else {
	die ("<script>alert('Bukti Kwitansi Harus di Isi!');history.go(-1);</script>");
}

if (!empty($l)) {
	echo "";
}
else {
	die ("<script>alert('Keterangan Harus di Isi!');history.go(-1);</script>");
}

$perintah="INSERT into pembayaran VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$simpan=mysql_query($perintah,$koneksi);


if($simpan) {
	header("location:datapembayaran.php");
}
else {
	echo "<script>alert('Maaf Data Gagal Tersimpan!');history.go(-1);</script>";
}

?>
</body>
</html>