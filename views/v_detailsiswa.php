<?php
session_start();
include 'lib/koneksi.php';
$tampil="SELECT * FROM siswa WHERE nis_murid='".$_GET['nis_murid']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query);
$a=$row['nis_murid'];
$b=$row['nama_murid'];
$c=$row['tempatlahir'];
$e=$row['jeniskelamin'];
$f=$row['orangtua'];
$g=$row['alamat'];
$h=$row['agama'];
$i=$row['kelas'];
$j=$row['tahunajaran'];
$k=$row['jurusan'];
?>
<table width='100%' border='0'>
            <tr>
                <td width='100'><img src='assets/gambar/jakarta.png' width='120' height='120' align='left'></td>
                <td align='center'>
                    <font size='5'><b>Pemerintah DKI Jakarta<br>Dinas Pendidikan</b></font><br><font size='5'><b>SMA PERGURUAN BUDAYA</b></font><br>
                    <font size='4'>Tahun Ajaran 2018/2019</font>
                    <font size='3'>Jl. Dermaga Baru no.46 Klender - Duren Sawit - Jakarta Timur, Telp. (021) 8600791, 8613151, 86607252</font>
                </td>
                <td width='100'><img src='assets/gambar/baru.png' width='140' height='140' align='right'></td>
            </tr>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PEMBAYARAN SPP SEKOLAH</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>
  <div class="container">
<table style='font-family: "time news roman"; font-size: 18px;' border='0' cellpadding='3' cellspacing='1' width='100%'>
               <tr>
                    <td colspan='3' align=""><b><font size="5">Detail Siswa</b></td><!-- SubJudul/Kategori -->
                    <td><!-- nomor formulir --></td>
                </tr>
                <!-- Isi Konten -->
                <tr>
                    <td>Nis Murid</td><td>:</td><td><?php echo $a; ?></td>
                </tr>
                <tr>
                    <td>Nama Murid</td><td>:</td><td><?php echo $b; ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td><td>:</td><td><?php echo $c; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td><td>:</td><td><?php echo date('y-m-d', strtotime($row['tanggallahir'])); ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td><td>:</td><td><?php echo $e; ?></td>
                </tr>    
                <tr>
                    <td>Orang Tua</td><td>:</td><td><?php echo $f; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td><td>:</td><td><?php echo $g; ?></td>
                </tr>
                <tr>
                    <td>Agama</td><td>:</td><td><?php echo $h; ?></td>
                </tr>
                <tr>
                    <td>Kelas</td><td>:</td><td><?php echo $i; ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td><td>:</td><td><?php echo $j; ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td><td>:</td><td><?php echo $k; ?></td>
                </tr>
                </tr>
            
   </table>
  


    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>