<?php
ob_start();  
include("lib/koneksi.php"); 
ob_flush();
?>
<h3>Data Pembayaran</h3>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form id="form1" name="form1" method="post" action="simpanpembayaran.php">
        <table class="table " width="100%">
        <script>
function menampilkan(){
  var nis=document.getElementById("form1").sppbulanan.value;
  if (nis=="Januari")
    {
        document.getElementById("totalbayar").value = '1500000';
    }
  else if (nis=="Februari")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
  else if (nis=="Maret")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
  else if (nis=="April")
    {
       document.getElementById("totalbayar").value = '1500000';
     }
    else if (nis=="Mei")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
    else if (nis=="Juni")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
    else if (nis=="Juli")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
    else if (nis=="Agustus")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
    else if (nis=="September")
    {
       document.getElementById("totalbayar").value = '1500000';
    }else if (nis=="Oktober")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
    else if (nis=="November")
    {
       document.getElementById("totalbayar").value = '1500000';
    }
    else if (nis=="Desember")
    {
      document.getElementById("totalbayar").value = '1500000';
    }
     
}
</script>
<?php
include("lib/koneksi.php");
$tampil="SELECT * FROM siswa where nis_murid='".$_GET['nis_murid']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query); 
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['kelas'];
    $d=$row['jurusan'];
    $tgl=date('Y-m-d');
    $f=$row['uangpangkal'];
    $g=$row['ulanganumum'];
    $h=$row['akhirtahun'];
$sql="SELECT * FROM pembayaran where nis_murid='".$_GET['nis_murid']."'";
$qry=mysql_query($sql)or die("gagal".mysql_error());
$hasil=mysql_fetch_array($qry);
    $i=$hasil['sppbulanan'];
    $j=$hasil['totalbayar'];
    $k=$hasil['bukti_kwitansi'];
    $l=$hasil['keterangan'];

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
            <input type="hidden" name="tanggalbayar" value="<?php echo $tgl;?>" id="tanggalbayar"/>

<tr>
<th>Uang Pangkal</th> 
<td width="1%"> : </td>
<td><input type="text" name="uangpangkal" id="uangpangkal" value="<?php echo $f;?>" class="form-control"/>
</td>
</tr>
            
<tr>
<th>Ulangan Umum</th> 
<td width="1%"> : </td>
<td><input type="text" name="ulanganumum" id="ulanganumum" value="<?php echo $g;?>" class="form-control"/>
</td>
</tr>

<tr>
<th>Akhir Tahun</th> 
<td width="1%"> : </td>
<td><input type="text" name="akhirtahun" id="akhirtahun" value="<?php echo $h;?>" class="form-control"/>
</td>
</tr>
            <tr>
                <th width="25%">Spp Bulanan</th>
                <td width="1%"> : </td>
                <td><select id="sppbulanan" name="sppbulanan"  onchange="menampilkan()" class="form-control"  required >
<option value="Januari"<?php if ($e=='Januari'){echo 'selected'; }?>>Januari</option>
<option value="Februari"<?php if ($e=='Februari'){echo 'selected'; }?>>Februari</option>
<option value="Maret"<?php if ($e=='Maret'){echo 'selected'; }?>>Maret</option>
<option value="April"<?php if ($e=='April'){echo 'selected'; }?>>April</option>
<option value="Mei"<?php if ($e=='Mei'){echo 'selected'; }?>>Mei</option>
<option value="Juni"<?php if ($e=='Juni'){echo 'selected'; }?>>Juni</option>
<option value="Juli"<?php if ($e=='Juli'){echo 'selected'; }?>>Juli</option>
<option value="Agustus"<?php if ($e=='Agustus'){echo 'selected'; }?>>Agustus</option>
<option value="September"<?php if ($e=='September'){echo 'selected'; }?>>September</option>
<option value="Oktober"<?php if ($e=='Oktober'){echo 'selected'; }?>>Oktober</option>
<option value="November"<?php if ($e=='November'){echo 'selected'; }?>>November</option>
<option value="Desember"<?php if ($e=='Desember'){echo 'selected'; }?>>Desember</option>
                </select></td>
            </tr>
              <tr>
<th>Total Bayar</th>
<td width="1%"> : </td>
<td>
  <input type='text' id="totalbayar" name="totalbayar" class="form-control">
</td>
</tr>
   
<tr>
<th>Bukti Kwitansi Pembayaran</th> 
<td width="1%"> : </td>
<td><input type="file" name="bukti_kwitansi" id="bukti_kwitansi" value="<?php echo $k;?>" class="form-control"/>
</td>
</tr> 

<tr>
<th>Keterangan</th> 
<td width="1%"> : </td>
<td><select type="text" name="keterangan" id="keterangan" value="<?php echo $l;?>" class="form-control"/>
<option value="Lunas">Lunas</option>
<option value="Belum Lunas">Belum Lunas</option>
</td>
</tr>                       
  </table>  
    <input type="hidden" name="save" value="">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="datapembayaran.php" class="btn btn-default">Cancel</a>
    </form>                     
    