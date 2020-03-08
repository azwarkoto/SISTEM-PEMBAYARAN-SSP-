<?php
session_start();
include 'lib/koneksi.php';
$tampil="SELECT * FROM surat_teguran_pembayaran WHERE id_surat='".$_GET['id_surat']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query);
$a=$row['nis_murid'];
$b=$row['nama_murid'];
$c=$row['kelas'];
$d=$row['jurusan'];
$e=$row['keterangan'];
$n=$row['isisurat'];
$id=$row['id_surat'];
date_default_timezone_set('Asia/Jakarta');
$tgl=date("d M Y");
?>
<html>
<head>
    <title>SIPES</title>
        <script type="text/javascript" src="assets/lib/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="assets/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="assets/source/soucre/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="shortcut icon" href="assets/gambar/pembayaran/baru.jpg">
<?php if($_GET['print']=='ya'){
    echo "<script type='text/javascript'>javascript:window.print()</script>";
    }; ?>
<script type="text/javascript">
$(document).ready(function() {
    $(".perbesar").fancybox();
})
</script>
    <link rel="stylesheet" href="gaya.css">
    </head>

<table width='100%' border='0'>
            <tr>
                <td width='100'><img src='assets/gambar/jakarta.png' width='120' height='120' align='left'></td>
                <td align='center'>
                    <font size='5'><b>Pemerintah DKI Jakarta<br>Dinas Pendidikan</b></font><br><font size='5'><b>SMA PERGURUAN BUDAYA</b></font><br>
                    <font size='4'>Tahun Ajaran 2018/2019</font>
                    <font size='3'>Jl. Dermaga Baru no.46 Klender - Duren Sawit - Jakarta Timur, Telp. (021) 8600791, 8613151, 86607252</font>
                    </td> 
                </td>
                <td width='100'><img src='assets/gambar/baru.png' width='140' height='140' align='right'></td>
                </tr>
                <tr><td colspan="10"><b><hr size="7" color="black"></b></td></tr></table>
  <div class="container">
  	<table width="100%" border="0" align="center">
  		<tr><td>Nomor &nbsp;&nbsp;&nbsp;&nbsp;: /<?php echo $id; ?>/SMA-BDY/2018</td><td>&nbsp;</td><td align="right">Jakarta, <?php echo $tgl; ?></td></tr>
  		<tr><td>Lampiran : -</td></tr>
  		<tr><td>Perihal &nbsp;&nbsp;&nbsp;&nbsp;: Peringatan Pembayaran SPP</td></tr>
  		<tr><td><br/>Kepada yth,</td></tr>
  		<tr><td>Bapak/Ibu Orang Tua/Wali</td></tr>
  		<tr><td>di-Tempat</td></tr>
  		<tr><td><br/><p>Dengan hormat,</p></td></tr>
        <tr><td><p>Sehubungan dengan hasil pemantauan kami, anak Bapak/Ibu Orang Tua/Wali yaitu:</p></td></tr>
    </table><table width="100%" border="0" align="center">
                <tr>
                    <td width="12%">Nama Murid</td><td width="1%">:</td><td><?php echo $b; ?></td>
                </tr>
                <tr><td>Nis</td><td>:</td><td><?php echo $a; ?></td></tr>
                <tr>
                    <td>Kelas</td><td>:</td><td><?php echo $c; ?> <?php echo $d; ?></td>
                </tr>
                <tr>
                    <td>Keterangan</td><td>:</td><td><?php echo $e; ?></td>
                </tr>
   </table>
   <p>Masih menunggak uang SPP selama ... bulan sebanyak Rp ...</p>
   <p><?php echo $n; ?></p>
   	
   	<p>Demikianlah kami sampaikan kepada Bapak/Ibu atas bantuan dan perhatiannya, kami ucapkan terima kasih.</p>
  

<p align="right">Jakarta, <?php echo date('d M Y'); ?></p>
<p align="right"><img width="475"><img src='index.png' width='200'></p>
<p align="right"><u>( Nuryahya, M.MPd )</u></p>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>