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
$tampil="SELECT * FROM siswa where nis_murid='".$_GET['id']."'";
$query=mysql_query($tampil)or die("gagal".mysql_error());
$row=mysql_fetch_array($query);
    $a=$row['nis_murid'];
    $b=$row['nama_murid'];
    $c=$row['tempatlahir'];
    $d=$row['tanggallahir'];
    $e=$row['jeniskelamin'];  
    $f=$row['orangtua'];
    $g=$row['alamat'];
    $h=$row['agama'];
    $i=$row['kelas'];
    $j=$row['tahunajaran'];
    $k=$row['jurusan'];

?>

<form id="form1" name="form1" method="post" action="updatesiswa.php?nis_murid=<?=$a;?>">
  <table class="table table-bordered">
    
    <tr>
      <td colspan="2" align="center"><h2>Edit Data Siswa</td>
    </tr>
    <tr>
      <td>Nis Murid</td>
     <td><?php echo $a; ?></td>
    </tr>
    <tr>
      <td>Nama Murid</td>
      <td><input type="text" name="nama_murid" id="nama_murid" class="form-control" value="<?php echo $b;?>" /></td>
    </tr>
    <tr>
      <td>Tempatlahir</td>
      <td><input type="text" name="tempatlahir" id="tempatlahir" class="form-control" value="<?php echo $c;?>" /></td>
    </tr>
    <tr>
    <td>Tanggal Lahir</td>
      <td><input type="date" name="tanggallahir" id="tanggallahir" value="<?php echo $d;?>" /></td>
    </tr>
    <tr>
   <td>Jenis Kelamin</td>
      <td><input type="text" name="jeniskelamin" id="jeniskelamin" class="form-control" value="<?php echo $e;?>" /></td>
    </tr>
<tr>
    <td>Orangtua</td>
      <td><input type="text" name="orangtua" id="orangtua" class="form-control" value="<?php echo $f;?>" /></td>
    </tr>
    <tr>
    <td>Alamat</td>
      <td><input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $g;?>" /></td>
    </tr>
    <tr>
    <td>Agama</td>
      <td><input type="text" name="agama" id="agama" class="form-control" value="<?php echo $h;?>" /></td>
    </tr>
    <tr>
    <td>Kelas</td>
      <td><input type="text" name="kelas" id="kelas" class="form-control" value="<?php echo $i;?>" /></td>
    </tr>
<tr>
    <td>Tahun Ajaran</td>
      <td><input type="text" name="tahunajaran" id="tahunajaran" class="form-control" value="<?php echo $j;?>" /></td>
    </tr>
 <tr>
    <td>Jurusan</td>
      <td><input type="text" name="jurusan" id="jurusan" class="form-control" value="<?php echo $k;?>" /></td>
    </tr>  
     <tr>
      <td height="23">&nbsp;</td>
      <td>
      <input type="hidden" name="update" value="">
<button type="submit" class="btn btn-primary">Update</button>
<a href="datasiswa.php" type="reset" class="btn btn-default">Cancel</a>
    </tr>
    </td>
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
