<?php

require('pdf.php');


$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(1,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();

// $pdf->ln(1);
$pdf->SetFont('Times','B',18);
$pdf->Image(base_url().'dist/images/logo.jpeg',5.8,1,-220);
$pdf->Cell(0,0.7,'YAYASAN BINA ISLAM MANDIRI',0,0,'C');
$pdf->ln(0.8);
$pdf->Cell(0,0.7,'SMK BINA ISLAM MANDIRI KERSANA',0,0,'C');
$pdf->SetFont('Times','',10);
$pdf->ln(0.5);
$pdf->Cell(0,0.7,'Jl. Raya Desa Limbangan, Kersana-Brebes 52264 Telp./Fax (0283) 882068',0,0,'C');
$pdf->ln(0.5);
$pdf->Cell(0,0.7,'Ter-Akreditasi A',0,0,'C');
$pdf->ln(0.5);
$pdf->Cell(0,0.7,'e-mail: bismakersana@yahoo.co.id',0,0,'C');
$pdf->ln(0.8);

$pdf->Cell(28, 0, '', 1, 'C');

$pdf->ln(0.5);
$pdf->SetFont('Times','B',19);
$pdf->Cell(0,0.1,'SERTIFIKAT',0,0,'C');
$pdf->ln(0.8);
$pdf->Cell(0,0.1,'PRAKTIK KERJA INDUSTRI',0,0,'C');
$pdf->SetFont('Times','',10);
$pdf->ln(0.5);
$pdf->Cell(0,0.7,'No',0,0,'C');
$pdf->ln(0.5);
$pdf->Cell(0,0.7,'Direktur/Kepala/Pimpinan',0,0,'C');
$pdf->ln(0.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell(0,0.7,'Menyatakan',0,0,'C');
$pdf->SetFont('Times','',10);
$pdf->ln(0.5);
$pdf->Cell(0,0.7,'Bahwa siswa SMK Bina Islam Mandiri Kersana',0,0,'C');
$pdf->ln(0.5);

$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(0.7, 0.5, 'Nama', 0, 1, 'L');
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(4.5, 0.5, 'Nis', 0, 1, 'L');
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(2.5, 0.5, 'Kompetensi Keahlian', 0, 1, 'L');

$pdf->SetFont('Times','',10);
$pdf->ln(0.5);
$pdf->Cell(1, 0.5, '', 0, 0, 'L');
$pdf->Cell(1,0.7,'Telah melaksanakan Praktik Kerja Industri di : .... Selama 5 bulan, dari tanggal .... ',0,0,'L');
// $pdf->Cell(3, 0.8, 'Jenis Dokter', 1, 0, 'C');
// $pdf->Cell(1, 0.8, 'JK', 1, 0, 'C');;
// $pdf->Cell(3.5, 0.8, 'Alamat', 1, 0, 'C');
// $pdf->Cell(7, 0.8, 'No SIP', 1, 0, 'C');
// $pdf->Cell(3, 0.8, 'Jenis SIP', 1, 0, 'C');
// $pdf->Cell(2.5, 0.8, 'STR Berlaku', 1, 1, 'C');
$pdf->ln(2);
$pdf->Cell(2, 0, '', 0, 0, 'C');
$pdf->Cell(3, 4, 'Pas Foto 3x4 CM', 1, 0, 'C');
$pdf->Cell(15, 0, '', 0, 0, 'C');
$pdf->Cell(3, 0, 'Kersana', 0, 1, 'L');

$pdf->Cell(20, 0, '', 0, 0, 'C');
$pdf->Cell(3, 1, 'Pembimbing PKL', 0, 1, 'L');
$pdf->Cell(20, 0, '', 0, 0, 'C');
$pdf->Cell(3, 5, '..........................', 0, 0, 'L');

$no=1;
   $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");           
// foreach ($dokter as $dok) {
// //$nobulan=$laporans['bulan'];
// //$pdf->Cell(8, 0.8, '', 0, 0, 'C');
// $pdf->Cell(0.7, 0.8, $no , 1, 0, 'C');
// $pdf->Cell(4.5, 0.8, $dok['nama'],1, 0, 'C');
// $pdf->Cell(2.5, 0.8, $dok['tgllahir'], 1, 0, 'C');
// $pdf->Cell(3, 0.8, $dok['jenis_dok'], 1, 0, 'C');
// $pdf->Cell(1, 0.8, $dok['jk'], 1, 0, 'C');
// $pdf->Cell(3.5, 0.8, $dok['alamat'],1, 0, 'C');
// $pdf->Cell(7, 0.8, $dok['nosip'], 1, 0, 'C');
// $pdf->Cell(3, 0.8, $dok['jenis_sip'], 1, 0, 'C');
// $pdf->Cell(2.5, 0.8, $dok['strberlaku'], 1, 1, 'C');

	
	
// 	$no++;
// }
$pdf->AddPage();
$pdf->SetFont('Times','',15);
$pdf->Cell(0,0.7,'DAFTAR NILAI',0,0,'C');
$pdf->SetFont('Times','B',15);
$pdf->ln(0.8);
$pdf->Cell(0,0.7,'PRAKTEK KERJA INDUSTRI (PRAKERIN)',0,0,'C');
$pdf->SetFont('Times','B',10);
$pdf->ln(1.2);
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(5, 0.5, 'Nama', 0, 0, 'L');
$pdf->Cell(1, 0.5, ':', 0, 1, 'L');
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(5, 0.5, 'Tempat, Tanggal Lahir', 0, 0, 'L');
$pdf->Cell(1, 0.5, ':', 0, 1, 'L');
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(5, 0.5, 'Nomor Induk Siswa', 0, 0, 'L');
$pdf->Cell(1, 0.5, ':', 0, 1, 'L');
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(5, 0.5, 'Program Keahlian', 0, 0, 'L');
$pdf->Cell(1, 0.5, ':', 0, 1, 'L');
$pdf->Cell(4, 0.5, '', 0, 0, 'L');
$pdf->Cell(5, 0.5, 'Sekolah', 0, 0, 'L');
$pdf->Cell(1, 0.5, ':', 0, 1, 'L');
$pdf->ln(1.2);
$pdf->Cell(28, 0.5, 'MATERI', 1,1, 'C');
$pdf->Cell(1, 0.5, 'NO', 'LR',0, 'C');
$pdf->Cell(9, 0.5, 'ASPEK TEKNIS','LR',0, 'C');
$pdf->Cell(4, 0.5, 'NILAI', 1,0, 'C');
$pdf->Cell(1, 0.5, 'NO', 'LR',0, 'C');
$pdf->Cell(9, 0.5, 'ASPEK NON TEKNIS', 'LR',0, 'C');
$pdf->Cell(4, 0.5, 'NILAI', 1,1, 'C');
// row 3
$pdf->Cell(1, 0.5, '', 'LBR',0, 'C');
$pdf->Cell(9, 0.5, '','LBR', 0, 'C',0);
$pdf->Cell(2, 0.5, 'ANGKA', 1,0, 'C');
$pdf->Cell(2, 0.5, 'HURUF', 1,0, 'C');
$pdf->Cell(1, 0.5, '', 'LBR',0, 'C');
$pdf->Cell(9, 0.5, '', 'LBR',0, 'C');
$pdf->Cell(2, 0.5, 'ANGKA', 1,0, 'C');
$pdf->Cell(2, 0.5, 'HURUF', 1,1, 'C');
//ROW 4
$pdf->Cell(14, 0.5, 'A.Program Umum','LB', 0, 'L',0);
$pdf->Cell(1, 0.5, '1', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Disiplin', 1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(1, 0.5, '1', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Melakukan Pelayanan Prima ',1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(1, 0.5, '2', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Kerjasama', 1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(1, 0.5, '2', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Mengetik Berbagai Naskah Dokumen  ',1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(1, 0.5, '3', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Kerajinan', 1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(14, 0.5, 'B.Program Jurusan','LB', 0, 'L',0);
$pdf->Cell(1, 0.5, '4', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Kreatifitas ', 1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(1, 0.5, '1', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Mengetik Secara Manual Dan Elektrik    ',1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(1, 0.5, '5', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Tanggung Jawab', 1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(1, 0.5, '2', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Mengoperasikan Komputer',1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(1, 0.5, '', 1,0, 'C');
$pdf->Cell(9, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(1, 0.5, '3', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Meregister Surat Masuk dan Keluar ',1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(1, 0.5, '', 1,0, 'C');
$pdf->Cell(9, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(1, 0.5, '4', 1,0, 'C');
$pdf->Cell(9, 0.5, 'Penggandaan Dokumen',1,0, 'L');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(1, 0.5, '', 1,0, 'C');
$pdf->Cell(9, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');


$pdf->Cell(10, 0.5, 'JUMLAH',1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(10, 0.5, 'JUMLAH', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(10, 0.5, 'RATA-RATA',1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(10, 0.5, 'RATA-RATA', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,0, 'C');
$pdf->Cell(2, 0.5, '', 1,1, 'C');

$pdf->Cell(5, 0.5, '', 0, 1, 'L');

$pdf->Cell(5, 0.5, 'Keterangan', 0, 1, 'L');

$pdf->Cell(5, 0.5, '', 0, 1, 'L');

$pdf->Cell(4, 0.5, 'Nilai',1,0, 'C');
$pdf->Cell(4, 0.5, 'Huruf', 1,0, 'C');
$pdf->Cell(4, 0.5, 'Predikat', 1,0, 'L');
$pdf->Cell(3, 0.5, '', 0, 0, 'L');
$pdf->Cell(1, 0.5, 'Kersana...........', 0, 1, 'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(4, 0.5, '90 - 100',1,0, 'C');
$pdf->Cell(4, 0.5, 'A', 1,0, 'C');
$pdf->Cell(4, 0.5, 'Sangat Kompeten', 1,0, 'L');
$pdf->Cell(3, 0.5, '', 0, 0, 'L');
$pdf->Cell(1, 0.5, 'Pembimbing PKL', 0, 1, 'L');
$pdf->Cell(4, 0.5, '70 - 89',1,0, 'C');
$pdf->Cell(4, 0.5, 'B', 1,0, 'C');
$pdf->Cell(4, 0.5, 'Kompeten', 1,1, 'L');
$pdf->Cell(4, 0.5, '50 - 69',1,0, 'C');
$pdf->Cell(4, 0.5, 'C', 1,0, 'C');
$pdf->Cell(4, 0.5, 'Cukup Kompeten', 1,1, 'L');
$pdf->Cell(4, 0.5, '< 49',1,0, 'C');
$pdf->Cell(4, 0.5, 'D', 1,0, 'C');
$pdf->Cell(4, 0.5, 'Kurang Kompeten', 1,0, 'L');
$pdf->Cell(3, 0.5, '', 0, 0, 'L');
$pdf->Cell(1, 0.5, '..........................', 0, 1, 'L');


$pdf->SetFont('Arial','B',12);
$pdf->Output("laporan_sip.pdf","I");
?>