<p> SISTEM PEMBAYARAN SPP SEKOLAH</p>                           
<?php
 
$user_name = "root";
$password = "";
$database = "pembayaransppsekolah";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
?>

	<div class="container">
<h3>Data Siswa</h3>

<?php
$tampil="SELECT * FROM siswa order By nis";
$query=mysql_query($tampil) or die ("gagal".mysql_error());
$jumlah=mysql_num_rows($query);
?>

      <div class="row-fluid">
    <div class="span12">    
    <div class="well">
    <a class="btn btn-primary pull-left" href="siswa.php"><i class="icon-list icon-white"></i> Total Data: <?php echo $jumlah; ?> Record</a> 
   <a class="btn btn-success pull-right" href="v_siswa.php"><i class="icon-plus-sign icon-white"></i> Tambah Data</a>             
    
    </div>
    </div>
    </div>
        <div class="area-loading"></div>
      </div>
      <div class="modal-body">
        <form method="post">
        <table class="table " width="100%">
          <tr>
                <th width="25%">Nis</th>
                <td width="1%"> : </td>
                <td> <input id="nis" name="nis" class="form-control" type="text" required style="color:red"></td>
            </tr>
            <tr>
            <th width="25%">Nama</th>
                <td width="1%"> : </td>
                <td> <input id="nama" name="nama" class="form-control" type="text" required style="color:red"></td>
            </tr>
            <tr>
            <th width="25%">Tempat Lahir</th>
                <td width="1%"> : </td>
                <td> <input id="tempatlahir" name="tempatlahir" class="form-control" type="text" required style="color:red"></td>
            </tr>
              <?php
                $exec=mysql_query("select * from siswa");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <th width="25%">Tanggal Lahir</th>
            <td><input type="date" name="tanggallahir" id="tanggallahir" value="<?php echo $d;?>" /></td>
            </tr>
            
              <?php
                $exec=mysql_query("select * from siswa");
                while($hasil=mysql_fetch_array($exec))
                  echo "<option value='$hasil[0]'> $hasil[1]</option>";
              ?>
            </select></td>
          </tr>
            <tr>
                <th width="25%">Jenis Kelamin</th>
                <td width="1%"> : </td>
                <td> <select id="jeniskelamin" name="jeniskelamin"  class="form-control"  required >
                <option value="LAKI-LAKI">LAKI-LAKI</option>
                <option value="PEREMPUAN">PEREMPUAN</option>
                </select></td>
            </tr>
            <tr>
                <th width="25%">alamat</th>
                <td width="1%"> : </td>
                <td> <input id="alamat" name="alamat" class="form-control"  type="text" required style="color:orange"></td>
            </tr>
            <tr>
                <th width="25%">Agama</th>
                <td width="1%"> : </td>
                <td> <select id="agama" name="agama"  class="form-control"  required >
                <option value="ISLAM">ISLAM</option>
                <option value="KRISTEN">KRISTEN</option>
				<option value="HINDU">HINDU</option>
                </select></td>
            </tr>
            <tr>
                <th width="25%">kelas</th>
                <td width="1%"> : </td>
                <td> <select id="kelas" type="int" name="kelas"  class="form-control"  required >
                <option value="10">10</option>
                <option value="11">11</option>
				<option value="12">12</option>
                </select></td>
            </tr>
            <tr>
                <th width="25%">Jurusan</th>
                <td width="1%"> : </td>
                <td> <select id="jurusan" name="jurusan"  class="form-control"  required >
                <option value="IPA">IPA</option>
                <option value="IPS">IPS</option>
				<option value="BAHASA INDONESIA">BAHASA INDONESIA</option>
                </select></td>
            </tr>
              </table>  
    <input type="hidden" name="save" value="">
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="dashboard.php" class="btn btn-default">Cancel</a>
    </form>                     
    *)BUKTI PEMBAYARAN SPP MURID : BERUPA KERTAS HASIL BUKTI PEMBAYARAN SPP.<br>
    *)BUKTI SISWA TELAH MELAKUKAN PEMBAYARAN BERUPADA SPP DLL AKAN DISERAHKAN KERTAS, LALU MASUK KE ARSIP SEKOLAH.<br><!DOCTYPE html>

          
      <h2>FORM DATA SISWA</h2>
       <form id="form1" name="form1" method="post" action="simpansiswa.php">
<table width="53%" border="0" align="left">
<tr>
<td colspan="7" align="center"><h2 style="font:Tahoma, Geneva, sans-serif; color: #30F;"></h2></td>
</tr>

<tr>
<td>Nis</td>
<td>:</td>
<td><select name="nis">
</select></td>
</tr>

<tr>
<td>Nama</td>
<td>:</td>
<td><select name="nama">
</select></td>
</tr>

<tr>
<td>Tempat Lahir</td>
<td>:</td>
<td><input type="text" name="tempatlahir" id="nis" /></td>
</tr>

<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><input type="date" name="tanggallahir" id="nis" /></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><input type="text" name="jeniskelamin" id="nis" /></td>
<option value="">Pilih Jenis Kelamin</option>
<option value="LKI">LAKI-LAKI</option>
<option value="PRM">PEREMPUAN</option>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input type="text" name="alamat" id="nis" /></td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td><input type="text" name="agama" id="nis" /></td>
<option value="">Pilih Jenis Agama</option>
<option value="ISM">ISLAM</option>
<option value="KRS">KRISTEN</option>
<option value="HDN">HINDU</option>
<option value="BDA">BUDHA</option>
</tr>
<tr>
<td>Kelas</td>
<td>:</td>
<td><input type="int" name="kelas" id="nis" /></td>
<option value="">Pilih Jenis Kelas</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</tr>
<tr>
<td>Jurusan</td>
<td>:</td>
<td><input type="text" name="jurusan" id="nis" /></td>
<option value="">Pilih Jenis Jurusan</option>
<option value="IPA">IPA</option>
<option value="IPS">IPS</option>
<option value="BAHASA INDONESIA">BAHASA INDONESIA</option>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<input type="hidden" name="save" value="">
<button type="submit" class="btn btn-primary">Save</button>
<a href="http://localhost/sppekolah/siswa.php" class="btn btn-default">Cancel</a></table>
</form>
      
      
    </div> <!-- /container -->
    <div class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="navbar-inner">
        <div class="container">
        </div>
      </div>
    </div>


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
