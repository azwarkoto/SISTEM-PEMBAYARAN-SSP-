<?php
$nama_dokumen='Laporan Data Siswa'; //Beri nama file PDF hasil./ sesuai kan root file mPDF anda
include('../MPDF60/mpdf.php'); //includekan ke file mpdf
 // Create new mPDF Document

//Beginning Buffer to save PHP variables and HTML tags
ob_start();
error_reporting(0);
include "lib/koneksi.php";
include "../fungsi_indotgl.php";

$tahunawal = $_POST['tahunawal'];
$tahunakhir = $_POST['tahunakhir'];
?>

<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak
masalah.-->
<!--CONTOH Code START-->
<table width='100%' border='0'>
            <tr>
                <td width='100'><img src='assets/gambar/jakarta.png' width='120' height='120' align='left'></td>
                <td align='center'>
                    <font size='5'><b>Pemerintah DKI Jakarta<br>Dinas Pendidikan</b></font><br><font size='5'><b>SMA PERGURUAN BUDAYA</b></font><br>
                    <font size='4'>Tahun Ajaran 2018/2019</font><br>
                    <font size='3'>Jl. Dermaga Baru no.46 Klender - Duren Sawit - Jakarta Timur, Telp. (021) 8600791, 8613151, 86607252</font>
                </td>
                <td width='100'><img src='assets/gambar/baru.png' width='140' height='140' align='right'></td>
            </tr>
           </table><h3 align="center">LAPORAN DATA SISWA PER TAHUN</h3>
<table border='1' cellpadding='0' cellspacing='0' width='105%'>
<thead>
<tr class="head">
                        
                          <tr>
                            <th>No</th>
                            <th>Nis Murid</th>
                            <th>Nama murid</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Orang Tua</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Kelas</th>
                            <th>Tahun Ajaran</th>
                            <th>Jurusan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $tampil=mysql_query("SELECT * FROM  siswa where
                        tahunajaran BETWEEN  '$_POST[tahunawal]' AND  '$_POST[tahunakhir]' ORDER BY nis_murid ASC");
                        $no = 1;
                          while ($r=mysql_fetch_array($tampil)){
                        ?>
                            <tbody><tr>
                            <td align="center"><?php echo "$no"?></td>
                            <td align="center"><?php echo "$r[nis_murid]"?></td>                            
                            <td align="center"><?php echo "$r[nama_murid]"?></td>
                            <td align="center"><?php echo "$r[tempatlahir]"?></td>
                            <td align="center"><?php echo date('Y/m/d', strtotime($r['tanggallahir']));?></td>
                            <td align="center"><?php echo "$r[jeniskelamin]"?></td>
                            <td align="center"><?php echo "$r[orangtua]"?></td>
                            <td align="center"><?php echo "$r[alamat]"?></td>
                            <td align="center"><?php echo "$r[agama]"?></td>
                            <td align="center"><?php echo "$r[kelas]"?></td>
                            <td align="center"><?php echo "$r[tahunajaran]"?></td>
                            <td align="center"><?php echo "$r[jurusan]"?></td>
                            </tr>

                        <?php
                        $no++;
                        }
                        ?>

                      </tbody>
                      </table>
                      <center>
<br><td><b><img width='800'><a align='right'>JAKARTA, </a></b></td><td><b><?php echo date('d-m-Y'); ?></td></b>
<br><center><img width='800'><img src='index.png'>
<center><b><img width='800'>( Nuryahya, M.MPd )</p></b>
</center>
            <br> <br>
              <?php 
                      $tanggal =tgl_indo(date('Y-m-d'));
                      ?>
                      <p align="right"> Jakarta, <?php echo "$tanggal"?>
                      <br><br><br><br></p>
                      <p align="right"> Kepala Sekolah </p>                    
<?php
//Batas file sampe sini
$content = ob_get_clean();
$footer = '<p align="right">
           Dicetak pada: '.date("d/m/Y H:i").'
           <p align="right">Halaman: {PAGENO} / {nb}</p>';
try {
    $mpdf=new mPDF('utf-8', 'A4', 10, 'times new roman');
    $mpdf->SetTitle("Cetak Laporan");
    $mpdf->setHTMLFooter($footer);
    $mpdf->WriteHTML($content);
    $mpdf->Output($nama_dokumen.".pdf" ,'I');
} catch(Exception $e) {
    echo $e;
exit;
}
?>