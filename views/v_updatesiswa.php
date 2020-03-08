<body>
<?php
include("lib/koneksi.php");
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
$ubah="update siswa set nama_murid='$b',tempatlahir='$c',tanggallahir='$d',jeniskelamin='$e',orangtua='$f',alamat='$g',agama='$h',kelas='$i',tahunajaran='$j',jurusan='$k' where nis_murid='".$_GET['nis_murid']."'";
$update=mysql_query($ubah,$koneksi);
if($update)
header("location:datasiswa.php");
else
echo "<script>alert('Maaf Data Gagal Ter update!');history.go(-1);</script>";
?>
</body>
</html>