<?php 
include 'config.php';
$pilihan = $_POST['pilihan'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$tanggal=$_POST['tanggal'];
$tujuan=$_POST['tujuan'];
$ringkasan=$_POST['ringkasan'];
$status = 'Belum Disetujui';

mysql_query("insert into surat_keluar values('','$pilihan','$nomor','$ringkasan','$tanggal','$tujuan','$status')");
header("location:ajukan-surat-keluar.php");

 ?>