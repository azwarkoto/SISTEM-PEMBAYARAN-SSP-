<?php
session_start();
if (!isset($_SESSION['id'])){
header("Location:./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SIPES</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/gambar/baru.png">
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
      <header class="header centered" style="color:blue" required>
              <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title required="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="siswa.php" class="logo" style="color:blue" ><b>SIPES</b></a>
             
            <!--logo end-->
			            
            <div class="top-menu">
            <ul class="nav pull-right top-menu">
            <li><a class="logout" style="color:red" onclick="return confirm('Anda Yakin Ingin Keluar?')" href="logout.php">Logout</a>
            </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><img src="assets/img/friends/siswa.jpg" class="img-circle" width="60" ></a></p>
              	  <h5 class="centered" ><?php echo $_SESSION['nama']; ?></h5>
          
          <li class="mt">
                      <a href="beranda.php">
                          <i class="glyphicon glyphicon-th-list"></i>
                          <span>Beranda</span>
                      </a>
         <ul>
              <li><a href="sejarahsiswa.php">
              <i class="glyphicon glyphicon-tasks"></i>
               Sejarah Sekolah</a>
              </li>
              <li><a href="visimisisiswa.php">
               <i class="glyphicon glyphicon-picture"></i>
               Visi Misi Sekolah</a></li>
              <li><a href="profilsekolahsiswa.php">
              <i class="glyphicon glyphicon-eye-open"></i>
               Profil Sekolah</a>
              </li>
              </ul>
              </li>
				
				      <li>
              <a href="#">
					    <i class="fa fa-money"></i>
              <span>Transaksi</span>
              </a>
				<ul>
              <li><a href="siswabayar.php">
              <i class="glyphicon glyphicon-usd"></i>
               Transaksi Bayar</a>    
              </li>
              </ul>
              </li>
              <li>
              <a href="informasi.php">
              <i class="glyphicon glyphicon-bullhorn"></i>
              <span>Konfirmasi Surat Teguran</span>
              </a>

              <li>
              <a href="pengaturansiswa.php">
              <i class="glyphicon glyphicon-wrench"></i>
              <span>Pengaturan</span>
              </a>
              <ul>
              <li>
              <a href="gantipasswordsiswa.php">
              <i class="glyphicon glyphicon-floppy-save"></i>
              <span>Ganti Password Siswa</span>             
              </a>
              </li>
              </ul>
              </a>
              
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">

          <div class="row">
            <div class="col-lg-12 main-chart">
				  
				      <h1><?php echo $data['title']?></h1>
              <?php require_once($data['page']) ?>    
                  	
            </div><!-- /col-lg-3 -->
          </div><! --/row -->
        </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
		
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>