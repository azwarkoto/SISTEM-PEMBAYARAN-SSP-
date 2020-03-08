<?php
include("lib/koneksi.php");
?>
<center style="color:red"><h1>DATA PEMBAYARAN SPP</h1></center>
<?php
$halaman = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$tampil= mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.tanggalbayar,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek,pembayaran.bukti_kwitansi FROM siswa INNER JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid ORDER BY siswa.kelas,siswa.jurusan");
$jumlah=mysql_num_rows($tampil);
$pages = ceil($jumlah/$halaman);
$qry=mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.tanggalbayar,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek,pembayaran.bukti_kwitansi FROM siswa INNER JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid ORDER BY siswa.kelas,siswa.jurusan LIMIT $mulai, $halaman") or die ("gagal".mysql_error());
$no =$mulai+1;
?>
<?php 
include 'lib/koneksi.php';
?>
  <a class="btn btn-primary pull-left" href="datapembayaran.php"><i class="glyphicon glyphicon-tag"></i> Total Data Pembayaran Siswa : <?php echo $jumlah; ?> Record</a> 
  <br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="yellow">
  <td><b>No</b></td>
  <td><b>Nis Murid</b></td>
  <td><b>Nama Murid</b></td>
  <td><b>Kelas</b></td>
  <td><b>Jurusan</b></td>
  <td><b>Tanggal Bayar</b></td>
  <td><b>SPP Bulanan</b></td>
  <td><b>Nomor Rekening</b></td>
  <td><b>Metode Transfer</b></td>
  <td colspan="5"><b>Proses</b></td>
  </tr>
 
  <?php
    while ($row=mysql_fetch_array($qry))
  {
    
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['kelas'];
    $d=$row['jurusan'];
    $e=$row['sppbulanan'];
    $g=$row['nomor_rek'];
    $h=$row['metode_transfer'];
?>
  <tr align="center">
  <td><?php echo $no++;?></td>
    <td><?php echo $a;?></td>
    <td><?php echo $b;?></td>
    <td><?php echo $c;?></td>
    <td><?php echo $d;?></td>
    <td><?php echo date('d M Y', strtotime($row['tanggalbayar'])); ?></td>
    <td><?php echo $e;?></td>
    <td><?php echo $g;?></td>
    <td><?php echo $h;?></td>
    <td>
<a class="btn btn-success" onclick="window.open('detailpembayaran.php?id=<?php echo $a; ?>','popupwindow','scrollbars=yes, width=750,height=600');"><i class="glyphicon glyphicon-cloud-upload"></i> Detail </a>
<a href="hapuspembayaran.php?id=<?=$a;?>" onclick="return confirm('Anda Yakin Ingin Mengapus Item Ini?');" class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus </a>

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
<li class="page-item"><a class="page-link" href="datapembayaran.php?halaman=1">Sebelumnya</a></li>
<li class="page-item"><a class="page-link" href="datapembayaran.php?halaman=<?php echo $link_prev; ?>"> &laquo;</a></li>
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
            <li class="page-item"><a class="page-link" href="datapembayaran.php?halaman=<?php echo $link_next; ?>">&raquo;</a></li>
            <li class="page-item"><a class="page-link" href="datapembayaran.php?halaman=<?php echo $pages; ?>">Selanjutnya</a></li>
            <?php } ?>