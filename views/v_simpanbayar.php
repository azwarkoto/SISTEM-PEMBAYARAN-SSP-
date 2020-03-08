<?php
ob_start();
include("lib/koneksi.php");
	$a=$_POST['nis_murid'];
    $b=$_POST['tanggalbayar'];
    $c=$_POST['uangpangkal'];
    $d=$_POST['ulanganumum'];
    $e=$_POST['akhirtahun'];
    $f=$_POST['sppbulanan'];
    $g=$_POST['totalbayar'];
    $h=$_POST['metode_transfer'];
    $i=$_POST['nomor_rek'];
    $bukti=$_FILES['bukti_kwitansi']['name'];
    $tmp=$_FILES['bukti_kwitansi']['tmp_name'];
    $j=date('dmYHis').$bukti;
    $path = "assets/img/buktikwitansi/".$j;
    
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

if(move_uploaded_file($tmp, $path)){
$perintah="INSERT into pembayaran VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
$simpan=mysql_query($perintah,$koneksi);

if($simpan) {
	header("location:siswabayar.php");
}
}
else {
	echo "<script>alert('Maaf Data Gagal Tersimpan!');history.go(-1);</script>";
}
ob_flush();
?>