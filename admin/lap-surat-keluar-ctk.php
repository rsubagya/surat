<?php
session_start();
//	require 'cek.php';
	require 'config.php';
//	require '../sections/header.php';
	
require('../assets/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('../assets/ico/Logo1.jpg',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PUSKESMAS HARAPAN RAYA',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : (0761) 26326',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. H. Imam Munandar No. 40',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.siasy.puskesmas-harapan-raya.org email : customer.care@puskesmas-harapan-raya.org',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Surat Keluar",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Nomor Surat', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Tujuan Surat', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Tanggal Dikeluarkan', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Jenis Surat', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Ringkasan Surat', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from surat_keluar");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['no_surat'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['tujuan_surat'], 1, 0,'C');
	$pdf->Cell(4, 0.8, $lihat['tanggal_dikeluarkan'],1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['jenis_surat'], 1, 0,'C');
	$pdf->Cell(7, 0.8, $lihat['ringkasan_surat'],1, 1, 'C');

	$no++;
}

$pdf->Output("laporan_surat.pdf","I");

?>

