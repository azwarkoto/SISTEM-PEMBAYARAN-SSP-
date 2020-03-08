<center style="color:red"><h1><b>Biodata Siswa</b></h3></center>
<br>
<?php include 'lib/koneksi.php';
$qSiswa="SELECT * from siswa where nis_murid='".$_SESSION['id']."'";
$show=mysql_query($qSiswa)or die("gagal".mysql_error());
$row=mysql_fetch_array($show);
$a=$row['nis_murid'];
$b=$row['nama_murid'];
$c=$row['kelas'];
$d=$row['jurusan'];
?>
</br>
<table border="0" width="75%" required> 
	<tr><td><b>Nis</b></td><td>:</td><td><b><?php echo $a; ?></td></b></tr>
	<tr><td><b>Nama</b></td><td>:</td><td><b><?php echo $b; ?></td></b></tr>
	<tr><td><b>Kelas</b></td><td>:</td><td><b><?php echo $c; ?></td></b></tr>
	<tr><td><b>Jurusan</b></td><td>:</td><td><b><?php echo $d; ?></td></b></tr></b>
</table>

<?php 
include 'lib/koneksi.php';
$halaman = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$qBayar="SELECT * from pembayaran where nis_murid='$a'";
$bayar=mysql_query($qBayar)or die("gagal".mysql_error());
$jumlah=mysql_num_rows($bayar);
$pages = ceil($jumlah/$halaman);
$no =$mulai+1;
?>
<br>
<a class="btn btn-primary pull-left" href="siswabayar.php"><i class="glyphicon glyphicon-tag"></i> Total Data Pembayaran : <?php echo $jumlah; ?> Record</a>
</br> 
<br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
<tr align="center" bgcolor="yellow"> 
<tr><td colspan="5" align="center"><b>RINCIAN PEMBAYARAN</b></td></tr>
<tr align="center"> 
	<td><b>No</b></td>
	<td><b>SPP Bulanan</b></td>
	<td><b>Total Bayar</b></td>
  <td><b>Nomor Rekening</b></td>
  <td><b>Metode Transfer</b></td>
  </tr> 
  <?php
    while ($bar=mysql_fetch_array($bayar))
  { 
  	$e=$bar['sppbulanan'];
  	$f=$bar['totalbayar'];
    $g=$bar['nomor_rek'];
    $h=$bar['metode_transfer'];
  	?>
<tr align="center" required> 
<td><b><?php echo $no; ?></b></td>
<td><b><?php echo $e; ?></b></td>
<td><b><?php echo $f; ?></b></td>
<td><b><?php echo $g; ?></b></td>
<td><b><?php echo $h; ?></b></td>
</tr> 
    <?php $no++;
    } ?>
</table>

<p align="center"><a href="bayar.php" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> BAYAR </a></p>
<p align="center"><a href="hapusbayar.php?id=<?=$a;?>" onclick="return confirm('Anda Yakin Ingin Mengapus Item Ini?');" class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus </a>

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
<li class="page-item"><a class="page-link" href="siswabayar.php?halaman=1">Sebelumnya</a></li>
<li class="page-item"><a class="page-link" href="siswabayar.php?halaman=<?php echo $link_prev; ?>"> &laquo;</a></li>
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
            <li class="page-item"><a class="page-link" href="siswabayar.php?halaman=<?php echo $link_next; ?>">&raquo;</a></li>
            <li class="page-item"><a class="page-link" href="siswabayar.php?halaman=<?php echo $pages; ?>">Selanjutnya</a></li>
            <?php } ?>
