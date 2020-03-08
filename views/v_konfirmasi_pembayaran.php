<?php 
include 'lib/koneksi.php';
?>
<center style="color:red"><h1>KONFIRMASI SURAT TEGURAN PEMBAYARAN</h1></center>
<?php
$halaman = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$tampil= mysql_query("SELECT * FROM surat_teguran_pembayaran order By id_surat DESC");
$jumlah=mysql_num_rows($tampil);
$pages = ceil($jumlah/$halaman);
$qry=mysql_query("SELECT * FROM surat_teguran_pembayaran order By id_surat DESC LIMIT $mulai, $halaman") or die ("gagal".mysql_error());
$no =$mulai+1;
?>
<a class="btn btn-primary pull-left" href="konfirmasi_pembayaran.php"><i class="glyphicon glyphicon-tag"></i> Total Data Surat Teguran Pembayaran: <?php echo $jumlah; ?> Record</a> 
<a class="btn btn-success pull-left" href="tambahkonfirmasi.php"><i class="glyphicon glyphicon-pencil"></i> Tambah Data  </a> 

<br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="yellow">
   <td><b>No</b></td>
  <td><b>Nis Murid</b></td>
  <td><b>Nama Murid</b></td>
  <td><b>Kelas</b></td>
  <td><b>Jurusan</b></td>
  <td><b>Keterangan</b></td>
  <td colspan="3"><b>Proses</b></td>
  <tr>
  <?php
    while ($row=mysql_fetch_array($qry))
  {
    
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['kelas'];
    $d=$row['jurusan'];
    $e=$row['keterangan'];
    $o=$row['id_surat'];  
    
  
?>
 <tr align="center">
    <td><?php echo $no++;?></td>
    <td><?php echo $a;?></td>
    <td><?php echo $b;?></td>
    <td><?php echo $c;?></td>
    <td><?php echo $d;?></td>
    <td><?php echo $e;?></td>
    <td>
    <a class="btn btn-success" onclick="window.open('detailsuratteguran.php?id=<?php echo $a; ?>','popupwindow','scrollbars=yes, width=750,height=600');"><i class="glyphicon glyphicon-cloud-upload"></i> Detail</a>
    <a href="hapuskonfirmasi_pembayaran.php?id=<?=$a;?>" onclick="return confirm('Anda Yakin Ingin Mengapus Item Ini?');" class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus </a> 
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
<li class="page-item"><a class="page-link" href="konfirmasi_pembayaran.php?halaman=1">Sebelumnya</a></li>
<li class="page-item"><a class="page-link" href="konfirmasi_pembayaran.php?halaman=<?php echo $link_prev; ?>"> &laquo;</a></li>
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
            <li class="page-item"><a class="page-link" href="konfirmasi_pembayaran.php?halaman=<?php echo $link_next; ?>">&raquo;</a></li>
            <li class="page-item"><a class="page-link" href="konfirmasi_pembayaran.php?halaman=<?php echo $pages; ?>">Selanjutnya</a></li>
            <?php } ?>


