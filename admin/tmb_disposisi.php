<?php 
include 'config.php';
$id_surat_masuk=$_POST['id_surat_masuk'];
$tanggal_disposisi=$_POST['tanggal_disposisi'];
$disposisi_ke=$_POST['disposisi_ke'];
$keterangan=$_POST['keterangan'];

mysql_query("insert into disposisi values('$id_surat_masuk','$tanggal_disposisi','$disposisi_ke','$keterangan')");
header("location:disposisi.php");