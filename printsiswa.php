<?php

include "lib/koneksi.php";
require('fpdf17/fpdf.php');

/**
 Judul  : Laporan PDF DATA SISWA
 
 **/
//Menampilkan data dari tabel di database
 
$result=mysql_query("SELECT * FROM siswa ORDER BY nis_murid ASC") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_nis_murid = "";
$column_nama_murid = "";
$column_tempatlahir = "";
$column_tanggallahir = "";
$column_jeniskelamin = "";
$column_orangtua= "";
$column_alamat= "";
$column_agama = "";
$column_kelas = "";
$column_tahunajaran = "";
$column_jurusan = "";

//For each row, add the field to the corresponding column
while($row = mysql_fetch_array($result))
{
  $nis_murid= $row["nis_murid"];
    $nama_murid = $row["nama_murid"];
    $tempatlahir = $row["tempatlahir"];
    $tanggallahir = $row["tanggallahir"];
    $jeniskelamin = $row["jeniskelamin"];
    $orangtua = $row["orangtua"];
    $alamat = $row["alamat"];
    $agama = $row["agama"];
    $kelas = $row["kelas"];
    $tahunajaran = $row["tahunajaran"];
    $jurusan = $row["jurusan"];  
  
error_reporting(E_ALL ^ E_NOTICE);
    $column_nis_murid = $column_nis_murid.$nis_murid."\n";
    $column_nama_murid = $column_nama_murid.$nama_murid."\n";
    $column_tempatlahir = $column_tempatlahir.$tempatlahir."\n";
    $column_tanggallahir = $column_tanggallahir.$tanggallahir."\n";
    $column_jeniskelamin = $column_jeniskelamin.$jeniskelamin."\n";
    $column_orangtua = $column_orangtua.$orangtua."\n";
    $column_alamat = $column_alamat.$alamat."\n";
    $column_agama = $column_agama.$agama."\n";
    $column_kelas = $column_kelas.$kelas."\n";
    $column_tahunajaran = $column_tahunajaran.$tahunajaran."\n"; 
    $column_jurusan = $column_jurusan.$jurusan."\n";
    
//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('logo.jpg',10,10,-170);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80);
$pdf->Cell(35,15,'SMA BUDAYA DJAKARTA',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(35,5,'DATA SISWA ',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(35,11,'Jalan Dermaga Baru, Klender, Jakarta Timur 13470 ',0,0,'C');
$pdf->Ln();

$pdf->Cell(80);
$pdf->Cell(35,13,'==================================================================================',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 50;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',6);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(1);
$pdf->Cell(14,8,'Nis Murid',1,0,'C',1);
$pdf->SetX(15);
$pdf->Cell(28,8,'Nama Murid',1,0,'C',1);
$pdf->SetX(43);
$pdf->Cell(17,8,'Tempat Lahir',1,0,'C',1);
$pdf->SetX(60);
$pdf->Cell(16,8,'Tanggal Lahir',1,0,'C',1);
$pdf->SetX(76);
$pdf->Cell(15,8,'Jenis Kelamin',1,0,'C',1);
$pdf->SetX(91);
$pdf->Cell(26,8,'Orang tua',1,0,'C',1);
$pdf->SetX(117);
$pdf->Cell(35,8,'Alamat',1,0,'C',1);
$pdf->SetX(152);
$pdf->Cell(18,8,'Agama',1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(13,8,'Kelas',1,0,'C',1);
$pdf->SetX(183);
$pdf->Cell(15,8,'Tahun Ajaran',1,0,'C',1);
$pdf->SetX(198);
$pdf->Cell(11,8,'Jurusan',1,0,'C',1);

$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 58;

//Now show the columns
$pdf->SetFont('Arial','',5);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(1);
$pdf->MultiCell(14,6,$column_nis_murid,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(28,6,$column_nama_murid,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(43);
$pdf->MultiCell(17,6,$column_tempatlahir,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(60);
$pdf->MultiCell(16,6,$column_tanggallahir,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(76);
$pdf->MultiCell(15,6,$column_jeniskelamin,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(91);
$pdf->MultiCell(26,6,$column_orangtua,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(117);
$pdf->MultiCell(35,6,$column_alamat,1,'C');


$pdf->SetY($Y_Table_Position);
$pdf->SetX(152);
$pdf->MultiCell(18,6,$column_agama,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(13,6,$column_kelas,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(183);
$pdf->MultiCell(15,6,$column_tahunajaran,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(198);
$pdf->MultiCell(11,6,$column_jurusan,1,'C');

$pdf->SetFont('Arial','B',10);

$pdf->Cell(150);
$pdf->Cell(50,20,date('l, m-d-Y'),0,0,'C');
$pdf->Ln();
$pdf->Cell(150);
$pdf->Cell(50,10,'Kepala SMA Budaya ',0,0,'C');
$pdf->Ln();

$pdf->Cell(140);
$pdf->Image('index.png');
$pdf->Ln();

$pdf->Cell(150);
$pdf->Cell(50,40,'Nuryahya, M.MPd ',0,0,'C');
$pdf->Ln();



$pdf->Output();


?>

    
