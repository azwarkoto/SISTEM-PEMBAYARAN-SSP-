<?php
session_start();
include 'lib/koneksi.php';
$tampil="SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.tanggalbayar,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek,pembayaran.bukti_kwitansi FROM siswa INNER JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid WHERE siswa.nis_murid='".$_GET['id']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query);
$a=$row['nis_murid'];
$b=$row['nama_murid'];
$c=$row['kelas'];
$d=$row['jurusan'];
$f=$row['uangpangkal'];
$g=$row['ulanganumum'];
$h=$row['akhirtahun'];
$i=$row['sppbulanan'];
$j=$row['totalbayar'];
$k=$row['metode_transfer'];
$l=$row['nomor_rek'];
$m=$row['bukti_kwitansi'];
function rupiah($angka){
  $hasil_rupiah="Rp " . number_format($angka,2,',',',');
  return $hasil_rupiah;
}
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
  <div class="container">
<table style='font-family: "time news roman"; font-size: 18px;' border='0' cellpadding='3' cellspacing='1' width='100%'>
  
               <tr>
                    <td colspan='3' align=""><b><font size="5">Transaksi Pembayaran Spp</b></td><!-- SubJudul/Kategori -->
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
                    <td>Kelas</td><td>:</td><td><?php echo $c; ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td><td>:</td><td><?php echo $d; ?></td>
                </tr>    
                <tr>
                    <td>Tanggal bayar</td><td>:</td><td><?php echo date('d-m-Y', strtotime($row['tanggalbayar'])); ?></td>
                </tr>
                <tr>
                    <td>Uang Pangkal</td><td>:</td><td><?php echo rupiah ($f); ?></td>
                </tr>
                <tr>
                    <td>Ulangan Umum</td><td>:</td><td><?php echo rupiah ($g); ?></td>
                </tr>
                <tr>
                    <td>Akhir Tahun</td><td>:</td><td><?php echo rupiah($h); ?></td>
                </tr>
                <tr>
                    <td>Spp Bulanan</td><td>:</td><td><?php echo $i; ?></td>
                </tr>
                <tr>
                    <td>Total Bayar</td><td>:</td><td><?php echo rupiah ($j); ?></td>
                </tr>
                 <tr>
                    <td>Metode Transfer</td><td>:</td><td><?php echo $k; ?></td>
                </tr>
                 <tr>
                    <td>Nomor Rekening</td><td>:</td><td><?php echo $l; ?></td>
                </tr>
                <tr>
                    <td>Bukti Kwitansi Pembayaran</td><td>:</td><td><a href="assets/img/buktikwitansi/<?php echo $m; ?>" class "perbesar"><img src='assets/img/buktikwitansi/<?php echo $m; ?>' width='100' height='100'></td>
                </tr>
                
            
   </table>
  <center>
<br><td><img width="500"><a align='right'><b>JAKARTA, </a></td><td><?php echo date('d-m-Y'); ?></td>
<br><center><img width="475"><img src='index.png' width='200'>
<center><img width="500">( Nuryahya, M.MPd )</p>
</center>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>