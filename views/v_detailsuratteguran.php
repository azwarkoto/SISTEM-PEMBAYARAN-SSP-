<?php
session_start();
include 'lib/koneksi.php';
$tampil="SELECT * FROM surat_teguran_pembayaran WHERE nis_murid='".$_GET['id']."'";
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
  	<table border="0" width="100%" align="center">
  		<tr><td align="center" colspan="10"><button class="btn btn-secondary" onclick="window.open('printsurat.php?print=ya&id_surat=<?php echo $id; ?>','popupwindow','scrollbars=yes, width=750,height=600');">Cetak Surat Teguran</button></td></tr>
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
                    <td>Keterangan</td><td>:</td><td><?php echo $e;  ?></td>
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