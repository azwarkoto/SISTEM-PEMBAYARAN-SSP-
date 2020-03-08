<?php 
include 'lib/koneksi.php';
?>
   <section class="content">
  <div class="row">
  <div class="col-md-5">
  
<h3><b>LAPORAN TRANSAKSI PEMBAYARAN</b></h3>
</center>
<p>&nbsp;  </p>
    <div style="border:1px solid #B0C4DE; padding:10px; overflow:auto; width:1113px; height:500px;">
    <?php
      $Open = mysql_connect("localhost","root","");
        if (!$Open){
        die ("Koneksi ke Engine MySQL Gagal !");
        }
      $Koneksi = mysql_select_db("pembayaransppsekolah");
        if (!$Koneksi){
        die ("Koneksi ke Database Gagal !");
        }
    ?>
    <form action="laporantransaksibulanan.php" method="post" name="postform" required>
      <p align="center"><font size="3" color="red"><b>Hasil Pencarian Laporan Data Transaksi Pembayaran Berdasarkan Per Kelas </b></font></p><br />
      <br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
      <tr align="center" bgcolor="yellow">
        <tr>
          <td width="125"><b>Dari Tanggal</b></td>
          <td colspan="2" width="190">: <input type="date" name="tanggal_awal" size="20" /></td>
          <td width="125"><b>Sampai Tanggal</b></td>
          <td colspan="2" width="190">: <input type="date" name="tanggal_akhir" size="20" /></td>
          <td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian" /></td>
        
        </tr>
      </table>
    </form><br />


<?php
      //proses jika sudah klik tombol pencarian data
      if(isset($_POST['pencarian'])){
      //menangkap nilai form
      $tanggal_awal=$_POST['tanggal_awal'];
      $tanggal_akhir=$_POST['tanggal_akhir'];
      if(empty($tanggal_awal) || empty($tanggal_akhir)){
      //jika data tanggal kosong
      ?>
      <script language="JavaScript" required>
        alert('Tanggal Awal dan Tanggal Akhir Harap di Isi!');
        document.location='laporantransaksibulanan.php';
      </script>
      <?php
      }else{
      ?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b><?php echo date('d/m/Y', strtotime($_POST['tanggal_awal']));?></b> s/d <b><?php echo date('d/m/Y', strtotime($_POST['tanggal_akhir']));?></b></i>
      <?php
      $query=mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.tanggalbayar,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek,pembayaran.bukti_kwitansi FROM siswa INNER JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid WHERE tanggalbayar BETWEEN '$tanggal_awal' AND '$tanggal_akhir'");
      }
    ?>
    </p>
    <table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="yellow" align="center">
        <th width="10" height="40"><center>Nis Murid</td>&nbsp;
        <th width="60"><center>Nama Murid</td>&nbsp;
        <th width="60"><center>Kelas</td>&nbsp;
        <th width="60"><center>Jurusan</td>&nbsp;
        <th width="60"><center>Tanggal Bayar</td>&nbsp;
        <th width="80"><center>Uang Pangkal</td>&nbsp;
        <th width="80"><center>Ulangan Umum</td>&nbsp;
        <th width="80"><center>Akhir Tahun</td>&nbsp;
        <th width="80"><center>SPP Bulanan</td>&nbsp;
        <th width="80"><center>Total Bayar</td>&nbsp;
        <th width="80"><center>Metode Transfer</td>&nbsp;
        <th width="80"><center>Nomor Rekening</td>&nbsp;
        <th width="80"><center>Keterangan</td>&nbsp;
        </tr>
      <?php
      //menampilkan pencarian data
      while($row=mysql_fetch_array($query)){
      ?>
      <tr>
        <td align="center" height="30"><?php echo $row['nis_murid']; ?></td>
        <td align="center" height="30"><?php echo $row['nama_murid']; ?></td>
        <td align="center" height="30"><?php echo $row['kelas']; ?></td>
        <td align="center" height="30"><?php echo $row['jurusan']; ?></td>
        <td align="center"><?php echo date('d/m/Y', strtotime($row['tanggalbayar']));?></td>
        <td align="center"><?php echo $row['uangpangkal'];?></td>
        <td align="center"><?php echo $row['ulanganumum'];?></td>
        <td align="center"><?php echo $row['akhirtahun'];?></td>
        <td align="center"><?php echo $row['sppbulanan'];?></td>
        <td align="center"><?php echo $row['totalbayar'];?></td>
        <td align="center"><?php echo $row['metode_transfer'];?></td>
        <td align="center"><?php echo $row['nomor_rek'];?></td>
        <?php
      if(empty($row['sppbulanan']) AND empty($row['totalbayar'])){
           echo '<td align="center">BL</td>';
        } else {
           echo '<td align="center">LUNAS</td>';
        }
      ?>
      </tr>
      <?php
      }
      ?>    
      <tr>
        <td colspan="4" align="center" required> 
        <?php
        //jika pencarian data tidak ditemukan
        if(mysql_num_rows($query)==0){
          echo "<font color=red><blink>Pencarian data tidak ditemukan!</blink></font>";
        }
        ?>
        </td>
      </tr> 
    </table>
<form role="form" action="cetakpembayaran.php" method="POST" target="_blank">
              <table border="0">
                  <tr><td align="right" colspan="6"><button type="submit" class="btn btn-danger">
                  <i>Cetak Laporan Transaksi</i>  
                  </button></td></tr>
                  <input type="hidden" class="form-control" id="tanggalawal" name="tanggalawal"  value= "<?php echo $_POST['tanggal_awal']?>">
                  <input type="hidden" class="form-control" id="tanggalakhir" name="tanggalakhir"  value= "<?php echo $_POST['tanggal_akhir']?>">
               </table>
              </form>
    <?php
    }
    else{
      unset($_POST['pencarian']);
    }
    ?>
            </div>
          </div>
          </div>

      </table>          
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
