<?php 
include 'config.php';
$id = $_POST['id'];
$jenis_surat = $_POST['jenis_surat'];
$nomor = $_POST['nomor'];
//$nama = $_POST['nama'];
//$nip = $_POST['nip'];
$tanggal_dikeluarkan=$_POST['tanggal_dikeluarkan'];
$tujuan_surat=$_POST['tujuan_surat'];
$ringkasan_surat=$_POST['ringkasan_surat'];
$status =$_POST['status'];

mysql_query("update surat_keluar set jenis_surat='$jenis_surat', no_surat='$nomor', ringkasan_surat='$ringkasan_surat', tanggal_dikeluarkan='$tanggal_dikeluarkan', tujuan_surat='$tujuan_surat', status = '$status' where id_surat='$id'");
header("location:lihat-surat-keluar.php");

 ?>