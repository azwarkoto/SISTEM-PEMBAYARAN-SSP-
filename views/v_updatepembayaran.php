<body>
<?php
include("lib/koneksi.php");
    $b=$_POST['nama_murid'];
    $c=$_POST['kelas'];
    $d=$_POST['jurusan'];
    $e=$_POST['tanggalbayar'];
    $f=$_POST['sppbulanan'];
    $g=$_POST['totalbayar'];
$ubah="update pembayaran set nama_murid='$b',kelas='$c',jurusan='$d',tanggalbayar='$e',sppbulanan='$f',totalbayar='$g' where nis_murid='".$_GET['nis_murid']."'";
$update=mysql_query($ubah,$koneksi);
if($update)
header("location:datapembayaran.php");
else
echo "<script>alert('Maaf Data Gagal Ter update!');history.go(-1);</script>";
?>
</body>
</html>