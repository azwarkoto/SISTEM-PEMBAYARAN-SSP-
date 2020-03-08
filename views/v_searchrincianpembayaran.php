  <?php
  include("lib/koneksi.php");
  ?>
   <center style="color:red"><h1>Hasil Pencarian  Data Pembayaran Spp Per Siswa</h1></center>
   <body BGCOLOR="greek">
  <form action="searchrincianpembayaran.php" method="get">
    <input placeholder="Input Nis Siswa" type="text" name="cari" required >
    <input type="submit" value="Cari Data Siswa">
  </form>
   <input type="button" value="Kembali" onclick="history.back(-1)" />
  <?php 
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
  }
  ?>
  <br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="yellow">
    <td><center><b>No</b></td></center>
    <td><center><b>Nis Murid</b></td></center> 
    <td><center><b>Nama</b></td></center>
    <td><center><b>Kelas</b></td></center>
    <td><center><b>Jurusan</b></td></center>
    <td><center><b>Uang Pangkal</b></td></center>
    <td><center><b>Ulangan Umum</b></td></center>
    <td><center><b>Akhir Tahun</b></td></center>
    <td><center><b>Spp Bulanan</b></td></center>
    <td><center><b>Metode Transfer</b></td></center>
    <td><center><b>Nomor Rekening</b></td></center>
    <td><center><b>Status</b></td></center>
    </tr>
    <?php 
    if(isset($_GET['cari'])){
      $cari = $_GET['cari'];
      $data = mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.tanggalbayar,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek,pembayaran.bukti_kwitansi FROM siswa INNER JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid WHERE siswa.nis_murid LIKE '%".$cari."%'");}
    $no=1;
    while($d = mysql_fetch_array($data)){   
    ?>
    <tr>
      <td><center><?php echo $no++;?></td></center>
      <td><center><?php echo $d['nis_murid'];?></td></center>
      <td><center><?php echo $d['nama_murid']; ?></td></center>
      <td><center><?php echo $d['kelas']; ?></td></center>
      <td><center><?php echo $d['jurusan']; ?></td></center>
      <td><center><?php echo $d['uangpangkal']; ?></td></center>
      <td><center><?php echo $d['ulanganumum']; ?></td></center>
      <td><center><?php echo $d['akhirtahun']; ?></td></center>
      <td><center><?php echo $d['sppbulanan']; ?></td></center>
      <td><center><?php echo $d['metode_transfer']; ?></td></center>
      <td><center><?php echo $d['nomor_rek']; ?></td></center>
      <td><center>
      <?php
      if(empty($d['sppbulanan']) AND empty($d['totalbayar'])){
           echo 'BL</td>';
        } else {
           echo 'LUNAS</td>';
        }
      ?>  
      <?php
      } ?>
      </table>
      </div>