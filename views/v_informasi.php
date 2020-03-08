 <h2 align="center">Informasi Terbaru</h2>
<?php include 'lib/koneksi.php'; 
  $cekdata="SELECT nis_murid from pembayaran WHERE nis_murid='".$_SESSION['id']."'";
  $ada=mysql_query($cekdata) or die(mysql_error());
  if(mysql_num_rows($ada)>0)
  { 
     die("<script>alert('Tidak Ada Informasi Terbaru!');location.href='siswa.php';</script>"); 
  }
  else{ echo "";
  }
?>
<?php
$qInfo="SELECT * FROM surat_teguran_pembayaran";
$tampil=mysql_query($qInfo)or die("gagal".mysql_error());
$row=mysql_fetch_array($tampil);
$e=$row['keterangan'];
$no=1;
?>
<table border="1" width="100%"> 
<tr align="center"><td>No</td><td>Keterangan</td><td>Tampil</td></tr> 
<tr align="center"><td><?php echo $no; ?></td> 
<td>Surat Teguran Pembayaran</td> 
<td><a href="detailsuratteguran.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-print"></i> Lihat</a></td></tr></table>