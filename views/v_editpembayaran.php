<?php
ob_start();  
include("lib/koneksi.php");
$result = mysql_query("select * from siswa");  
$jsArray = "var Test = new Array();\n";  
ob_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SPP PAYMENT</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header centered" style="color:blue">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo" style="color:blue"><b>SPP PAYMENT</b></a>
            <!--logo end-->
                  
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->



<?php
include("lib/koneksi.php");
$tampil="SELECT * FROM pembayaran where nis_murid='".$_GET['id']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query); 
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['kelas'];
    $d=$row['jurusan'];
    $e=$row['tanggalbayar'];
    $f=$row['jenispembayaran'];
    $g=$row['totalbayar'];  
    $k=$row['bukti_kwitansi'];
    $l=$row['keterangan'];  
    
?>

<form id="form1" name="form1" method="post" action="updatepembayaran.php?nis_murid=<?=$a;?>">
  <table class="table table-bordered">


<script>
function menampilkan(){
  var nis=document.getElementById("form1").sppbulanan.value;
  if (nis=="Januari")
    {
        document.getElementById("totalbayar").value = '350000';
    }
  else if (nis=="Februari")
    {
       document.getElementById("totalbayar").value = '350000';
    }
  else if (nis=="Maret")
    {
       document.getElementById("totalbayar").value = '350000';
    }
  else if (nis=="April")
    {
       document.getElementById("totalbayar").value = '350000';
     }
    else if (nis=="Mei")
    {
       document.getElementById("totalbayar").value = '350000';
    }
    else if (nis=="Juni")
    {
       document.getElementById("totalbayar").value = '350000';
    }
    else if (nis=="Juli")
    {
       document.getElementById("totalbayar").value = '350000';
    }
    else if (nis=="Agustus")
    {
       document.getElementById("totalbayar").value = '350000';
    }
    else if (nis=="September")
    {
       document.getElementById("totalbayar").value = '350000';
    }else if (nis=="Oktober")
    {
       document.getElementById("totalbayar").value = '350000';
    }
    else if (nis=="November")
    {
       document.getElementById("totalbayar").value = '350000';
    }
    else if (nis=="Desember")
    {
      document.getElementById("totalbayar").value = '350000';
    }
     
}
</script>

    <tr>
      <td colspan="2" align="center"><h2>Edit Data Pembayaran</td>
    </tr>
   <tr>
   <td>Nis Murid</td>

<td><select name="nis_murid" onchange="changeValue(this.value)" class="form-control">
<option value='0' disabled="disabled" selected/>Pilih Nis Murid</option>
<?php  
while ($row = mysql_fetch_array($result)) {  
    echo '<option value="' . $row['nama_murid'] . '">' . $row['nis_murid'] . '</option>';  
    $jsArray .= "Test['" . $row['nama_murid'] . "'] = {ns:'" . addslashes($row['nama_murid']) . "',nn:'".addslashes($row['kelas']) ."',nm:'".addslashes($row['jurusan'])."'};\n";  
}?>  
</select></td></tr> 

<tr>
<td>Nama Murid</td> 
<td><input type="text" name="nama_murid" id="nama_murid" class="form-control" /></td>
</tr>
<tr>
<td>Kelas</td> 
<td><input type="text" name="kelas" id="kelas" class="form-control" /><script type="text/javascript"></script>
</tr>
<tr>
<td>Jurusan</td> 
<td><input type="text" name="jurusan" id="jurusan" class="form-control"/><script type="text/javascript" >
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('nama_murid').value = Test[id].ns;
document.getElementById('kelas').value = Test[id].nn;
document.getElementById('jurusan').value = Test[id].nm;
};
</script>
</td>
</tr>
 <tr>
    <td>Tanggal Bayar</td>
      <td><input type="date" name="tanggalbayar" id="tanggalbayar" value="<?php echo $c;?>" /></td>
    </tr>
    <tr>
<td>Spp Bulanan</td>
<td><select type="varchar" onchange="menampilkan()" class="form-control" name="sppbulanan">
<option value='0' disabled="disabled" selected/>Pilih Spp Bulanan</option>
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
<tr>
<td>Total Bayar</td>
<td>
  <input type='int' id="totalbayar" name="totalbayar" class="form-control">
</td>
</tr>
    <tr>
<td>Bukti Pembayaran</td>
<td>
  <input type='file' id="bukti_kwitansi" name="bukti_kwitansi" class="form-control">
</td>
</tr>
<tr>
<td>Keterangan</td>
<td>
  <input type='text' id="keterangan" name="keterangan" class="form-control">
</td>
</tr>
    
    <tr>
      <td height="23">&nbsp;</td>
      <td>
      <input type="hidden" name="update" value="">
<button type="submit" class="btn btn-primary">Update</button>
<a href="datapembayaran.php" type="reset" class="btn btn-default">Cancel</td>
    </tr>
  </table>
</form>
</div> <!-- /container -->   


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
</body>
</html>
