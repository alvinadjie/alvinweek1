<?php

require('pdf.php');
$pdf = new FPDF("L","cm","A4");
$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
//$pdf->Image('../logo/malasngoding.png',1,1,2,2);

$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,0.7,'Rekap Data Semua Dokter',0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->ln(1);

//$pdf->Cell(8, 0.8, '', 0, 0, 'C');
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Tanggal Lahir', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jenis Dokter', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'JK', 1, 0, 'C');;
$pdf->Cell(3, 0.8, 'Jenis SIP', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'STR Berlaku', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Alamat', 1, 1, 'C');
$no=1;
   $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");           
foreach ($dokter as $dok) {
//$nobulan=$laporans['bulan'];
//$pdf->Cell(8, 0.8, '', 0, 0, 'C');
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $dok['nama'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $dok['tgllahir'], 1, 0, 'C');
$pdf->Cell(3, 0.8, $dok['jenis_dok'], 1, 0, 'C');
$pdf->Cell(2, 0.8, $dok['jk'], 1, 0, 'C');
$pdf->Cell(3, 0.8, $dok['jenis_sip'], 1, 0, 'C');
$pdf->Cell(3, 0.8, $dok['strberlaku'], 1, 0, 'C');

	$pdf->Cell(6, 0.8, $dok['alamat'],1, 1, 'C');
	
	$no++;
}

//$q=mysql_query("select sum(total_harga) as total from barang_laku where tanggal=".$tanggal);
// select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
//while($total=mysql_fetch_array($q)){
//	$pdf->Cell(17, 0.8, "Total Pendapatan", 1, 0,'C');		
//	$pdf->Cell(4.5, 0.8, "Rp. ".number_format($total['total'])." ,-", 1, 0,'C');	
//}
//$qu=mysql_query("select sum(laba) as total_laba from barang_laku where tanggal=".$tanggal);
// select sum(total_harga) as total from barang_laku where tanggal='$tanggal'
//while($tl=mysql_fetch_array($qu)){
//	$pdf->Cell(4, 0.8, "Rp. ".number_format($tl['total_laba'])." ,-", 1, 1,'C');	
//}
$pdf->Output("laporan_penjualan.pdf","I");
?>