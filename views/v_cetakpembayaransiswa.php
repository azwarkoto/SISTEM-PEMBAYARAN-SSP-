<?php
// sesuai kan root file mPDF anda
$nama_dokumen='Laporan Transaksi Pembayaran'; //Beri nama file PDF hasil.
include('/mpdf60/mpdf.php'); //includekan ke file mpdf
 // Create new mPDF Document

//Beginning Buffer to save PHP variables and HTML tags
ob_start();
error_reporting(0);
include "lib/koneksi.php";
include "../fungsi_indotgl.php";

$tanggalawal = $_POST['tanggalawal'];
$tanggalakhir = $_POST['tanggalakhir'];
?>
<!--CONTOH Code START-->
<table width='100%' border='0'>
            <tr>
                <td width='100'><img src='assets/gambar/jakarta.png' width='80' height='100' align='left'></td>
                <td align='center'>
                     <font size='5'><b>Pemerintah DKI Jakarta<br>Dinas Pendidikan</b></font><br><font size='5'><b>SMA PERGURUAN BUDAYA</b></font><br>
                    <font size='4'>Tahun Ajaran 2018/2019</font><br>
                    <font size='3'>Jl. Dermaga Baru no.46 Klender - Duren Sawit - Jakarta Timur, Telp. (021) 8600791, 8613151, 86607252</font>
                </td>
                <td width='100'><img src='assets/gambar/baru.png' width='140' height='140' align='right'></td>
            </tr>
           </table><h3 align="center">LAPORAN TRANSAKSI PEMBAYARAN</h3>
<table border='1' cellpadding='0' cellspacing='0' width='100%'>
<thead>
<tr class="head">
                            <th>No</th>
                            <th>Nis Murid</th>
                            <th>Nama Murid</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tanggal Bayar</th>
                            <th>Uang Pangkal</th>
                            <th>Ulangan Umum</th>
                            <th>Akhir Tahun</th>
                            <th>Spp Bulanan</th>
                            <th>Total Bayar</th>
                            <th>Metode Transfer</th>
                            <th>Nomor Rekening</th>
                            <th>Keterangan</th> 
                            </tr></thead>
                        
                        <?php
                        $tampil=mysql_query("SELECT siswa.nis_murid,siswa.nama_murid,siswa.kelas,siswa.jurusan,pembayaran.tanggalbayar,pembayaran.uangpangkal,pembayaran.ulanganumum,pembayaran.akhirtahun,pembayaran.sppbulanan,pembayaran.totalbayar,pembayaran.metode_transfer,pembayaran.nomor_rek,pembayaran.bukti_kwitansi FROM siswa INNER JOIN pembayaran ON pembayaran.nis_murid=siswa.nis_murid WHERE
                        tanggalbayar BETWEEN  '$_POST[tanggalawal]' AND  '$_POST[tanggalakhir]' ORDER BY siswa.nis_murid ASC");
                        $no = 1;
             
                          while ($r=mysql_fetch_array($tampil)){
                        ?>
                            <tbody><tr>
                            <td align="center"><?php echo "$no"?></td>
                            <td align="center"><?php echo "$r[nis_murid]"?></td>
                            <td align="center"><?php echo "$r[nama_murid]"?></td>
                            <td align="center"><?php echo "$r[kelas]"?></td>
                            <td align="center"><?php echo "$r[jurusan]"?></td>
                            <td align="center"><?php echo date('d/m/Y', strtotime($r['tanggalbayar']));?></td>
                            <td align="center"><?php echo "$r[uangpangkal]"?></td>
                            <td align="center"><?php echo "$r[ulanganumum]"?></td>
                            <td align="center"><?php echo "$r[akhirtahun]"?></td>
                            <td align="center"><?php echo "$r[sppbulanan]"?></td>
                            <td align="center"><?php echo "$r[totalbayar]"?></td>
                            <td align="center"><?php echo "$r[metode_transfer]"?></td>
                            <td align="center"><?php echo "$r[nomor_rek]"?></td>
                            <?php
      if(empty($r['sppbulanan']) AND empty($r['totalbayar'])){
           echo '<td align="center">BL</td>';
        } else {
           echo '<td align="center">LUNAS</td>';
        }
      ?> 
                            </tr>

                        <?php
                        $no++;
                        }
                        ?>
                       
                     
                          <tr>

<td colspan="10"><b><?php echo "<b>TOTAL KESELURUHAN :</b>";?></td></b>
<td colspan="10"><?php
$sql=mysql_query("SELECT * FROM pembayaran");
while ($r=mysql_fetch_array($sql)){
//Looping Untuk menampilkan data (namabarang,jumlah,harga)
$totbay[] = $r['totalbayar'];
}
//Total
$totkes = array_sum($totbay);
//Tampilkan
echo "<b>Rp $totkes";
?></td>
</tr>
</table>

              <center><br><td><b><img width='800'><a align='right'>JAKARTA, </a></b></td><td><b><?php echo date('d-m-Y'); ?></td></b>
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
ob_end_clean();
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