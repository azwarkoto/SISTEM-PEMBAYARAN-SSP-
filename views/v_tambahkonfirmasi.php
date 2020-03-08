  <?php
ob_start();  
include("lib/koneksi.php"); 
ob_flush();
?>
<h3>Surat Konfirmasi Pembayaran</h3>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form id="form1" name="form1" method="post" action="simpankonfirmasipembayaran.php">
        <table class="table " width="100%">
       <?php
include("lib/koneksi.php");
$tampil="SELECT * FROM pembayaran where nis_murid='".$_GET['nis_murid']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query); 
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['kelas'];
    $d=$row['jurusan'];
$sql="SELECT * FROM surat_teguran_pembayaran where nis_murid='".$_GET['nis_murid']."'";
$qry=mysql_query($sql)or die("gagal".mysql_error());
$hasil=mysql_fetch_array($qry);
    $e=$hasil['keterangan'];
    $n=$hasil['isisurat'];
?>
    <tr>
      <th>Nis Murid</th>
      <td width="1%"> : </td>
      <td><input type="text" name="nis_murid" id="nis_murid" class="form-control" value="<?php echo $a;?>" />
    </tr>
    <tr>
      <th>Nama Murid</th>
      <td width="1%"> : </td>
      <td><input type="text" name="nama_murid" id="nama_murid" class="form-control" value="<?php echo $b;?>" /></td>
    </tr>

<tr>
<th>Kelas</th> 
<td width="1%"> : </td>
<td><input type="text" name="kelas" id="kelas" value="<?php echo $c;?>" class="form-control"/>
</tr>
<tr>
<th>Jurusan</th> 
<td width="1%"> : </td>
<td><input type="text" name="jurusan" id="jurusan" value="<?php echo $d;?>" class="form-control"/>
</td>
</tr>
<th>keterangan</th> 
<td width="1%"> : </td>
<td><input type="text" name="keterangan" id="keterangan" value="Belum Bayar Uang Spp Sekolah."<?php echo $e;?>" class="form-control" readonly/>
</td>
</tr>
<tr>
<th>Isi Surat</th> 
<td width="1%"> : </td>
<td><input type="text" name="isisurat" id="isisurat" value="Kami sangat prihatin, mengingat kelangsungan sekolah kita yang berstatus sekolah swasta yang harus membayar segala kebutuhan operasional sekolah dan gaji guru. Dalam hal ini kami sangat mengharapkan bantuan dan dukungan dari Bapak/Ibu agar dapat segera membayar dan menyelesaikan uang tunggakan SPP sebesar tersebut diatas." class="form-control" readonly/>
</td>
</tr>
<tr>
<td>&nbsp;</td>
            
 </table>  
    <input type="hidden" name="save" value="">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="konfirmasi_pembayaran.php" class="btn btn-default">Cancel</a>
    </form> 