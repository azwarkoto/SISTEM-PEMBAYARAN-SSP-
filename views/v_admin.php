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
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
 <?php 
  if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "belum_login"){
      echo "<script>alert('Anda harus login untuk mengakses ruang admin');location.href='admin.php';</script>";
    }
  }
  ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <p class="centered"><img src="assets/img/logo1.jpg" width="250"></a></p>
      <center><h1><font color="blue"><b>SELAMAT DATANG DI PERGURUAN SEKOLAH BUDAYA DJAKARTA</b></h1></center></font>
      <center><h1><font color="blue"><b>SISTEM PEMBAYARAN SPP</b></h1></center>
  	  <div id="login-page" >
	  	<div class="container" >
				<form class="form-login" action="cekloginadmin.php" method="post" required >
		        <h2 class="form-login-heading" style="color:blue"><b>LOGIN MASUK ADMIN</b></h2>
            <body>
      <div class="content" >
      <div class="preheader" >
      <center><div class="padding"><b>SMA Budaya Jakarta : Jakarta - DKI Jakarta </b></center></div>
      </div>
		        <div class="login-wrap" required>
		            <input type="text" class="form-control" name="username" placeholder="Username" required>
		            <br>
		            <input type="password" class="form-control" name="password" id="password" maxlength="32" placeholder="Password" required></input>
                <td>&nbsp;<input type="checkbox" onclick="myFunction()"><b> Show Password </b></td>
                <script>
                 function myFunction() {
                  var x = document.getElementById('password');
                  if (x.type==="password"){
                      x.type = "text";
                  } else {
                      x.type = "password";
                  } 
                 } 
                </script>
		            <button class="btn btn-theme btn-block" html="dashbroad.html" type="submit" style="color:blue" ><i class="glyphicon glyphicon-log-in" style="color:blue"></i><b> LOGIN </b></button>  		           
		            <center><input type="checkbox" checked="checked"><b> Remember Me </b></div>
		<div class="footer">
      <center><div class="padding"><b> REZA & ADITYA SISTEM PEMBAYARAN SPP 2018 </b></center></div>
    </div>
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/j\\query.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
