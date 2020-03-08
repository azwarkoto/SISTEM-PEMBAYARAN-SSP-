<?php
include("lib/koneksi.php");
?>
<center style="color:red"><h1>DATA SISWA</h1></center>
<?php
$tampil="SELECT * FROM siswa order By nis_murid";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
$jumlah=mysql_num_rows($query);
$no =$mulai+1;

?>
<?php 
include 'lib/koneksi.php';
$halaman = 10; //batasan halaman
$page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
$query = mysql_query("select * from siswa LIMIT $mulai, $halaman");
$sql = mysql_query("select * from siswa");
$total = mysql_num_rows($sql);
$pages = ceil($total/$halaman); 
$no =$mulai+1;

?>
     <script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
  var tanggal = new Date();  
  setTimeout("waktu()",1000);  
  document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

  var popupWindow = null;
  function centeredPopup(url,winName,w,h,scroll){
  LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
  TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
  settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
  popupWindow = window.open(url,winName,settings)
}
</script>
  </head>

<?php 
include 'lib/koneksi.php';
?>
 <form action="searchsiswa.php" method="get">
  <input placeholder="Input Nis Siswa" type="text" name="cari" required>
  <input type="submit" value="Cari Data Siswa">
</form>

  <a class="btn btn-primary pull-left" href="datasiswa.php"><i class="glyphicon glyphicon-tag"></i> Total Data Siswa: <?php echo $jumlah; ?> Record</a> 
  <a class="btn btn-primary pull-right" href="printsiswa.php" onClick="window.print();"><i class="glyphicon glyphicon-print"></i> Print Data Siswa</a>
  <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>   
  <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" ><img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>        
  <br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="yellow">
  <td><b>No</b></td>
  <td><b>Nis Murid</b></td>
  <td><b>Nama Murid</b></td>
  <td><b>Tempat Lahir</b></td>
  <td><b>Tanggal Lahir</b></td>
  <td><b>Jenis Kelamin</b></td>
  
  <td colspan="3"><b>Proses</b></td>
  </tr>

  <?php
    while ($row=mysql_fetch_array($query))
  {
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['tempatlahir'];
    $d=$row['tanggallahir'];
    $e=$row['jeniskelamin'];
   
?>


    <tr align="center">
    <td><?php echo $no++;?></td>
    <td><?php echo $a;?></td>
    <td><?php echo $b;?></td>
    <td><?php echo $c;?></td>
    <td><?php echo date('y-m-d', strtotime($row['tanggallahir'])); ?></td>
    <td><?php echo $e;?></td>
    <td>
       <a class="btn btn-success" onclick="window.open('detailsiswa.php?nis_murid=<?php echo $a; ?>','popupwindow','scrollbars=yes, width=750,height=600');"><i class="glyphicon glyphicon-cloud-upload"></i> Detail </a>
       <a href="editsiswa.php?id=<?=$a;?>" class="btn btn-small btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit </a>
       <a href="hapussiswa.php?id=<?=$a;?>" onclick="return confirm('Anda Yakin Ingin Mengapus Item Ini?');" class="btn btn-small btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus </a> 
       </td>
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
<li class="page-item"><a class="page-link" href="datasiswa.php?halaman=1">Sebelumnya</a></li>
<li class="page-item"><a class="page-link" href="datasiswa.php?halaman=<?php echo $link_prev; ?>"> &laquo;</a></li>
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
            <li class="page-item"><a class="page-link" href="datasiswa.php?halaman=<?php echo $link_next; ?>">&raquo;</a></li>
            <li class="page-item"><a class="page-link" href="datasiswa.php?halaman=<?php echo $pages; ?>">Selanjutnya</a></li>
            <?php } ?>