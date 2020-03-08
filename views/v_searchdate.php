<html>
	<head>
	<script>
    function print_d(){
      window.open("cetakpdfsiswa.php","_blank");
    }
  </script>
  <h3><b>LAPORAN DATA SISWA</b></h3>
  <p>&nbsp;  </p>

		<title>Pencarian Data Berdasarkan Periode</title>
	</head>
	<body>
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
		<form action="searchdate.php" method="post" name="postform">
			<p align="center"><font color="red" size="3"><b>Pencarian Data Siswa Berdasarkan Periode</b></font></p><br />
			<br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  				<tr align="center" bgcolor="yellow">
					<td width="125"><b>Dari Tahun</b></td>
					<td colspan="2" width="190"> : <select name='tahunawal'>
                            <option value='#'>Tahun</option>
                            <?php for ($tgl=2014; $tgl <= 2014; $tgl++){
                             echo  "<option value='".$tgl."'>".$tgl."</option> " ;
                            };
                            ?>
                        </select>

					</td>
					<td width="125"><b>Sampai Tahun</b></td>
					<td colspan="2" width="190"> : <select name='tahunakhir'>
                            <option value='#'>Tahun</option>
                            <?php for ($tgl=2015; $tgl <= 2015; $tgl++){
                             echo  "<option value='".$tgl."'>".$tgl."</option> " ;
                            };
                            ?>
                        </select></td>
					<td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian" /></td>
					
              </form>
          </div>
          </div>
          </div>

			</table>
		</form><br />


<?php
			//proses jika sudah klik tombol pencarian data
			if(isset($_POST['pencarian'])){
			//menangkap nilai form
			$tahunawal=$_POST['tahunawal'];
			$tahunakhir=$_POST['tahunakhir'];
			if(empty($tahunawal) || empty($tahunakhir)){
			//jika data tanggal kosong
			?>
			<script language="JavaScript" required>
				alert('Tahun Awal dan Tahun Akhir Harap di Isi!');
				document.location='searchdate.php';
			</script>
			<?php
			}else{
			?><i><b>Informasi : </b> Hasil pencarian data berdasarkan periode <b><?php echo $_POST['tahunawal']?></b> s/d <b><?php echo $_POST['tahunakhir']?></b></i>
			<?php
			$query=mysql_query("select * from siswa where tahunajaran between '$tahunawal' and '$tahunakhir'");
			}
			?>
				</p>
				<br><center style="color:blue"><table class="table table-bordered" width="100%" cellpadding="0" cellspacing="0">
  				<tr align="center" bgcolor="yellow">
				<th width="10" height="40"><center>Nis_Murid</td>&nbsp;
				<th width="160"><center>Nama_murid</td>&nbsp;
				<th width="80"><center>Tempat Lahir</td>&nbsp;
				<th width="100"><center>Tanggal Lahir</td>&nbsp;
				<th width="100"><center>Jenis Kelamin</td>&nbsp;
				<th width="180"><center>Orang Tua</td>&nbsp;     
				<th width="230"><center>Alamat</td>&nbsp;
				<th width="80"><center>Agama</td>&nbsp;
				<th width="50"><center>Kelas</td>&nbsp;
				<th width="80"><center>Tahun Ajaran</td>&nbsp;
				<th width="50"><center>Jurusan</td>&nbsp; 
			</tr>
			<?php
			//menampilkan pencarian data
			while($row=mysql_fetch_array($query)){
			?>
			<tr>
				<td align="center" height="30"><?php echo $row['nis_murid']; ?></td>
				<td align="center"><?php echo $row['nama_murid']; ?></td>
				<td align="center"><?php echo $row['tempatlahir'];?></td>
				<td align="center"><?php echo date('y-m-d', strtotime($row['tanggallahir']));?></td>
				<td align="center"><?php echo $row['jeniskelamin'];?></td>
				<td align="center"><?php echo $row['orangtua'];?></td>
				<td align="center"><?php echo $row['alamat'];?></td>
				<td align="center"><?php echo $row['agama'];?></td>
				<td align="center"><?php echo $row['kelas'];?></td>
				<td align="center"><?php echo $row['tahunajaran'];?></td>
				<td align="center"><?php echo $row['jurusan'];?></td>
			</tr>

			<?php
			}
			?>    
			<tr>
				<td colspan="4" align="center"> 
				<?php
				//jika pencarian data tidak ditemukan
				if(mysql_num_rows($query)==0){
					echo "<font color=red><blink>Pencarian data siswa tidak ditemukan!</blink></font>";
				}
				?>
				</td>
			</tr> 
		</table>
				<iframe width='174' height='189' name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
		 <form role="form" action="cetakpdfsiswa.php" method="POST" target="_blank">
              <table border="0">
                  <tr><td align="right" colspan="6"><button type="submit" class="btn btn-danger">
                  <i class="glyphicon glyphicon-folder-open"> Cetak Laporan Siswa </i>  
                  </button></td></tr>
                  <input type="hidden" class="form-control" id="tahunawal" name="tahunawal"  value= "<?php echo $_POST['tahunawal']?>">
                  <input type="hidden" class="form-control" id="tahunakhir" name="tahunakhir"  value= "<?php echo $_POST['tahunakhir']?>">
               </table>
              </form>


		<?php
		}
		else{
			unset($_POST['pencarian']);
		}
		?>
		</body>
</html>