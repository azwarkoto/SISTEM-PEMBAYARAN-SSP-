<?php
require_once('lib/view.php');
$data['title'] = "SMA BUDAYA JAKARTA";
$data['page'] = "v_admin.php";
require_once View::getView('dashboard.php', $data);
?>
<?php 
include 'lib/koneksi.php';
?> 
 <center style="color:red"><h1>Hasil Pencarian</h1></center>
 <body BGCOLOR="greek">
<form action="searchsiswa.php" method="get">
  <input placeholder="Input Nis Siswa" type="text" name="cari" required >
  <input type="submit" value="Cari Data Siswa">
</form>
 <input type="button" value="Kembali" onclick="history.back(-1)" />
<?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $no =$mulai+1;
}
?>
 
<br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="yellow">
  <td><b>No</b></td>
  <td><b>Nis Murid</b></td>
  <td><b>Nama Murid</b></td>
  <td><b>Tempat Lahir</b></td>
  <td><b>Tanggal Lahir</b></td>
  <td><b>Jenis Kelamin</b></td>
  <td><b>Orangtua</b></td>
  <td><b>Alamat</b></td>
  <td><b>Agama</b></td>
  <td><b>Kelas</b></td>
  <td><b>tahun ajaran</b></td>
  <td><b>Jurusan</b></td>
  </tr>
  <?php 
  ob_start();
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysql_query("select * from siswa where nis_murid like '%".$cari."%'");       
  }
  ob_flush();
  $nis = 1;
  while($d = mysql_fetch_array($data)){
  ?>
  <tr>
  <td><center><?php echo $no++;?></td></center>
    <td><center><?php echo $d['nis_murid'];?></td></center>
    <td><center><?php echo $d['nama_murid']; ?></td></center>
     <td><center><?php echo $d['tempatlahir']; ?></td></center>
      <td><center><?php echo date('y-m-d', strtotime($row['tanggallahir'])); ?></td></center>
       <td><center><?php echo $d['jeniskelamin']; ?></td></center>
       <td><center><?php echo $d['orangtua']; ?></td></center>
        <td><center><?php echo $d['alamat']; ?></td></center>
         <td><center><?php echo $d['agama']; ?></td></center>
         <td><center><?php echo $d['kelas']; ?></td></center>
         <td><center><?php echo $d['tahunajaran']; ?></td></center>
          <td><center><?php echo $d['jurusan']; ?></td></center>
        </td>
        
  </tr>
  <?php 
    }
     
    ?>

</table>