<?php 
include 'config.php';
$id=$_POST['id'];
$nomor=$_POST['nomor'];
$tanggal=$_POST['tanggal'];
$asal=$_POST['asal'];
$tujuan=$_POST['tujuan'];
$perihal=$_POST['perihal'];

mysql_query("update surat_masuk set no_surat='$nomor', tanggal_terima='$tanggal', asal_surat='$asal', tujuan_surat='$tujuan', perihal_surat='$perihal' where id_surat='$id'");
header("location:lihat-surat-masuk.php");

 ?>