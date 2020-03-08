<?php include 'lib/koneksi.php'; 
$qSiswa="SELECT * from siswa where nis_murid='".$_SESSION['id']."'";
$show=mysql_query($qSiswa)or die("gagal".mysql_error());
$row=mysql_fetch_array($show);
$a=$row['nis_murid'];
date_default_timezone_set('Asia/Jakarta');
$tgl=date("Y-m-d");
?>
<h2><b>Proses Bayar</b></h2>
<form action="simpanbayar.php" method="post" enctype="multipart/form-data">
<table width="100%">
<tr><td><b>NIS</b></td><td><input type="text" name="nis_murid" id="nis_murid" value="<?php echo $a; ?>" class="form-control" readonly/></td></tr> 
<tr><td><b>Uang Pangkal</b></td>
<td><input type="text" name="uangpangkal" id="uangpangkal" value="50000" class="form-control" readonly/></td> 
</tr>
<tr><td><b>Ulangan Umum</td> 
<td><input type="text" name="ulanganumum" id="ulanganumum" value="50000" class="form-control" readonly/></td> 
</tr>
<tr><td><b>Akhir Tahun</td> 
<td><input type="text" name="akhirtahun" id="akhirtahun" value="50000" class="form-control" readonly/></td> 
</tr>
<tr><td><b>SPP Bulan</td> 
<td><select id="sppbulanan" name="sppbulanan" class="form-control"  required >
<option value="">Pilih Bulan Pembayaran</option>
<option value="Januari">Januari</option>
<option value="Februari">Februari</option>
<option value="Maret">Maret</option>
<option value="April">April</option>
<option value="Mei">Mei</option>
<option value="Juni">Juni</option>
<option value="Juli">Juli</option>
<option value="Agustus">Agustus</option>
<option value="September">September</option>
<option value="Oktober">Oktober</option>
<option value="November">November</option>
<option value="Desember">Desember</option>
</select></td>
</tr> 
<tr><td><b>Total Bayar</td><td><input type="text" name="totalbayar" id="totalbayar" value="500000" class="form-control" readonly></td></tr>
<tr><td><b>Metode Transfer</th></b></td>
<td><select id="metode_transfer" name="metode_transfer" class="form-control"  required >
<option value="">Pilih Pembayaran Bank</option>
<option value="BRI">BRI</option>
<option value="BCA">BCA</option>
<option value="MANDIRI">MANDIRI</option>
<option value="CIMB">CIMB</option>
<option value="BNI">BNI</option>
<option value="MAYBANK">MAYBANK</option>
<option value="PERTAMA BANK">PERTAMA BANK</option>
<option value="DANAMON">DANAMON</option>
</select></td>
</tr>
<tr><td><b>Nomor Rekening</th></b></td>
<td><select id="nomor_rek" name="nomor_rek" class="form-control"  required >
<option value="">Pilih Nomor Rekening</option>
<option value="07708192839">07708192839</option>
<option value="03223818907">03223818907</option>
<option value="03830283089">03830283089</option>
<option value="03820384043">03820384043</option>
<option value="02849382092">02849382092</option>
<option value="04832839829">04832839829</option>
<option value="04745938948">04745938948</option>
<option value="03830218309">03830218309</option>
<option value="08735710390">08735710390</option>
</select></td>
</tr>

<tr>
<td><b>Upload Bukti Pembayaran</b></td>
<td><input type="file" name="bukti_kwitansi"></td>
</tr>
<input type="hidden" name="tanggalbayar" value="<?php echo $tgl;?>"/>
<tr><td>&nbsp;</td>
<td>
<input type="hidden" name="save" value="">
<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Simpan Hasil Data Ini?')">Simpan</button>
<a href="siswabayar.php" class="btn btn-default">Kembali</button>
</td></tr>
</table>
</form>