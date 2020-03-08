<?php
include("lib/koneksi.php");
?>
<center style="color:red"><h1>DATA RINCIAN PEMBAYARAN SPP</h1></center>
<?php
$halaman = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$tampil= mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek FROM siswa LEFT JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid order By siswa.kelas,siswa.nis_murid");
$jumlah=mysql_num_rows($tampil);
$pages = ceil($jumlah/$halaman);
$qry=mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek FROM siswa LEFT JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid order By siswa.kelas,siswa.nis_murid LIMIT $mulai, $halaman") or die ("gagal".mysql_error());
$no =$mulai+1;
?>
<?php 
include 'lib/koneksi.php';
?>
 <form action="searchrincianpembayaran.php" method="get">
  <input placeholder="Input Nis Siswa" type="text" name="cari" required>
  <input type="submit" value="Cari Data Siswa">
</form>
<br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="yellow">
  <td><b>No</b></td>
  <td><b>Nis Murid</b></td>
  <td><b>Nama Murid</b></td>
  <td><b>Kelas</b></td>
  <td><b>Jurusan</b></td>
  <td><b>Uang Pangkal</b></td>
  <td><b>Ulangan Umum</b></td>
  <td><b>Akhir Tahun</b></td>
  <td><b>SPP Bulanan</b></td>
  <td><b>Metode Transfer</b></td>
  <td><b>Nomor Rekening</b></td>
  <td><b>Status</b></td>
  </tr>
 
  <?php
    while ($row=mysql_fetch_array($qry))
  {
    
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
    ?>


  <tr align="center">
  <td><?php echo $no++;?></td>
    <td><?php echo $a;?></td>
    <td><?php echo $b;?></td>
    <td><?php echo $c;?></td>
    <td><?php echo $d;?></td>
    <td><?php echo $f;?></td>
    <td><?php echo $g;?></td>
    <td><?php echo $h;?></td>
    <td><?php echo $k;?></td>
    <td><?php echo $l;?></td>
    <?php
    if(empty($i) AND empty($j)){
         echo '<td>--</td><td>BL</td>';
      }
       else {
         echo '<td>'.$i.'</td><td>LUNAS</td>';
      }
   ?>
   </tr>
   <?php
    } ?>
   </table>
   <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <?php
if($page == 1){ ?>
<li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
<li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
<?php
}else{ 
  $link_prev = ($page > 1)? $page - 1 : 2;
  ?>
<li class="page-item"><a class="page-link" href="rincianpembayaran.php?halaman=1">Sebelumnya</a></li>
<li class="page-item"><a class="page-link" href="rincianpembayaran.php?halaman=<?php echo $link_prev; ?>"> &laquo;</a></li>
<?php } ?>
<?php for ($i=1; $i<=$pages ; $i++){ ?>
  <li class="page-item"><a class="page-link" href="?halaman=<?php echo $i; ?>"> <?php echo $i; ?></a></li>
 
  <?php } ?>
          <?php 
          if($page == $pages){ ?>
          <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
          <li class="page-item disabled"><a class="page-link" href="#">Selanjutnya</a></li>
          <?php        }else{
            $link_next = ($page < $pages)? $page + 1 : $pages; ?>
            <li class="page-item"><a class="page-link" href="rincianpembayaran.php?halaman=<?php echo $link_next; ?>">&raquo;</a></li>
            <li class="page-item"><a class="page-link" href="rincianpembayaran.php?halaman=<?php echo $pages; ?>">Selanjutnya</a></li>
            <?php } ?>

